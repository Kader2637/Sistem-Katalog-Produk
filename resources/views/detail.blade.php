@extends('layout.app')
@section('content')

<div class="rts-navigation-area-breadcrumb bg_light-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navigator-breadcrumb-wrapper">
                    <a href="/">Home</a>
                    <i class="fa-regular fa-chevron-right"></i>
                    <a class="#" href="{{ route('shop') }}">Shop</a>
                    <i class="fa-regular fa-chevron-right"></i>
                    <a class="current" href="{{ route('detail') }}">Farfum</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-seperator bg_light-1">
    <div class="container">
        <hr class="section-seperator">
    </div>
</div>

<div class="rts-chop-details-area rts-section-gap bg_light-1">
    <div class="container">
        <div class="shopdetails-style-1-wrapper">
            <div class="row g-5">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="product-details-popup-wrapper in-shopdetails">
                        <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
                            <div class="product-details-popup">
                                <div class="details-product-area">
                                    <div class="product-thumb-area">
                                        <div class="cursor"></div>
                                        <div class="thumb-wrapper one filterd-items figure">
                                            <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/shop/01.jpg)"><img src="assets/images/shop/01.jpg" alt="product-thumb">
                                            </div>
                                        </div>
                                        <div class="thumb-wrapper two filterd-items hide">
                                            <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/shop/02.jpg)"><img src="assets/images/shop/02.jpg" alt="product-thumb">
                                            </div>
                                        </div>
                                        <div class="thumb-wrapper three filterd-items hide">
                                            <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/shop/03.jpg)"><img src="assets/images/shop/03.jpg" alt="product-thumb">
                                            </div>
                                        </div>
                                        <div class="thumb-wrapper four filterd-items hide">
                                            <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/shop/04.jpg)"><img src="assets/images/shop/04.jpg" alt="product-thumb">
                                            </div>
                                        </div>
                                        <div class="thumb-wrapper five filterd-items hide">
                                            <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/shop/05.jpg)"><img src="assets/images/shop/05.jpg" alt="product-thumb">
                                            </div>
                                        </div>
                                        <div class="product-thumb-filter-group">
                                            <div class="thumb-filter filter-btn active" data-show=".one"><img src="assets/images/shop/01.jpg" alt="product-thumb-filter"></div>
                                            <div class="thumb-filter filter-btn" data-show=".two"><img src="assets/images/shop/02.jpg" alt="product-thumb-filter"></div>
                                            <div class="thumb-filter filter-btn" data-show=".three"><img src="assets/images/shop/03.jpg" alt="product-thumb-filter"></div>
                                            <div class="thumb-filter filter-btn" data-show=".four"><img src="assets/images/shop/04.jpg" alt="product-thumb-filter"></div>
                                            <div class="thumb-filter filter-btn" data-show=".five"><img src="assets/images/shop/05.jpg" alt="product-thumb-filter"></div>
                                        </div>
                                    </div>
                                    <div class="contents">
                                        <div class="product-status">
                                            <span class="product-catagory">Farfum</span>
                                            <div class="rating-stars-group">
                                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                                <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                                                <span>10 Reviews</span>
                                            </div>
                                        </div>
                                        <h2 class="product-title">Pengharum ruangan</h2>
                                        <p class="mt--20 mb--20">
                                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quia architecto voluptas minus, error earum quis ea quasi a necessitatibus suscipit magnam, repudiandae voluptatum adipisci.
                                        </p>
                                        <span class="product-price mb--15 d-block" style="color: #DC2626; font-weight: 600;"> Rp.25.000<span class="old-price ml--15">Rp.10.000</span></span>
                                        <div class="product-bottom-action">
                                            <div class="cart-edits">
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
                                            <a href="javascript:void(0);" class="rts-btn btn-primary ml--20"><i class="fa-light fa-heart"></i></a>
                                        </div>
                                        <div class="product-uniques">
                                            <span class="catagorys product-unipue mb--10"><span style="font-weight: 400; margin-right: 10px;">Categories: </span> T-Shirts, Tops, Mens</span>
                                            <span class="tags product-unipue mb--10"><span style="font-weight: 400; margin-right: 10px;">Tags: </span> fashion, t-shirts, Men</span>
                                            <span class="tags product-unipue mb--10"><span style="font-weight: 400; margin-right: 10px;">Type: </span> original</span>
                                            <span class="tags product-unipue mb--10"><span style="font-weight: 400; margin-right: 10px;">Category: </span> Beverages, Dairy & Bakery</span>
                                        </div>
                                        <div class="share-option-shop-details">
                                            <div class="single-share-option">
                                                <div class="icon">
                                                    <i class="fa-regular fa-heart"></i>
                                                </div>
                                                <span>Add To Wishlist</span>
                                            </div>
                                            <div class="single-share-option">
                                                <div class="icon">
                                                    <i class="fa-solid fa-share"></i>
                                                </div>
                                                <span>Share On social</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-discription-tab-shop mt--50">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Detail</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Keterangan / Informasi</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tabt" data-bs-toggle="tab" data-bs-target="#profile-tab-panes" type="button" role="tab" aria-controls="profile-tab-panes" aria-selected="false">Review</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade   show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <div class="single-tab-content-shop-details">

                                    <div class="details-row-2">
                                        <div class="left-area">
                                            <img src="assets/images/shop/06.jpg" alt="shop">
                                        </div>
                                        <div class="right">
                                            <h4 class="title">Produk Susu</h4>
                                            <p class="disc">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, a unde! Harum nemo, sapiente aspernatur fugit ipsum magnam mollitia quasi perspiciatis unde doloremque distinctio modi repellat quo deleniti, odit dolorum, adipisci nisi voluptatum voluptatibus sed dolores nulla soluta! Obcaecati, necessitatibus.
                                            </p>
                                            <ul class="bottom-ul">
                                                <li>Terbaik</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <div class="single-tab-content-shop-details">

                                    <div class="table-responsive table-shop-details-pd">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Kitchen Fade Defy</th>
                                                    <th>5KG</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>PRAN Full Cream Milk Powder</td>
                                                    <td>3KG</td>
                                                </tr>
                                                <tr>
                                                    <td>Net weight</td>
                                                    <td>8KG</td>
                                                </tr>
                                                <tr>
                                                    <td>Brand</td>
                                                    <td>Reactheme</td>
                                                </tr>
                                                <tr>
                                                    <td>Item code</td>
                                                    <td>4000000005</td>
                                                </tr>
                                                <tr>
                                                    <td>Product type</td>
                                                    <td>Powder milk</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="cansellation mt--20">
                                        <span> Return/cancellation:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda velit doloribus adipisci delectus fugiat accusantium magnam nisi ipsam eos exercitationem reprehenderit eius aut, vitae veniam repudiandae aliquam. Magni, expedita velit.
                                    </p>
                                    <p class="note">
                                        <span>Note:</span> Stok habis
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-panes" role="tabpanel" aria-labelledby="profile-tabt" tabindex="0">
                                <div class="single-tab-content-shop-details">
                                    <div class="product-details-review-product-style">
                                        <div class="average-stars-area-left">
                                            <div class="top-stars-wrapper">
                                                <h4 class="review">
                                                    5.0
                                                </h4>
                                                <div class="rating-disc">
                                                    <span>Average Rating</span>
                                                    <div class="stars">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <span>(1 Reviews & 0 Ratings)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="average-stars-area">
                                                <h4 class="average">66.7%</h4>
                                                <span>Recommended
                                                    (2 of 3)</span>
                                            </div>
                                            <div class="review-charts-details">
                                                <div class="single-review">
                                                    <div class="stars">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <div class="single-progress-area-incard">
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <span class="pac">100%</span>
                                                </div>
                                                <div class="single-review">
                                                    <div class="stars">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </div>
                                                    <div class="single-progress-area-incard">
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <span class="pac">80%</span>
                                                </div>
                                                <div class="single-review">
                                                    <div class="stars">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </div>
                                                    <div class="single-progress-area-incard">
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <span class="pac">60%</span>
                                                </div>
                                                <div class="single-review">
                                                    <div class="stars">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </div>
                                                    <div class="single-progress-area-incard">
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <span class="pac">40%</span>
                                                </div>
                                                <div class="single-review">
                                                    <div class="stars">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                        <i class="fa-regular fa-star"></i>
                                                    </div>
                                                    <div class="single-progress-area-incard">
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <span class="pac">30%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit-review-area">
                                            <form action="#" class="submit-review-area">
                                                <h5 class="title">Berikan ulasan anda</h5>
                                                <div class="your-rating">
                                                    <span>Berikan ratting untuk Product :</span>
                                                    <div class="stars">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="half-input-wrapper">
                                                    <div class="half-input">
                                                        <input type="text" placeholder="Your Name*">
                                                    </div>
                                                    <div class="half-input">
                                                        <input type="text" placeholder="Your Email *">
                                                    </div>
                                                </div>
                                                <textarea name="#" id="#" placeholder="Deskripsi" required></textarea>
                                                <button class="rts-btn btn-primary">SUBMIT REVIEW</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12 offset-xl-1  rts-sticky-column-item">
                    <div class="theiaStickySidebar">
                        <div class="shop-sight-sticky-sidevbar  mb--20">
                            <h6 class="title">Penawaran yang tersedia</h6>
                            <div class="single-offer-area">
                                <div class="icon">
                                    <img src="assets/images/shop/01.svg" alt="icon">
                                </div>
                                <div class="details">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, ad laborum. Itaque quidem fuga quod!</p>
                                </div>
                            </div>
                            <div class="single-offer-area">
                                <div class="icon">
                                    <img src="assets/images/shop/02.svg" alt="icon">
                                </div>
                                <div class="details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, enim!</p>
                                </div>
                            </div>
                            <div class="single-offer-area">
                                <div class="icon">
                                    <img src="assets/images/shop/03.svg" alt="icon">
                                </div>
                                <div class="details">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="our-payment-method">
                            <h5 class="title">Checkout</h5>
                            <img src="assets/images/shop/03.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

@endsection
