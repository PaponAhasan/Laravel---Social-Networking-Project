
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Social Network</title>
    <link rel="icon" href="{{asset('frontend/images/fav.png')}}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{asset('frontend/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/weather-icon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/dark-theme.css')}}">

</head>
<body>

@auth
    @if(Auth::user()->hasVerifiedEmail())
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @endif
@endauth

<main class="py-4">
    @yield('content')
</main>

<script src="{{asset('frontend/js/main.min.js')}}"></script>
<script src="{{asset('frontend/js/script.js')}}"></script>
</body>
</html>
