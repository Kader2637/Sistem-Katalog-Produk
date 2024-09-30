@extends('layout.app')
@section('content')

<div class="background-light-gray-color rts-section-gap bg_light-1 pt_sm--20">
    <!-- rts banner area start -->
    <div class="rts-banner-area-one mb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="category-area-main-wrapper-one">
                        <div class="swiper mySwiper-category-1 swiper-data" data-swiper='{
                            "spaceBetween":1,
                            "slidesPerView":1,
                            "loop": true,
                            "speed": 2000,
                            "autoplay":{
                                "delay":"4000"
                            },
                            "navigation":{
                                "nextEl":".swiper-button-next",
                                "prevEl":".swiper-button-prev"
                            },
                            "breakpoints":{
                            "0":{
                                "slidesPerView":1,
                                "spaceBetween": 0},
                            "320":{
                                "slidesPerView":1,
                                "spaceBetween":0},
                            "480":{
                                "slidesPerView":1,
                                "spaceBetween":0},
                            "640":{
                                "slidesPerView":1,
                                "spaceBetween":0},
                            "840":{
                                "slidesPerView":1,
                                "spaceBetween":0},
                            "1140":{
                                "slidesPerView":1,
                                "spaceBetween":0}
                            }
                        }'>
                            <div class="swiper-wrapper">
                                <!-- single swiper start -->
                                <div class="swiper-slide">
                                    <div class="banner-bg-image bg_image bg_one-banner  ptb--120 ptb_md--80 ptb_sm--60">
                                        <div class="banner-one-inner-content">
                                            <span class="pre">Get up to 30% off on your first $150 purchase</span>
                                            <h1 class="title">
                                                Do not miss our amazing <br>
                                                grocery deals
                                            </h1>
                                            <a href="{{ route('shop') }}" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Shop Now
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-light fa-arrow-right"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-light fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single swiper start -->
                                <!-- single swiper start -->
                                <div class="swiper-slide">
                                    <div class="banner-bg-image bg_image bg_one-banner two  ptb--120 ptb_md--80 ptb_sm--60">
                                        <div class="banner-one-inner-content">
                                            <span class="pre">Get up to 30% off on your first $150 purchase</span>
                                            <h1 class="title">
                                                Do not miss our amazing <br>
                                                grocery deals
                                            </h1>
                                            <a href="{{ route('shop') }}" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Shop Now
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-light fa-arrow-right"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-light fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single swiper start -->
                            </div>

                            <button class="swiper-button-next"><i class="fa-regular fa-arrow-right"></i></button>
                            <button class="swiper-button-prev"><i class="fa-regular fa-arrow-left"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->
    <!-- rts category area satart -->
    <div class="rts-caregory-area-one ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="category-area-main-wrapper-one">
                        <div class="swiper mySwiper-category-1 swiper-data" data-swiper='{
                            "spaceBetween":12,
                            "slidesPerView":10,
                            "loop": true,
                            "speed": 1000,
                            "breakpoints":{
                            "0":{
                                "slidesPerView":2,
                                "spaceBetween": 12},
                            "320":{
                                "slidesPerView":2,
                                "spaceBetween":12},
                            "480":{
                                "slidesPerView":3,
                                "spaceBetween":12},
                            "640":{
                                "slidesPerView":4,
                                "spaceBetween":12},
                            "840":{
                                "slidesPerView":4,
                                "spaceBetween":12},
                            "1140":{
                                "slidesPerView":10,
                                "spaceBetween":12}
                            }
                        }'>
                            <div class="swiper-wrapper">
                                <!-- single swiper start -->
                                <div class="swiper-slide">
                                    <a href="{{ route('shop') }}" class="single-category-one">
                                        <img src="assets/images/category/01.png" alt="category">
                                        <p>Klik Detail</p>
                                    </a>
                                </div>
                                <!-- single swiper start -->
                                <!-- single swiper start -->
                                <div class="swiper-slide">
                                    <a href="{{ route('shop') }}" class="single-category-one">
                                        <img src="assets/images/category/02.png" alt="category">
                                        <p>Klik Detail</p>
                                    </a>
                                </div>
                                <!-- single swiper start -->
                                <!-- single swiper start -->
                                <div class="swiper-slide">
                                    <a href="{{ route('shop') }}" class="single-category-one">
                                        <img src="assets/images/category/03.png" alt="category">
                                        <p>Klik Detail</p>
                                    </a>
                                </div>
                                <!-- single swiper start -->
                                <!-- single swiper start -->
                                <div class="swiper-slide">
                                    <a href="{{ route('shop') }}" class="single-category-one">
                                        <img src="assets/images/category/04.png" alt="category">
                                        <p>Klik Detail</p>
                                    </a>
                                </div>
                                <!-- single swiper start -->
                                <!-- single swiper start -->
                                <div class="swiper-slide">
                                    <a href="{{ route('shop') }}" class="single-category-one">
                                        <img src="assets/images/category/05.png" alt="category">
                                        <p>Klik Detail</p>
                                    </a>
                                </div>
                                <!-- single swiper start -->
                                <!-- single swiper start -->
                                <div class="swiper-slide">
                                    <a href="{{ route('shop') }}" class="single-category-one">
                                        <img src="assets/images/category/06.png" alt="category">
                                        <p>Klik Detail</p>
                                    </a>
                                </div>
                                <!-- single swiper start -->
                                <!-- single swiper start -->
                                <div class="swiper-slide">
                                    <a href="{{ route('shop') }}" class="single-category-one">
                                        <img src="assets/images/category/07.png" alt="category">
                                        <p>Klik Detail</p>
                                    </a>
                                </div>
                                <!-- single swiper start -->
                                <!-- single swiper start -->
                                <div class="swiper-slide">
                                    <a href="{{ route('shop') }}" class="single-category-one">
                                        <img src="assets/images/category/08.png" alt="category">
                                        <p>Klik Detail</p>
                                    </a>
                                </div>
                                <!-- single swiper start -->
                                <!-- single swiper start -->
                                <div class="swiper-slide">
                                    <a href="{{ route('shop') }}" class="single-category-one">
                                        <img src="assets/images/category/09.png" alt="category">
                                        <p>Klik Detail</p>
                                    </a>
                                </div>
                                <!-- single swiper start -->
                                <!-- single swiper start -->
                                <div class="swiper-slide">
                                    <a href="{{ route('shop') }}" class="single-category-one">
                                        <img src="assets/images/category/10.png" alt="category">
                                        <p>Klik Detail</p>
                                    </a>
                                </div>
                                <!-- single swiper start -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts category area end -->
