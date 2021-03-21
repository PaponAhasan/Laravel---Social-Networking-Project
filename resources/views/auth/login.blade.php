@extends('layouts.app')

@section('content')
<div class="theme-layout">

    <section>
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="offset-lg-1 col-lg-10">
                        <div class="row border-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="already-log">
                                    <h4>Recent Login</h4>
                                    <p>Next Time you login click your picture. To remove an account from this page click cross.</p>
                                    <div class="log-user">
                                        <div class="row">

                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <a href="{{ route('register') }}">
                                                <div class="user-add">
                                                    <div><i class="ti-plus"></i><span>Add Account</span></div>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="logout-f">
                                    <h4><i class="fa fa-key"></i> Login</h4>
                                    <p>Login again, you have recently signout from here</p>
                                    <div class="logout-form">
                                        <form class="again-login" method="POST" action="{{route('login') }}">
                                         @csrf
                                            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                             <span class="text-danger" role="alert">
                                              <span>{{ $message }}</span>
                                             </span>
                                            @enderror

                                            <input type="password" placeholder="Password" name="password" required autocomplete="current-password">

                                            @error('password')
                                             <span class="text-danger" role="alert">
                                              <span>{{ $message }}</span>
                                             </span>
                                            @enderror

                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                           <label class="form-check-label" for="remember">
                                             {{ __('Remember Me') }}
                                          </label>
                                           </div>


                                        <button type="submit">Login</button>

                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif

                                        </form>
                                        <a href="{{ route('register') }}" title="">Create New Signup</a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>   

@endsection
