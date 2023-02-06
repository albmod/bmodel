@extends('layouts.shop_login')

<!-- Start  Title -->
@section('title')
    {{ trans('globla.login') }}
@endsection
<!-- End  Title -->


<!-- Start Style -->
@push('styles')


@endpush
<!-- End Style -->



<!-- End DropDown language -->


<!-- Start Content -->
@section('content')

    <div class="axil-signin-area">

        <!-- Start Header -->
        <div class="signin-header">
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <a href="{{ route('site') }}" class="site-logo"><img src="{{asset('assets/shop/images/logo/logo.png')}}" alt="logo"></a>
                </div>
                <div class="col-sm-8">
                    <div class="singin-header-btn">
                        <p>Not a member?</p>
                        <a href="{{ route('register') }}" class="axil-btn btn-bg-secondary sign-up-btn">Sign Up Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner bg_image bg_image--9">
                    <h3 class="title">We Offer the Best Products</h3>
                </div>
            </div>

            <div class="col-lg-6 offset-xl-2">

                <div class="axil-signin-form-wrap" >

                    <div class="axil-signin-form">
                        @include('shops.includes.alerts.success')
                        @include('shops.includes.alerts.errors')
                        <h3 class="title">Sign in to eTrade.</h3>

                        <p class="b2 mb--55">Enter your detail below</p>
                        <form method="POST" class="singin-form" action="{{  route('login.custom')}}">
                            @csrf
                            <div class="form-group">
                                <label>{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">


                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <button type="submit" class="axil-btn btn-bg-primary submit-btn"> {{ __('Login') }}</button>

                                @if (Route::has('password.request'))
                                    <a class="forgot-btn" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
<!-- End Content -->



<!-- Start Script -->
@push('scripts')


@endpush
<!-- End Script -->