</div>
<!-- rts grocery feature area start -->
<div class="rts-grocery-feature-area rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between">
                    <h2 class="title-left mt-5">
                        Produk
                    </h2>
                    <div class="next-prev-swiper-wrapper">
                        <div class="swiper-button-prev"><i class="fa-regular fa-chevron-left"></i></div>
                        <div class="swiper-button-next"><i class="fa-regular fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="category-area-main-wrapper-one">
                    <div class="swiper mySwiper-category-1 swiper-data" data-swiper='{
                        "spaceBetween":16,
                        "slidesPerView":6,
                        "loop": true,
                        "speed": 700,
                        "navigation":{
                            "nextEl":".swiper-button-next",
                            "prevEl":".swiper-button-prev"
                          },
                        "breakpoints":{
                        "0":{
                            "slidesPerView":1,
                            "spaceBetween": 12},
                        "320":{
                            "slidesPerView":1,
                            "spaceBetween":12},
                        "480":{
                            "slidesPerView":2,
                            "spaceBetween":12},
                        "640":{
                            "slidesPerView":2,
                            "spaceBetween":16},
                        "840":{
                            "slidesPerView":3,
                            "spaceBetween":16},
                        "1140":{
                            "slidesPerView":5,
                            "spaceBetween":16},
                        "1540":{
                            "slidesPerView":5,
                            "spaceBetween":16},
                        "1840":{
                            "slidesPerView":6,
                            "spaceBetween":16}
                        }
                    }'>
                        <div class="swiper-wrapper">
                            <!-- single swiper start -->
                            <div class="swiper-slide">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/01.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->

                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Nestle Cerelac Mixed Fruits </h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp. 20.000</span>
                                            <div class="previous">Rp . 50.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single swiper start -->
                            <!-- single swiper start -->
                            <div class="swiper-slide">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/02.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Pumpkin</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp. 20.000</span>
                                            <div class="previous">Rp . 50.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single swiper start -->
                            <!-- single swiper start -->
                            <div class="swiper-slide">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/03.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Aptamil Gold+ </h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp. 20.000</span>
                                            <div class="previous">Rp . 50.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single swiper start -->
                            <!-- single swiper start -->
                            <div class="swiper-slide">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/04.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Juice Apple</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp. 20.000</span>
                                            <div class="previous">Rp . 50.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single swiper start -->
                            <!-- single swiper start -->
                            <div class="swiper-slide">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/05.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Jeruk Manis</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp. 20.000</span>
                                            <div class="previous">Rp . 50.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single swiper start -->
                            <!-- single swiper start -->
                            <div class="swiper-slide">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/06.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Paket Saus Tomat</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp. 20.000</span>
                                            <div class="previous">Rp . 50.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single swiper start -->
                            <!-- single swiper start -->
                            <div class="swiper-slide">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/15.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Pumkin</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp. 20.000</span>
                                            <div class="previous">Rp . 50.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single swiper start -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts grocery feature area end -->

