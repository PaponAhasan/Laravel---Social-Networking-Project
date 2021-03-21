@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="stat-box">
                <i class="fa fa-sign-in"></i>
                <div class="anlytc-meta">
                    <h4>Verify Your Email Address</h4>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    <span>Before proceeding, please check your email for a verification link. If you did not receive the email, </span>
                    <form class="pull-left" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form> 
                </div>

                <div class="progress" style="height:6px">
                    <div class="progress-bar bg-success" style="width:100%"></div>
                </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
