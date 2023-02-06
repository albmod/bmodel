@extends('layouts.site')
@section('title')
    {{ trans('site.home') }}
@endsection
@section('content')

    <section class="hero hero--full hero--v12 d-flex align-items-center">
        <div class="background-holder background--cover z-index1">
            <img src="{{asset('assets/site/img/hero-12.png')}}" alt="image" class="background-image-holder">
        </div>
        <!-- end of backgound image -->
        <div class="background-holder bg-color--primary"></div>
        <!-- end of overlay backgound color-->
        <div class="svg-shape w-100 z-index2">
            <img src="{{asset('assets/site/img/layout/wave-14.svg')}}" alt="wave" class="svg">
        </div>
        <!-- end of bottom svg shape -->

        <div class="container mb-10">
            <div class="row flex-column-reverse flex-lg-row align-items-center mb-10 mb-lg-5">
                <div class="col-12 col-md-10 col-lg-6 mx-auto mx-lg-0 text-center text-lg-left z-index3">
                    <div class="hero-content reveal">
                        <h1 class="hero__title color--white h2-font font-w--700 mb-2 animate__animated animate__pulse animate__delay-2s">{{trans('site.the_platform')}} <br>{{trans('site.that_cares')}}
                        </h1>
                        <p class="hero__description color--white opacity--80 font-size--18 mb-4 mb-lg-5 pr-xl-5">{{trans('site.header_details')}}</p>
                        <!-- end of text content -->
                    </div>
                    <!-- end of content -->
                    <button class="btn btn-size--md btn-hover--splash btn-bg--cta--5 animate__animated animate__pulse animate__delay-2s" type="submit"><span
                                class="btn__text">{{ trans('site.menu.create_your_store') }}</span></button>
                    <!-- end of from -->
                </div>
                <!-- end of col -->
                <div class="col-12 col-lg-6 mt-6 mt-lg-0 mb-3 mb-lg-0 pl-lg-4  hero__image z-index3 reveal">
                    <picture><img src="{{asset('assets/site/img/home-01.png')}}" alt="hero-image" class="img-fluid"></picture>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
    </section>
    <!-- =========== End of Hero ============ -->

    <!-- =========== Start of Core Feautes ============ -->
    <section class="pt-5 pt-xl-0 z-index3 jsElement" data-pull="-200">
        <div class="container">
            <div class="bg-white box-shadow--5 rounded--10 text-center pt-6 pb-2 px-3 px-sm-5 px-md-3 pt-lg-8 pb-lg-3 px-lg-10">
                <div class="row justify-content-between border--bottom mb-5 pb-lg-1 text-lg-left">
                    <div class="col-12 col-md-6 col-xl-5 pb-5 reveal">
                            <span class="mb-2">
                                <img src="{{asset('assets/site/img/exchange-01.svg')}}" alt="exchange-icon">
                            </span>
                        <h3 class="h5-font font-w--500 mb-1">Strong security</h3>
                        <p>Protection against DDoS attacks, full data encryption, compliant with PCI DSS standards
                        </p>
                    </div>
                    <!-- end of single item col -->
                    <div class="col-12 col-md-6 col-xl-5 pb-5 reveal">
                            <span class="mb-2">
                                <img src="{{asset('assets/site/img/exchange-02.svg')}}" alt="exchange-icon">
                            </span>
                        <h3 class="h5-font font-w--500 mb-1">High liquidity</h3>
                        <p>Fast order execution, low spread, access to high liquidity orderbook for top currency pairs
                        </p>
                    </div>
                    <!-- end of single item col -->
                    <div class="col-12 col-md-6 col-xl-5 pb-5 reveal">
                            <span class="mb-2">
                                <img src="{{asset('assets/site/img/exchange-03.svg')}}" alt="exchange-icon">
                            </span>
                        <h3 class="h5-font font-w--500 mb-1">High treding volume</h3>
                        <p>Fast order execution, low spread, access to high liquidity orderbook for top currency pairs
                        </p>
                    </div>
                    <!-- end of single item col -->
                    <div class="col-12 col-md-6 col-xl-5 pb-5 reveal">
                            <span class="mb-2">
                                <img src="{{asset('assets/site/img/exchange-04.svg')}}" alt="exchange-icon">
                            </span>
                        <h3 class="h5-font font-w--500 mb-1">Competitive commisions</h3>
                        <p>Reasonable trading fees for takers and makers, special conditions for high volume traders.
                        </p>
                    </div>
                    <!-- end of single item col -->
                </div>
                <!-- end of features row -->
                <div class="row justify-content-between reveal">
                    <div class="col-12 col-md-4 text-center mb-4">
                        <span class="font-size--48 color--primary">$70B+</span>
                        <p>Digital currency exchanged</p>
                    </div>
                    <!-- end of single item col -->
                    <div class="col-12 col-md-4 text-center mb-4">
                        <span class="font-size--48 color--primary">197</span>
                        <p>Countries supported</p>
                    </div>
                    <!-- end of single item col -->
                    <div class="col-12 col-md-4 text-center mb-4">
                        <span class="font-size--48 color--primary">10M+ </span>
                        <p>Customers served</p>
                    </div>
                    <!-- end of single item col -->
                </div>
                <!-- end of facts row -->
            </div>
        </div>
    </section>
    <!-- =========== End of Core Feautes ============ -->

    <!-- =========== Start of Video ============ -->
    <section class="space--top z-index1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-9 col-lg-6 mb-4 mb-lg-6 mx-auto text-center reveal">
                    <h2 class="mb-2 h3-font font-w--700">The world's most advanced cryptocurrency trading platform
                    </h2>
                    <p class="mb-4">SpaceMax operates in the context of a legal Australian company and in compliance with Australian rules and regulations. All operations, hosting and data storage is done within Australia.</p>
                    <a href="#" class="btn btn-size--md btn-bg--cta--5 btn-hover--3d"><span class="btn__text">Create Account</span></a>
                </div>
            </div>
            <!-- end of section title row -->
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="position-relative bg-color--white-opacity--05 p-2 p-md-4 rounded--10 box-shadow--1">
                        <picture><img src="{{asset('assets/site/img/media-thumb-4.jpg')}}" alt="media-thumb" class="img-fluid rounded--10">
                        </picture>
                        <!-- end of thumb -->
                        <a class="lightbox pos-abs-bottom-right m-6 m-md-7" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=aRh_eUQSmIg">
                                <span class="pos-abs-center opacity--50">
                                    <img src="{{asset('assets/site/img/layout/play-btn-border.svg')}}" alt="play-btn-border" class="svg">
                                </span>
                            <span class="btn btn-media btn-media-size--md btn-bg--cta--5 rounded--full"><i class="icon icon-triangle-right"></i></span>
                        </a>
                        <!-- end of play btn -->
                    </div>
                    <!-- end of video area -->
                </div>
                <!-- end of video area col -->
            </div>
            <!-- end of video area row -->
        </div>
    </section>
    <!-- =========== End of Video ============ -->

    <!-- =========== Start of Steps ============ -->
    <section class="space--bottom steps--v1 pt-10 bg-color--primary jsElement" data-pull="-100">
        <div class="container">
            <div class="row space--top">
                <div class="col-12 col-md-6 col-xl-5 offset-xl-1 mb-5 mb-lg-0 reveal">
                    <div>
                        <h2 class="h3-font font-w--700 mb-2">3 very simple steps to get started with SpaceMax</h2>
                        <p class="opacity--60">With over 13 million users, SpaceMax is the best platform to get started buying and selling your cryptocurrency. It is the easiest platform for beginners to easily get into cryptocurrency.</p>
                    </div>
                    <div class="ml-lg-10 d-none d-md-inline-block">
                        <img src="{{asset('assets/site/img/layout/steps-arrow.svg')}}" alt="arrow" class="svg svg-shape--default opacity--10">
                    </div>
                </div>
                <!-- end of section title -->
                <div class="col-12 col-md-6 col-xl-5 offset-xl-1 pr-sm-6 pr-md-0 remove-space--bottom steps-wrapper">
                    <div class="step position-relative d-flex align-items-start pb-6 reveal">
                        <div class="mr-3 mr-md-4">
                                <span class="icon--lg step__icon bg-color--white-opacity--05 box-shadow--1 rounded-circle">
                                    <img src="{{asset('assets/site/img/exchange-05.svg')}}" alt="icon">
                                </span>
                        </div>
                        <!-- end of icon -->
                        <div class="position-relative">
                            <h3 class="h4-font font-w--600 mb-1 step__title">Create a wallet</h3>
                            <p class="opacity--80">Have a wallet already? Skip this step. or <a href="#" class="text-color--cta--5">Create an account here</a>.</p>
                        </div>
                        <!-- end of content -->
                    </div>
                    <!-- end of single step -->
                    <div class="step position-relative d-flex align-items-start pb-6 reveal">
                        <div class="mr-3 mr-md-4">
                                <span class="icon--lg step__icon bg-color--white-opacity--05 box-shadow--1 rounded-circle">
                                    <img src="{{asset('assets/site/img/exchange-06.svg')}}" alt="icon">
                                </span>
                        </div>
                        <!-- end of icon -->
                        <div class="position-relative">
                            <h3 class="h4-font font-w--600 mb-1 step__title">Open account</h3>
                            <p class="opacity--80">Simply <a href="#" class="text-color--cta--5">open a new account</a>to start buying and selling crypto assets.</p>
                        </div>
                        <!-- end of content -->
                    </div>
                    <!-- end of single step -->
                    <div class="step position-relative d-flex align-items-start pb-6 reveal">
                        <div class="mr-3 mr-md-4">
                                <span class="icon--lg step__icon bg-color--white-opacity--05 box-shadow--1 rounded-circle">
                                    <img src="{{asset('assets/site/img/exchange-07.svg')}}" alt="icon">
                                </span>
                        </div>
                        <!-- end of icon -->
                        <div class="position-relative">
                            <h3 class="h4-font font-w--600 mb-1 step__title">Start trading</h3>
                            <p class="opacity--80"><a href="#" class="text-color--cta--5">Buy</a> or <a href="#" class="text-color--cta--5">Sell</a> crypto assets through our secure platform.</p>
                        </div>
                        <!-- end of content -->
                    </div>
                    <!-- end of single step -->
                </div>

            </div>
        </div>
    </section>
    <!-- =========== End of Steps ============ -->

    <!-- =========== Start of More Features ============ -->
    <section class="space--top pb-lg-10 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6 mb-5 mb-xl-0 pl-xl-4 mx-auto pos-abs-xl-vertical-center pos-left text-xl-right">
                    <picture>
                        <img src="{{asset('assets/site/img/illustration-21.png')}}" alt="illustration" class="img-fluid reveal">
                    </picture>
                </div>
                <!-- end of image -->
                <div class="col-12 col-xl-5 ml-auto">
                    <div class="row">
                        <div class="col-12 mb-5 mb-sm-7 mb-xl-5 text-center text-xl-left mx-auto reveal">
                            <h2 class="mb-1 h3-font font-w--700">Create your digital <br> currency portfolio today
                            </h2>
                            <p>SpaceMax has great features that make it the best place.</p>
                        </div>
                    </div>
                    <!-- end of section title row -->
                    <div class="row">
                        <div class="col-12 col-sm-6 col-xl-11 mb-3 reveal">
                            <div class="d-flex flex-column flex-xl-row align-items-center align-items-xl-start text-center text-xl-left max-w--320 mx-auto mx-xl-0">
                                <span class="mb-2 mr-lg-3"><img src="{{asset('assets/site/img/exchange-08.svg')}}" alt="icon"></span>
                                <div>
                                    <h3 class="font-size--20 font-w--600 mb-1">Manage your portfolio</h3>
                                    <p class="font-size--16">Buy and sell popular digital currencies, keep track of them in the one place.</p>
                                </div>
                            </div>
                            <!-- end of section item -->
                        </div>
                        <!-- end of single item col -->
                        <div class="col-12 col-sm-6 col-xl-11 mb-3 reveal">
                            <div class="d-flex flex-column flex-xl-row align-items-center align-items-xl-start text-center text-xl-left max-w--320 mx-auto mx-xl-0">
                                <span class="mb-2 mr-lg-3"><img src="{{asset('assets/site/img/exchange-09.svg')}}" alt="icon"></span>
                                <div>
                                    <h3 class="font-size--20 font-w--600 mb-1">Recurring buys</h3>
                                    <p class="font-size--16">Invest in digital currency slowly over time by scheduling buys daily, weekly, or monthly.</p>
                                </div>
                            </div>
                            <!-- end of section item -->
                        </div>
                        <!-- end of single item col -->
                        <div class="col-12 col-sm-6 col-xl-11 mb-3 reveal">
                            <div class="d-flex flex-column flex-xl-row align-items-center align-items-xl-start text-center text-xl-left max-w--320 mx-auto mx-xl-0">
                                <span class="mb-2 mr-lg-3"><img src="{{asset('assets/site/img/exchange-10.svg')}}" alt="icon"></span>
                                <div>
                                    <h3 class="font-size--20 font-w--600 mb-1">Vault protection</h3>
                                    <p class="font-size--16">For added security, store your funds in a vault with time delayed withdrawals.</p>
                                </div>
                            </div>
                            <!-- end of section item -->
                        </div>
                        <!-- end of single item col -->
                        <div class="col-12 col-sm-6 col-xl-11 mb-3 reveal">
                            <div class="d-flex flex-column flex-xl-row align-items-center align-items-xl-start text-center text-xl-left max-w--320 mx-auto mx-xl-0">
                                <span class="mb-2 mr-lg-3"><img src="{{asset('assets/site/img/exchange-11.svg')}}" alt="icon"></span>
                                <div>
                                    <h3 class="font-size--20 font-w--600 mb-1">Mobile apps</h3>
                                    <p class="font-size--16">Stay on top of the markets with the Coinbase app for Android or iOS.</p>
                                </div>
                            </div>
                            <!-- end of section item -->
                        </div>
                        <!-- end of single item col -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========== End of More Features ============ -->

    <!-- =========== Start of Chart ============ -->
    <section class="bg-color--primary">
        <div class="svg-shape--top">
            <img src="{{asset('assets/site/img/layout/wave-16.svg')}}" alt="wave" class="svg">
        </div>
        <!-- end of top left wave -->
        <div class="space border--bottom position-relative">
            <div class="background-holder background--bottom--right d-none d-md-block">
                <img src="{{asset('assets/site/img/layout/wave-15.svg')}}" alt="wave" class="background-image-holder">
            </div>
            <!-- end of body wave -->

            <!-- end of top braces svg shape -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="rounded--10 box-shadow--5">
                            <picture>
                                <img src="{{asset('assets/site/img/chart.jpg')}}" alt="chart" class="img-fluid rounded--10">
                            </picture>
                        </div>
                    </div>
                    <!-- end of chart col -->
                </div>
                <!-- end of chart row -->
            </div>
            <!-- end of chart container -->
        </div>
        <!-- end of chart area -->

        <div class="py-6 p-lg-8">
            <div class="container">
                <div class="row text-center text-md-left align-items-center justify-content-lg-between">
                    <div class="col-12 col-xl-11 mx-auto d-md-flex flex-md-row align-items-md-center reveal">
                        <div class="mb-3 mb-md-0 mr-2 mr-md-4 mr-xl-10 flex-1">
                            <h2 class="font-size--30 font-w--700 mb-2">Open account for free and start trading!</h2>
                            <p class="opacity--60 pr-xl-10">SpaceMax offers institutions and professionals the ability to trade a variety of digital currencies like Bitcoin, Ethereum, and more on a regulated U.S. based exchange.</p>
                        </div>
                        <a href="#" class="btn btn-bg--cta--5 btn-hover--3d">
                            <span class="btn__text">Create Account Now</span>
                        </a>
                    </div>
                    <!-- end of cta col -->
                </div>
                <!-- end of cta row -->
            </div>
            <!-- end of cta container -->
        </div>
        <!-- end of cta area -->
    </section>
    <!-- =========== End of Chart ============ -->

    <!-- =========== Start of Contact ============ -->
    <section class="border--bottom">
        <div class="container">
            <div class="row">
                <div class="space col-12 col-sm-10 col-md-8 col-lg-5 reveal">
                    <div class="mb-4">
                        <h2 class="font-size--30 font-w--700 mb-2">Do you have any questions?</h2>
                        <p>Please contact us directly by mail or from our contact form. You can also visit our support page which might help solve your problem.</p>
                    </div>
                    <!-- end of section title -->
                    <a href="#" class="font-size--17 color--primary d-flex align-items-center"><i  class="icon icon-newsletter mr-1"></i>support@example</a>
                    <!-- end of top button -->
                    <hr class="mt-3 mb-4 border--bottom max-w--320 ml-0">
                    <!-- end of divider -->
                    <a href="#" class="btn btn-bg--primary btn-hover--3d">
                        <span class="btn__text">Visit Our Support Page</span>
                    </a>
                    <!-- end of bottom fill button -->
                </div>
                <!-- end of col-->

                <div class="space col-12 col-lg-6 offset-lg-1">
                    <div class="form--v6">
                        <div class="bg-gradient-primary--1"></div>
                        <!-- end of bg -->
                        <div class="pl-lg-3 pl-xl-5 reveal">
                            <form action="#" class="form">
                                <div class="form-group form-row">
                                    <div class="col-12 col-md-6 form-group mb-md-0">
                                        <input type="text" class="form-control" placeholder="Your name" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input type="email" class="form-control" placeholder="Your email" required>
                                    </div>
                                </div>
                                <!-- end of form row -->
                                <div class="form-group form-row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <!-- end of form row -->
                                <div class="form-group form-row mb-4">
                                    <div class="col">
                                        <textarea rows="6" class="form-control" placeholder="Write your message" required></textarea>
                                    </div>
                                </div>
                                <!-- end of form row -->
                                <button class="btn btn-size--md btn-border btn-border--color--primary color--primary btn-hover--primary" type="submit"><span class="btn__text">Send Message</span></button>
                            </form>
                            <!-- end of from -->
                        </div>
                    </div>

                    <!-- end of from wrapper -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- =========== End of Contact ============ -->

    <!-- =========== Start of newsletter ============ -->
    <section class="py-6 py-lg-8 ">
        <div class="container">
            <div class="row justify-content-between align-items-center text-center text-md-left">
                <div class="col-12 col-md-5 col-lg-4 mb-4 mb-md-0 reveal">
                    <h2 class="h3-font font-w--700 mb-1">Join us today!</h2>
                    <p>Buy your cryptocurrency today to begin using the future of money.</p>
                </div>
                <!-- end of content col -->
                <div class="col-12 col-md-7 col-lg-6">
                    <div class="form--v7 reveal">
                        <form action="#" class="form border--around rounded--05">
                            <div class="input-group d-flex">
                                <input type="email" class="form-control" placeholder="Enter your email" required="">
                                <button class="btn btn-size--md btn-hover--splash btn-bg--primary" type="submit"><span class="btn__text">Get Started Now</span></button>
                            </div>
                        </form>
                    </div>
                    <!-- end of from -->
                </div>
                <!-- end of form col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- =========== End of newsletter ============ -->
@endsection