<!-- rts grocery feature area start -->
<div class="rts-grocery-feature-area rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between">
                    <h2 class="title-left">
                        Products Discounts
                    </h2>
                    <div class="countdown">
                        <div class="countDown">05/10/2024 10:20:00</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-with-discount">
                    <div class="row g-5">
                        <div class="col-xl-4 col-lg-12">
                            <a href="{{ route('detail') }}" class="single-discount-with-bg">
                                <div class="inner-content">
                                    <h4 class="title">Alpro Organic Flavored <br>
                                        Fresh Juice</h4>
                                    <div class="price-area">
                                        <span>Only</span>
                                        <h4 class="title">
                                            Rp.15.000
                                        </h4>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('detail') }}" class="single-discount-with-bg bg-2">
                                <div class="inner-content">
                                    <h4 class="title">Chicken</h4>
                                    <div class="price-area">
                                        <span>Only</span>
                                        <h4 class="title">
                                            Rp.15.000
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-8 col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-shopping-card-one discount-offer">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/03.jpg" alt="grocery">
                                        </a>
                                        <div class="body-content">

                                            <a href="{{ route('detail') }}">
                                                <h4 class="title">Nestle Cerelac Mixed Fruits  </h4>
                                            </a>
                                            <span class="availability">500g Pack</span>
                                            <div class="price-area">
                                                <span class="current">Rp.25.000</span>
                                                <div class="previous">Rp.50.000</div>
                                            </div>
                                            <div class="cart-counter-action">
                                                <div class="quantity-edit">
                                                    <input type="text" class="input" value="1">
                                                    <div class="button-wrapper-action">
                                                        <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                        <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                    </div>
                                                </div>
                                                <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                    <div class="btn-text">
                                                        Add
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <i class="fa-regular fa-cart-shopping"></i>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <i class="fa-regular fa-cart-shopping"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-shopping-card-one discount-offer">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/04.jpg" alt="grocery">
                                        </a>
                                        <div class="body-content">

                                            <a href="{{ route('detail') }}">
                                                <h4 class="title">Jus Aplle </h4>
                                            </a>
                                            <span class="availability">500g Pack</span>
                                            <div class="price-area">
                                                <span class="current">Rp.25.000</span>
                                                <div class="previous">Rp.50.000</div>
                                            </div>
                                            <div class="cart-counter-action">
                                                <div class="quantity-edit">
                                                    <input type="text" class="input" value="1">
                                                    <div class="button-wrapper-action">
                                                        <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                        <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                    </div>
                                                </div>
                                                <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                    <div class="btn-text">
                                                        Add
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <i class="fa-regular fa-cart-shopping"></i>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <i class="fa-regular fa-cart-shopping"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-shopping-card-one discount-offer">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/05.jpg" alt="grocery">
                                        </a>
                                        <div class="body-content">

                                            <a href="{{ route('detail') }}">
                                                <h4 class="title">Jeruk Manis</h4>
                                            </a>
                                            <span class="availability">500g Pack</span>
                                            <div class="price-area">
                                                <span class="current">Rp.25.000</span>
                                                <div class="previous">Rp.50.000</div>
                                            </div>
                                            <div class="cart-counter-action">
                                                <div class="quantity-edit">
                                                    <input type="text" class="input" value="1">
                                                    <div class="button-wrapper-action">
                                                        <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                        <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                    </div>
                                                </div>
                                                <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                    <div class="btn-text">
                                                        Add
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <i class="fa-regular fa-cart-shopping"></i>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <i class="fa-regular fa-cart-shopping"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-shopping-card-one discount-offer">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/06.jpg" alt="grocery">
                                        </a>
                                        <div class="body-content">

                                            <a href="{{ route('detail') }}">
                                                <h4 class="title">Saos Tomat</h4>
                                            </a>
                                            <span class="availability">500g Pack</span>
                                            <div class="price-area">
                                                <span class="current">Rp.25.000</span>
                                                <div class="previous">Rp.50.000</div>
                                            </div>
                                            <div class="cart-counter-action">
                                                <div class="quantity-edit">
                                                    <input type="text" class="input" value="1">
                                                    <div class="button-wrapper-action">
                                                        <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                        <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                    </div>
                                                </div>
                                                <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                    <div class="btn-text">
                                                        Add
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <i class="fa-regular fa-cart-shopping"></i>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <i class="fa-regular fa-cart-shopping"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts grocery feature area end -->

