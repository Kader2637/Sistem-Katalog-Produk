<!DOCTYPE html>
<html lang="en">

<!-- KaderMart -->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="KaderMart">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Grocery, Store, stores">
    <title>Kader Mart</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('icon.png') }}">
    <!-- plugins css -->
    <link rel="stylesheet preload" href="{{ asset('assets/css/plugins.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('assets/css/style.css') }}" as="style">

</head>

<body class="shop-main-h">
    

    <!-- rts header area start -->
    <!-- rts header area start -->
    @include('layout.header')
    <!-- rts header area end -->

    <!-- rts header area start -->
    <!-- header style two -->

    <!-- header style two End -->
    <!-- rts header area end -->
    <!-- rts header area end -->
    @yield('content')


    <div class="product-details-popup-wrapper">
        <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
            <div class="product-details-popup">
                <button class="product-details-close-btn"><i class="fal fa-times"></i></button>
                <div class="details-product-area">
                    <div class="product-thumb-area">
                        <div class="cursor"></div>
                        <div class="thumb-wrapper one filterd-items figure">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url(assets/images/products/product-details.jpg)"><img
                                    src="assets/images/products/product-details.jpg" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper two filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url(assets/images/products/product-filt2.jpg)"><img
                                    src="assets/images/products/product-filt2.jpg" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper three filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url(assets/images/products/product-filt3.jpg)"><img
                                    src="assets/images/products/product-filt3.jpg" alt="product-thumb">
                            </div>
                        </div>
                        <div class="product-thumb-filter-group">
                            <div class="thumb-filter filter-btn active" data-show=".one"><img
                                    src="assets/images/products/product-filt1.jpg" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".two"><img
                                    src="assets/images/products/product-filt2.jpg" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".three"><img
                                    src="assets/images/products/product-filt3.jpg" alt="product-thumb-filter"></div>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="product-status">
                            <span class="product-catagory">Juice</span>
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                                <span>10 Reviews</span>
                            </div>
                        </div>
                        <h2 class="product-title">Juice Aplle <span class="stock">In Stock</span></h2>
                        <span class="product-price"><span class="old-price">Rp.25.000</span>Rp.15.000</span>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure tempora et illum eos atque
                            minus perferendis sapiente ab provident officia!
                        </p>
                        <div class="product-bottom-action">
                            <div class="cart-edit">
                                <div class="quantity-edit action-item">
                                    <button class="button"><i class="fal fa-minus minus"></i></button>
                                    <input type="text" class="input" value="01" />
                                    <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                </div>
                            </div>
                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                <div class="btn-text">
                                    Add To Cart
                                </div>
                                <div class="arrow-icon">
                                    <i class="fa-regular fa-cart-shopping"></i>
                                </div>
                                <div class="arrow-icon">
                                    <i class="fa-regular fa-cart-shopping"></i>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="rts-btn btn-primary ml--20"><i
                                    class="fa-light fa-heart"></i></a>
                        </div>
                        <div class="product-uniques">
                            <span class="catagorys product-unipue"><span>Categories: </span>Minuman,Juice</span>
                            <span class="tags product-unipue"><span>Tags: </span> Minuman</span>
                        </div>
                        <div class="share-social">
                            <span>Share:</span>
                            <a class="platform" href="http://facebook.com/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="platform" href="http://twitter.com/" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="platform" href="http://behance.com/" target="_blank"><i
                                    class="fab fa-behance"></i></a>
                            <a class="platform" href="http://youtube.com/" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="platform" href="http://linkedin.com/" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- successfully add in wishlist -->
    <div class="successfully-addedin-wishlist">
        <div class="d-flex" style="align-items: center; gap: 15px;">
            <i class="fa-regular fa-check"></i>
            <p>Item Anda telah ditambahkan ke daftar keinginan</p>
        </div>
    </div>
    <!-- successfully add in wishlist end -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text"
                        placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <div id="anywhere-home" class="anywere"></div>
    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- progress area end -->


    <!-- plugins js -->
    <script defer src="assets/js/plugins.js"></script>

    <!-- custom js -->
    <script defer src="assets/js/main.js"></script>
    <!-- header style two End -->


</body>


<!-- Mirrored from html.themewant.com/ekomart/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2024 08:59:40 GMT -->

</html>
