@extends('layout.app')
@section('content')
    <div class="rts-navigation-area-breadcrumb bg_light-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navigator-breadcrumb-wrapper">
                        <a href="/">Home</a>
                        <i class="fa-regular fa-chevron-right"></i>
                        <a class="current" href="{{ route('whislist') }}">Keranjang</a>
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



    <!-- rts cart area start -->
    <div class="rts-cart-area rts-section-gap bg_light-1">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="rts-cart-list-area wishlist">
                        <div class="single-cart-area-list head">
                            <div class="product-main">
                                <P>Produk</P>
                            </div>
                            <div class="price">
                                <p>Harga</p>
                            </div>
                            <div class="quantity">
                                <p>Quantity</p>
                            </div>
                            <div class="subtotal">
                                <p>Total</p>
                            </div>
                            <div class="button-area">

                            </div>
                        </div>
                        <div class="single-cart-area-list main  item-parent">
                            <div class="product-main-cart">
                                <div class="close section-activation">
                                    <img src="assets/images/shop/01.png" alt="shop">
                                </div>
                                <div class="thumbnail">
                                    <img src="assets/images/shop/02.png" alt="shop">
                                </div>
                                <div class="information">
                                    <h6 class="title">Strawbery</h6>
                                    <span>Kode:BG-1001</span>
                                </div>
                            </div>
                            <div class="price">
                                <p>Rp.100.000</p>
                            </div>
                            <div class="quantity">
                                <div class="quantity-edit">
                                    <input type="text" class="input" value="1">
                                    <div class="button-wrapper-action">
                                        <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                        <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="subtotal">
                                <p>Rp.100.000</p>
                            </div>
                            <div class="button-area">
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
                            </div>
                        </div>
                        <div class="single-cart-area-list main  item-parent">
                            <div class="product-main-cart">
                                <div class="close section-activation">
                                    <img src="assets/images/shop/01.png" alt="shop">
                                </div>
                                <div class="thumbnail">
                                    <img src="assets/images/shop/02.png" alt="shop">
                                </div>
                                <div class="information">
                                    <h6 class="title">Strawbery</h6>
                                    <span>Kode:BG-1001</span>
                                </div>
                            </div>
                            <div class="price">
                                <p>Rp.100.000</p>
                            </div>
                            <div class="quantity">
                                <div class="quantity-edit">
                                    <input type="text" class="input" value="1">
                                    <div class="button-wrapper-action">
                                        <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                        <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="subtotal">
                                <p>Rp.100.000</p>
                            </div>
                            <div class="button-area">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts cart area end -->
@endsection