<!-- best selling groceris -->
<div class="weekly-best-selling-area rts-section-gap bg_light-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between">
                    <h2 class="title-left">
                        Bahan Makanan Terlaris Mingguan
                    </h2>
                    <ul class="nav nav-tabs best-selling-grocery" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Buah Buahan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Minuman</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="myTabContent">
                    <!-- first tabs area start-->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row g-4">
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- first tabs area start-->
                    <div class="tab-pane fade show " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row g-4">
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-shopping-card-one">
                                    <!-- iamge and sction area start -->
                                    <div class="image-and-action-area-wrapper">
                                        <a href="{{ route('detail') }}" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="assets/images/grocery/18.jpg" alt="grocery">
                                        </a>
                                        <div class="action-share-option">
                                            <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                <i class="fa-light fa-heart"></i>
                                            </div>

                                            <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- iamge and sction area start -->
                                    <div class="body-content">

                                        <a href="{{ route('detail') }}">
                                            <h4 class="title">Melon</h4>
                                        </a>
                                        <span class="availability">500g Pack</span>
                                        <div class="price-area">
                                            <span class="current">Rp.100.000</span>
                                            <div class="previous">Rp.200.000</div>
                                        </div>
                                        <div class="cart-counter-action">
                                            <div class="quantity-edit">
                                                <input type="text" class="input" value="1">
                                                <div class="button-wrapper-action">
                                                    <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                    <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                                </div>
                                            </div>
                                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                <div class="btn-text">
                                                    Add
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                                <div class="arrow-icon">
                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- best selling groceris end -->

