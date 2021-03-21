<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Bubt Family</title>
    <link rel="icon" href="{{asset('frontend/images/fav.png')}}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{asset('frontend/css\main.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css\weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css\toast-notification.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css\page-tour.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css\style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css\color.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css\responsive.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css\dark-theme.css')}}">

</head>
<body>
@include('front_end.pages.header')
@include('front_end.pages.right_sidebar')
@include('front_end.pages.left_sidebar')
<div class="theme-layout">
    @yield('content')
</div>
@include('front_end.pages.footer')

<script src="{{asset('frontend/js\main.min.js')}}"></script>
<script src="{{asset('frontend/js\jquery-stories.js')}}"></script>
<script src="{{asset('frontend/js\toast-notificatons.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script><!-- For timeline slide show -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script><!-- for location picker map -->
<script src="{{asset('frontend/js\locationpicker.jquery.js')}}"></script><!-- for loaction picker map -->
<script src="{{asset('frontend/js\map-init.js')}}"></script><!-- map initilasition -->
<script src="{{asset('frontend/js\page-tourintro.js')}}"></script>
{{--<script src="{{asset('frontend/js\page-tour-init.js')}}"></script>--}}
<script src="{{asset('frontend/js\script.js')}}"></script>
<script>
    jQuery(document).ready(function($) {

        $('#us3').locationpicker({
            location: {
                latitude: -8.681013,
                longitude: 115.23506410000005
            },
            radius: 0,
            inputBinding: {
                latitudeInput: $('#us3-lat'),
                longitudeInput: $('#us3-lon'),
                radiusInput: $('#us3-radius'),
                locationNameInput: $('#us3-address')
            },
            enableAutocomplete: true,
            onchanged: function (currentLocation, radius, isMarkerDropped) {
                // Uncomment line below to show alert on each Location Changed event
                //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
            }
        });

    });
</script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        
        $('#country').on('keyup',function() {
            var query = $(this).val();
            $.ajax({
               
                url:"{{ route('search') }}",
          
                type:"GET",
               
                data:{'country':query},
               
                success:function (data) {
                  
                    $('#country_list').html(data);
                }
            })
            // end of ajax call
        });

        
        $(document).on('click', 'li', function(){
          
            var value = $(this).text();
            $('#country').val(value);
            $('#country_list').html("");
        });
    });
</script> --}}

</body>
</html>
