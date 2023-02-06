@extends('layouts.site')

<!-- Start  Title -->
@section('title')
    {{ trans('Welcome') }}
@endsection
<!-- End  Title -->


<!-- Start Style -->
@push('styles')


@endpush
<!-- End Style -->


<!-- Start DropDown language -->
@section('language')

    {{--    <x-Language/>--}}

@endsection
<!-- End DropDown language -->


<!-- Start Content -->
@section('content')
    <main class="main-wrapper pv-main-wrapper">
        <!-- Start Banner Area  -->
        <div class="pv-banner-wrapper">
            <div class="pv-banner-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-5">
                            <div class="banner-content">
                                <div class="inner">
                                    <div class="section-title-wrapper">
                                        <span class="title-highlighter highlighter-secondary"><i class="fas fa-fire"></i> eCommerce</span>
                                        <h1 class="title">eTrade Multipurpose eCommerce HTML5 <br> Template</h1>
                                    </div>
                                </div>
                                <div class="theme-brief">

                                    <!-- Start Single Counter  -->
                                    <div class="single-counter">
                                        <span class="subtile">Demo Website</span>
                                        <h2 class="title count">05</h2>
                                    </div>
                                    <!-- End Single Counter  -->

                                    <!-- Start Single Counter  -->
                                    <div class="single-counter">
                                        <span class="subtile">Inner Page</span>
                                        <h2 class="title count">25</h2>
                                    </div>
                                    <!-- End Single Counter  -->

                                    <!-- Start Single Counter  -->
                                    <div class="single-counter">
                                        <span class="subtile">Elements</span>
                                        <h2 class="title count">30</h2>
                                    </div>
                                    <!-- End Single Counter  -->
                                </div>
                                <div class="theme-powerd">
                                    <label>Powerd By</label>
                                    <ul class="icon-list">
                                        <li><img src="{{asset('frontend/images/preview/html.png')}}" alt="html"></li>
                                        <li><img src="{{asset('frontend/images/preview/css.png')}}" alt="css"></li>
                                        <li><img src="{{asset('frontend/images/preview/scss.png')}}" alt="scss"></li>
                                        <li><img src="{{asset('frontend/images/preview/jquery.png')}}" alt="jquery"></li>
                                        <li><img src="{{asset('frontend/images/preview/bs5.png')}}" alt="bs5"></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="banner-thumbnail">
                                <img src="{{asset('frontend/images/preview/banner-mockup.png')}}" alt="Mockup">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area  -->

        <!-- Start Page Demo Area  -->
        <div class="pv-demo-area" id="demos">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-secondary"><i class="fas fa-fire"></i> Home Pages</span>
                    <h2 class="title">Our Template is Just <br> Ready to Use </h2>
                </div>
                <div class="row">
                    <!-- Start Single Demo  -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/home-01.png')}}" alt="Most Unique eCommerce">
                                <a href="index-1.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="index-1.html">Electronics</a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->

                    <!-- Start Single Demo  -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/home-02.png')}}" alt="Most Unique eCommerce">
                                <a href="index-2.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="index-2.html">NFT</a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->

                    <!-- Start Single Demo  -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/home-03.png')}}" alt="Most Unique eCommerce">
                                <a href="index-3.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="index-3.html">Fashion</a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->

                    <!-- Start Single Demo  -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/home-04.png')}}" alt="Most Unique eCommerce">
                                <a href="index-4.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="index-4.html">Jewellery</a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->

                    <!-- Start Single Demo  -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/home-05.png')}}" alt="Most Unique eCommerce">
                                <a href="index-5.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="index-5.html">Furniture</a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->

                    <!-- Start Single Demo  -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/home-05.png')}}" alt="Most Unique eCommerce">
                                <a href="index-6.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="index-6.html">Multipurpose <span>New</span></a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->

                    <!-- Start Single Demo  -->
                    <!-- <div class="col-lg-6 col-md-6 col-12">
                        <div class="pv-single-demo commin">
                            <a href="#">
                                <div class="thumb box">
                                    <img src="assets/images/preview/comming-soon.png" alt="Most Unique eCommerce">
                                </div>
                            </a>
                        </div>
                    </div> -->
                    <!-- End Single Demo  -->

                </div>
            </div>
        </div>
        <!-- End Page Demo Area  -->

        <!-- Start Inner Page Demo Area  -->
        <div class="axil-section-gap pv-inner-demo-area">
            <div class="container">
                <div class="section-title-wrapper section-title-center">
                    <span class="title-highlighter highlighter-primary"><i class="fas fa-fire"></i> Inner Pages</span>
                    <h2 class="title">Eye Catching Pre-build <br />Inner Pages</h2>
                </div>
                <div class="row">
                    <!-- Start Single Demo  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/shop.png')}}" alt="Most Unique eCommerce">
                                <a href="shop.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="shop.html">Shop</a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->

                    <!-- Start Single Demo  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/shop-sidebar.png')}}" alt="Most Unique eCommerce">
                                <a href="shop-sidebar.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="shop-sidebar.html">Shop With Sidebar</a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->

                    <!-- Start Single Demo  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/variation-1.png')}}" alt="Most Unique eCommerce">
                                <a href="single-product.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="single-product.html">Product Variation 1</a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->

                    <!-- Start Single Demo  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/variation-2.png')}}" alt="Most Unique eCommerce">
                                <a href="single-product-2.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="single-product-2.html">Product Variation 2</a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->

                    <!-- Start Single Demo  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/variation-3.png')}}" alt="Most Unique eCommerce">
                                <a href="single-product-3.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="single-product-3.html">Product Variation 3</a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->

                    <!-- Start Single Demo  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/variation-4.png')}}" alt="Most Unique eCommerce">
                                <a href="single-product-4.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="single-product-4.html">Product Variation 4</a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->

                    <!-- Start Single Demo  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/variation-5.png')}}" alt="Most Unique eCommerce">
                                <a href="single-product-5.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="single-product-5.html">Product Variation 5</a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->

                    <!-- Start Single Demo  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/variation-6.png')}}" alt="Most Unique eCommerce">
                                <a href="single-product-6.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="single-product-6.html">Product Variation 6</a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->

                    <!-- Start Single Demo  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pv-single-demo">
                            <div class="thumb box">
                                <img src="{{asset('frontend/images/preview/variation-7.png')}}" alt="Most Unique eCommerce">
                                <a href="single-product-7.html" class="axil-btn btn-bg-primary right-icon view-btn">View Demo <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <h5 class="title"><a href="single-product-7.html">Product Variation 7</a></h5>
                        </div>
                    </div>
                    <!-- End Single Demo  -->
                </div>
            </div>
        </div>
        <!-- End Inner Page Demo Area  -->

        <!-- Start Feature Area  -->
        <div class="pv-feature-area" id="features">
            <div class="container">
                <div class="pv-feature-box">
                    <div class="section-title-wrapper section-title-center">
                        <span class="title-highlighter highlighter-secondary"><i class="fas fa-fire"></i> Features</span>
                        <h2 class="title">We have Impressive <br />Features</h2>
                    </div>
                    <div class="row">
                        <!-- Start Single Feature  -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pv-feature">
                                <div class="service-box">
                                    <div class="icon">
                                        <img src="{{asset('frontend/images/preview/feature-icon-01.png')}}" alt="Most Unique eCommerce">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Fully Responsive <br> Layout</h3>
                                        <p>All the pages of this theme are responsive.
                                            We used Bootstrap framework to build the website. It’s the best in class.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Feature  -->
                        <!-- Start Single Feature  -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pv-feature">
                                <div class="service-box">
                                    <div class="icon">
                                        <img src="{{asset('frontend/images/preview/feature-icon-02.png')}}" alt="Most Unique eCommerce">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">25+ Resourceful <br> Pages</h3>
                                        <p>All the pages are created based on real content that you will need to run your business. Change image and text and you’re good to go!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Feature  -->
                        <!-- Start Single Feature  -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pv-feature">
                                <div class="service-box">
                                    <div class="icon">
                                        <img src="{{asset('frontend/images/preview/feature-icon-09.png')}}" alt="Most Unique eCommerce">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Fully <br> Customizable</h3>
                                        <p>Our template is fully customizable. You can change color combination, fonts, icons, contents, images etc. You can also add custom css.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Feature  -->
                        <!-- Start Single Feature  -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pv-feature">
                                <div class="service-box">
                                    <div class="icon">
                                        <img src="{{asset('frontend/images/preview/feature-icon-03.png')}}" alt="Most Unique eCommerce">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Font Awesome 5 <br> Pro Icons</h3>
                                        <p>This template comes with licensed premium quality icons from FontAwesome.
                                            All the icons are font based and ready to match the quality of any HQ screen.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Feature  -->
                        <!-- Start Single Feature  -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pv-feature">
                                <div class="service-box">
                                    <div class="icon">
                                        <img src="{{asset('frontend/images/preview/feature-icon-04.png')}}" alt="Most Unique eCommerce">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Google <br> Font</h3>
                                        <p>A vast collection of Google fonts are integrated with the theme.
                                            You can use any of them that goes with your branding.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Feature  -->
                        <!-- Start Single Feature  -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pv-feature">
                                <div class="service-box">
                                    <div class="icon">
                                        <img src="{{asset('frontend/images/preview/feature-icon-05.png')}}" alt="Most Unique eCommerce">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Lifetime <br> Update</h3>
                                        <p>Purchase our theme only once and get lifetime updates.
                                            We keep updating our products to stay up to date with latest trends and technology.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Feature  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Feature Area  -->

        <!-- End Support Area  -->
        <div class="pv-support-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row row--20">
                            <!-- Start Single Choose Us Area  -->
                            <div class="col-lg-6">
                                <div class="pv-support online-documentation">
                                    <a href="https://new.axilthemes.com/docs/etrade-html/" class="inner">
                                        <span class="icon">
                                            <i class="fal fa-book"></i>
                                        </span>
                                        <span class="content">
                                            <span class="h3 title">Online Documentation</span>
                                        <span class="b1 paragraph">Well organized and up to date</span>
                                        <span class="axil-btn">View Documentation <i class="fal fa-long-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- End Single Choose Us Area  -->

                            <!-- Start Single Choose Us Area  -->
                            <div class="col-lg-6">
                                <div class="pv-support datecated-support">
                                    <a href="https://support.axilthemes.com/support/login" class="inner">
                                        <span class="icon">
                                            <i class="fal fa-user-headset"></i>
                                        </span>
                                        <span class="content">
                                            <span class="h3 title">Dedicated Support</span>
                                        <span class="b1 paragraph">We response within 1 business day. Weekends excluded</span>
                                        <span class="axil-btn">Create Support <i class="fal fa-long-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- End Single Choose Us Area  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Support Area  -->

        <!-- Start Call To Action Area  -->
        <div class="pv-call-to-action">
            <div class="container">
                <div class="pv-action-box">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"><i class="fas fa-fire"></i> Are You Ready</span>
                        <h2 class="title">Let’s Start Your Business Today!</h2>
                        <a href="https://themeforest.net/item/etrade-multipurpose-ecommerce-html5-template/39507398" class="axil-btn btn-bg-primary"><i class="fal fa-shopping-cart"></i> Buy Now</a>
                    </div>
                    <div class="pv-action-thumbnail">
                        <img src="{{asset('assets/frontend/images/preview/cta-mockup.png')}}" alt="Home">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Call To Action Area  -->

    </main>
@endsection
<!-- End Content -->



<!-- Start Script -->
@push('scripts')


@endpush
<!-- End Script -->