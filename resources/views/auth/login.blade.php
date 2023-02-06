@extends('layouts.site_login')
@section('title')
    {{ trans('site.menu.login') }}
@endsection
@section('content')
    <header class="navbar navbar-expand-lg navbar-dark">
        <div class="container position-relative">
            <a class="navbar-brand" href="{{route('site')}}">
                <img class="navbar-brand__regular" src="{{asset('assets/site/img/brand-logo-white.png')}}" alt="brand-logo">
            </a>
            <!--  End of brand logo -->
            <div>
                <a href="{{route('register')}}" class="btn btn-size--md btn-hover--3d btn-bg--cta--4"><span class="btn__text">{{ trans('site.menu.create_your_store') }}</span></a>
            </div>
            <!-- end of nav CTA button -->
        </div>
        <!-- end of container -->
    </header>
    <!-- =========== End of Navigation (main menu)  ============ -->

    <!-- =========== Start of Body ============ -->
    <section class="space bg-color--primary h-min-100vh d-flex align-items-center">
        <div class="svg-shape--top w-100 opacity--05">
            <img src="{{asset('assets/site/img/layout/wave-8.svg')}}" alt="wave" class="svg fill--white">
        </div>
        <!-- end of whole area svg bg -->
        <div class="svg-shape--top opacity--10">
            <img src="{{asset('assets/site/img/layout/wave-9.svg')}}" alt="wave" class="svg fill--white">
        </div>
        <!-- end of top right mini svg shape -->

        <div class="container">
            <div class="row ">
                <div class="col-12 mx-auto color--white text-center mb-4 mb-lg-5">
                    <h1 class="h2-font mb-1">{{trans('site.welcome')}}</h1>
                    <p class="opacity--60 font-size--20">{{trans('site.sign_in_msg')}}</p>
                </div>
                <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6 mx-auto">
                    <div class="form--v5 bg-color--primary-light--1 px-3 py-4 px-md-5 pt-md-6 rounded--10">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label class="form__label text-uppercase font-size--15 font-w--500">{{trans('site.email')}}</label>

                                <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="{{trans('site.enter_email')}}" autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between">
                                    <label for="password" class="form__label text-uppercase font-size--15 font-w--500">{{trans('site.password')}}:</label>
                                    <small>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-color--400">{{trans('site.forget')}}</a>
                                        @endif
                                    </small>
                                </div>

                                <input id="password" type="password" placeholder="{{trans('site.enter_password')}}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <div class="custom-control custom-checkbox">

                                        <input class="custom-control-input" type="checkbox" name="remember" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label text-color--400" for="customCheck1">{{trans('site.keep_me')}}</label>
                                    </div>
                                </div>
                                <button class="btn btn-bg--primary btn-size--md btn-hover--3d" type="submit"><span class="btn__text">{{trans('site.menu.login')}}</span></button>
                            </div>
                        </form>
                        <!-- end of form -->
                        <div class="text-center mt-4 pt-2 border--top">
                            <p class="text-color--400">{{trans('site.no_account')}} <a href="{{route('register')}}" class="color--primary">{{trans('site.menu.create_your_store')}}</a></p>
                        </div>
                        <!-- end of bottom text -->
                    </div>
                    <!-- end of from area -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
@endsection
