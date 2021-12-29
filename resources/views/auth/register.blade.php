@extends('layouts.app')

@section('content')

<div class="theme-layout">
    <section>
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="offset-lg-1 col-lg-10">
                        <div class="row border-center ">

                            <div class="col-lg-3 col-md-3" >
                                
                            </div>

                            <div class="col-lg-6 col-md-6" >
                                <div class="logout-f">
                                    <h4><i class="fa fa-key"></i> SIGN UP</h4>
                                    <p>Sign Up Now And Meet The Awesome Friends Around The World.</p>

                                    <div class="logout-form">
                                        @if (Session::has('success_message'))
                                            <div class="alert alert-danger">
                                                <strong>Invalid Email !! </strong>{{ Session()->get('success_message') }}
                                            </div>
                                        @endif
                                        
                                        <form class="again-login" method="POST" action="{{ route('register') }}">
                                         @csrf

                                         <input id="name" type="text"  class="@error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                           @error('name')
                                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                           @enderror

                                            <input id="email" type="email" class="@error('email') is-invalid @enderror"placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                             <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror

                                            <input id="password" type="password" class=" @error('password') is-invalid @enderror" placeholder="Password" name="password"required autocomplete="new-password">

                                            @error('password')
                                             <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror

                                             <input id="password-confirm" type="password"placeholder="Confirm Password"name="password_confirmation" required autocomplete="new-password">

                                            <div class="form-check">
                                           </div>

                                           <button type="submit">{{ __('Register') }}</button>

                                        </form>
                                    </div>  

                                    <div class="col-lg-3 col-md-3" >
                                
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
