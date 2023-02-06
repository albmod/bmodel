<header class="navbar navbar-sticky sticky-bg-color--primary navbar-expand-lg navbar-dark">
    <div class="container position-relative">
        <a class="navbar-brand" href="{{route('site')}}">
            <img class="navbar-brand__regular" src="{{asset('assets/site/img/brand-logo-white.png')}}" alt="brand-logo">
            <img class="navbar-brand__sticky" src="{{asset('assets/site/img/brand-logo-white.png')}}" alt="sticky brand-logo">
        </a>
        <!--  End of brand logo -->
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- end of Nav toggler -->

        <div class="navbar-inner mr-lg-auto pl-lg-2 pl-xl-6">
            <!--  Nav close button inside off-canvas/ mobile menu -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- end of Nav Toggoler -->
            <nav>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://docs.tunerpixel.com/spacemax/">{{ trans('site.menu.main') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://docs.tunerpixel.com/spacemax/">{{ trans('site.menu.pricing') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://docs.tunerpixel.com/spacemax/">{{ trans('site.menu.test_drive') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://docs.tunerpixel.com/spacemax/">{{ trans('site.menu.about_dote') }}</a>
                    </li>

                </ul>
                <!-- end of nav menu items -->
            </nav>
        </div>
        <div class="d-flex align-items-center ml-lg-1 ml-xl-2 mr-5 mr-sm-6 m-lg-0">

            @auth
                <a href="{{ route('home') }}" class="color--white mr-2">{{ trans('seller.dashboard') }}</a>
            @else
            <a href="{{ route('login') }}" class="color--white mr-2">{{ trans('site.menu.login') }}</a>
            <a href="{{route('register') }}" class="btn btn-size--md btn-border color--white btn-hover--splash opacity--80 d-none d-sm-inline-flex">
                <span class="btn__text font-w--500">{{ trans('site.menu.create_your_store') }}</span>
            </a>
            @endauth
        </div>
        <div class="dropdown-module dropdown-module--dark d-inline-block position-relative ml-1 ml-sm-2">
            <button class="dropdown-module__toggler" type="button">
                            <span class="flag-image">
                                 @if(App::isLocale('ar'))
                                    <img src="{{asset('assets/site/img/flag/ar.svg')}}" alt="flag" class="svg">
                                @else
                                    <img src="{{asset('assets/site/img/flag/en.svg')}}" alt="flag" class="svg">
                                @endif


                            </span>
            </button>
            <!-- end of language selector button -->

            <ul class="dropdown-module-list" >{{asset('assets/site/img/flag/uk.svg')}}


                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a class="dropdown-module__item d-flex align-items-center" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            <span class="flag-image mr-2">
                                @if($localeCode=='ar')
                                <img src="{{asset('assets/site/img/flag/ar.svg')}}" alt="flag" class="svg">
                            @else
                                    <img src="{{asset('assets/site/img/flag/en.svg')}}" alt="flag" class="svg">
                                @endif
                            </span> {{ $properties['native'] }}</a>
                    </li>



                    @endforeach





            </ul>
            <!-- end of language selector dropdown-->
        </div>
        <!-- end of nav CTA button -->
    </div>
    <!-- end of container -->
</header>