<!-- rts category feature area start -->
<div class="category-feature-area rts-section-gapTop">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="single-feature-card bg_image one">
                    <div class="content-area">
                        <a href="{{ route('shop') }}" class="rts-btn btn-primary">Weekend Discount</a>
                        <h3 class="title">
                            Drink Fresh Corn Juice <br>
                            <span>Good Taste</span>
                        </h3>
                        <a href="{{ route('shop') }}" class="shop-now-goshop-btn">
                            <span class="text">Shop Now</span>
                            <div class="plus-icon">
                                <i class="fa-sharp fa-regular fa-plus"></i>
                            </div>
                            <div class="plus-icon">
                                <i class="fa-sharp fa-regular fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="single-feature-card bg_image two">
                    <div class="content-area">
                        <a href="{{ route('shop') }}" class="rts-btn btn-primary">Weekend Discount</a>
                        <h3 class="title">
                            Organic Lemon Flavored
                            <span>Banana Chips</span>
                        </h3>
                        <a href="{{ route('shop') }}" class="shop-now-goshop-btn">
                            <span class="text">Shop Now</span>
                            <div class="plus-icon">
                                <i class="fa-sharp fa-regular fa-plus"></i>
                            </div>
                            <div class="plus-icon">
                                <i class="fa-sharp fa-regular fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="single-feature-card bg_image three">
                    <div class="content-area">
                        <a href="{{ route('shop') }}" class="rts-btn btn-primary">Weekend Discount</a>
                        <h3 class="title">
                            Nozes Pecanera Brasil
                            <span>Chocolate Snacks</span>
                        </h3>
                        <a href="{{ route('shop') }}" class="shop-now-goshop-btn">
                            <span class="text">Shop Now</span>
                            <div class="plus-icon">
                                <i class="fa-sharp fa-regular fa-plus"></i>
                            </div>
                            <div class="plus-icon">
                                <i class="fa-sharp fa-regular fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="single-feature-card bg_image four">
                    <div class="content-area">
                        <a href="{{ route('shop') }}" class="rts-btn btn-primary">Weekend Discount</a>
                        <h3 class="title">
                            Strawberry Water Drinks
                            <span>Flavors Awesome</span>
                        </h3>
                        <a href="{{ route('shop') }}" class="shop-now-goshop-btn">
                            <span class="text">Shop Now</span>
                            <div class="plus-icon">
                                <i class="fa-sharp fa-regular fa-plus"></i>
                            </div>
                            <div class="plus-icon">
                                <i class="fa-sharp fa-regular fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts category feature area end -->

<!-- rts top tranding product area -->
<div class="top-tranding-product rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between">
                    <h2 class="title-left mb--10">
                        Top Trending Products
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="cover-card-main-over">
                    <div class="row g-4">
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="{{ route('detail') }}" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/07.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="{{ route('detail') }}">
                                        <h4 class="title">Chocos</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">Rp.20.000</span>
                                        <div class="previous">Rp.50.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="{{ route('detail') }}" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/07.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="{{ route('detail') }}">
                                        <h4 class="title">Chocos</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">Rp.20.000</span>
                                        <div class="previous">Rp.50.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="{{ route('detail') }}" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/07.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="{{ route('detail') }}">
                                        <h4 class="title">Chocos</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">Rp.20.000</span>
                                        <div class="previous">Rp.50.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="{{ route('detail') }}" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/07.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="{{ route('detail') }}">
                                        <h4 class="title">Chocos</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">Rp.20.000</span>
                                        <div class="previous">Rp.50.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="{{ route('detail') }}" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/07.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="{{ route('detail') }}">
                                        <h4 class="title">Chocos</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">Rp.20.000</span>
                                        <div class="previous">Rp.50.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="{{ route('detail') }}" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/07.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="{{ route('detail') }}">
                                        <h4 class="title">Chocos</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">Rp.20.000</span>
                                        <div class="previous">Rp.50.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="{{ route('detail') }}" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/07.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="{{ route('detail') }}">
                                        <h4 class="title">Chocos</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">Rp.20.000</span>
                                        <div class="previous">Rp.50.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="single-shopping-card-one tranding-product">
                                <a href="{{ route('detail') }}" class="thumbnail-preview">
                                    <div class="badge">
                                        <span>25% <br>
                                            Off
                                        </span>
                                        <i class="fa-solid fa-bookmark"></i>
                                    </div>
                                    <img src="assets/images/grocery/07.jpg" alt="grocery">
                                </a>
                                <div class="body-content">

                                    <a href="{{ route('detail') }}">
                                        <h4 class="title">Chocos</h4>
                                    </a>
                                    <span class="availability">500g Pack</span>
                                    <div class="price-area">
                                        <span class="current">Rp.20.000</span>
                                        <div class="previous">Rp.50.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts top tranding product area end -->




@endsection
