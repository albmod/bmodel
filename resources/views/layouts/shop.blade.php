<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/favicon.png')}}">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    @if(App::isLocale('ar'))
        <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/bootstrap.rtl.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/base.css')}}">
        <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/style.min.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('assets/shop/css/vendor/bootstrap.min.css')}}">


        <link rel="stylesheet" href="{{asset('assets/shop/css/vendor/base.css')}}">
        <link rel="stylesheet" href="{{asset('assets/shop/css/style.min.css')}}">
    @endif


    <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/sal.css')}}">
    <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/magnific-popup.css')}}">



    @stack('styles')


</head>


<body class="sticky-header">

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
<!-- Start Header -->
@include('shops.includes.front.header')
<!-- End Header -->

@yield('content')


<!-- Start Footer Area  -->
@include('shops.includes.front.footer')
<!-- End Footer Area  -->

<!-- Product Quick View Modal Start -->
<div class="modal fade quick-view-product" id="quick-view-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times"></i></button>
            </div>
            <div class="modal-body">
                <div class="single-product-thumb">
                    <div class="row">
                        <div class="col-lg-7 mb--40">
                            <div class="row">
                                <div class="col-lg-10 order-lg-2">
                                    <div class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                        <div class="thumbnail">
                                            <img src="{{asset('assets/shop/images/product/product-big-01.png')}}" alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="{{asset('assets/shop/images/product/product-big-01.png')}}" class="popup-zoom">
                                                    <i class="far fa-search-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="{{asset('assets/shop/images/product/product-big-02.png')}}" alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="{{asset('assets/shop/images/product/product-big-02.png')}}" class="popup-zoom">
                                                    <i class="far fa-search-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="{{asset('assets/shop/images/product/product-big-03.png')}}" alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="{{asset('assets/shop/images/product/product-big-03.png')}}" class="popup-zoom">
                                                    <i class="far fa-search-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 order-lg-1">
                                    <div class="product-small-thumb small-thumb-wrapper">
                                        <div class="small-thumb-img">
                                            <img src="{{asset('assets/shop/images/product/product-thumb/thumb-08.png')}}" alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="{{asset('assets/shop/images/product/product-thumb/thumb-07.png')}}" alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="{{asset('assets/shop/images/product/product-thumb/thumb-09.png')}}" alt="thumb image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    <div class="product-rating">
                                        <div class="star-rating">
                                            <img src="{{asset('assets/shop/images/icons/rate.png')}}" alt="Rate Images">
                                        </div>
                                        <div class="review-link">
                                            <a href="#">(<span>1</span> customer reviews)</a>
                                        </div>
                                    </div>
                                    <h3 class="product-title">Serif Coffee Table</h3>
                                    <span class="price-amount">$155.00 - $255.00</span>
                                    <ul class="product-meta">
                                        <li><i class="fal fa-check"></i>In stock</li>
                                        <li><i class="fal fa-check"></i>Free delivery available</li>
                                        <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                                    </ul>
                                    <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi pretium. Integer ante est, elementum eget magna. Pellentesque sagittis dictum libero, eu dignissim tellus.</p>

                                    <div class="product-variations-wrapper">

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation">
                                            <h6 class="title">Colors:</h6>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant mt--0">
                                                    <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Product Variation  -->

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation">
                                            <h6 class="title">Size:</h6>
                                            <ul class="range-variant">
                                                <li>xs</li>
                                                <li>s</li>
                                                <li>m</li>
                                                <li>l</li>
                                                <li>xl</li>
                                            </ul>
                                        </div>
                                        <!-- End Product Variation  -->

                                    </div>

                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper d-flex-center">
                                        <!-- Start Quentity Action  -->
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                        <!-- End Quentity Action  -->

                                        <!-- Start Product Action  -->
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart"><a href="cart.html" class="axil-btn btn-bg-primary">Add to Cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <!-- End Product Action  -->

                                    </div>
                                    <!-- End Product Action Wrapper  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Quick View Modal End -->


<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="{{asset('assets/shop/js/vendor/modernizr.min.js')}}"></script>
<!-- jQuery JS -->
<script src="{{asset('assets/shop/js/vendor/jquery.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/shop/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/slick.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/js.cookie.js')}}"></script>
<!-- <script src="assets/js/vendor/jquery.style.switcher.js"></script> -->
<script src="{{asset('assets/shop/js/vendor/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/sal.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/counterup.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/waypoints.min.js')}}"></script>
@if(App::isLocale('ar'))
    <script src="{{asset('assets/shop/js-rtl/rtl-main.js')}}"></script>
@else
    <script src="{{asset('assets/shop/js/main.js')}}"></script>
@endif
<!-- Main JS -->
<script>
    window.onload = (event) => {
        window.scrollTo(0, 0);
    };

</script>
@stack('script')
</body>

</html>