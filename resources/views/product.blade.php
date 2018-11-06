@extends('frontend')
@section('content')

@section('navigation', 'Product')

<!-- product details start -->
<div class="mt-40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-modal">
                    <!-- single product item start -->
                    <div class="single-product-item floating">
                        <a href="product-details.html" class="item-img">
                            <img :src="product.image || '/img/logo.png'" />
                            <span class="sale"></span>
                        </a>
                        <div class="item-info">
                            <h2><span class="item-title large">@{{product.name}}</span></h2>
                            <div class="info">
                                <p>Reference: <span>@{{product.reference}}</span></p>
                                <p>Condition: <span>@{{product.condition}}</span></p>
                            </div>
                            <h3 class="item-price"> @{{product.price}} <span class="old-price">$30.51</span> </h3>
                            <p class="product-descriptions">@{{product.description}}</p>
                            <div class="cart-plus-minus">
                                <label>Quantity: </label>
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                            </div>
                            <div class="actions">
                                <a href="#" @click.prevent="addToCart(product)" class="single-action">add to cart</a>
                                <a href="#" class="single-action"> <i class="fa fa-envelope"></i> </a>
                                <a href="#" class="single-action"> <i class="fa fa-print"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                            </div>
                            <div class="stock">
                                <p> 300 Items <span>In stock</span></p>
                            </div>
                            <div class="social-share">
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i> twitter</a>
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i> share</a>
                                <a href="#" target="_blank"><i class="fa fa-google-plus"></i> Google+</a>
                                <a href="#" target="_blank"><i class="fa fa-pinterest"></i> pinterest</a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                </div>
            </div>
        </div>
        <!-- random product section heading start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading mt-40">
                    <div class="row">
                        <!-- section title start -->
                        <div class="col-md-9">
                            <h2> <img src="{{asset('themes/frontend/img/icon/icon_categories.png')}}" alt="">random
                                products</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- random product section heading end -->
        <!-- random products start -->
        <div class="row">
            <div class="col-md-12">
                <div class="multiple-items product-details mt-30">
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/1.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/2.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/3.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/4.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/5.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/6.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/7.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/8.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                </div>
            </div>
        </div>
        <!-- random products end -->

        <!-- same category product section heading start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading mt-40">
                    <div class="row">
                        <!-- section title start -->
                        <div class="col-md-9">
                            <h2> <img src="{{asset('themes/frontend/img/icon/icon_categories.png')}}" alt=""> 8
                                products in same category:</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- same category product section heading end -->
        <!-- same category products start -->
        <div class="row">
            <div class="col-md-12">
                <div class="multiple-items product-details mt-30">
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/42.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/18.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/41.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/51.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/7.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/9.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/38.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                    <!-- single product item start -->
                    <div class="single-product-item">
                        <a href="product-details.html" class="item-img">
                            <img src="{{asset('themes/frontend/img/products/19.jpg')}}" alt="">
                            <span class="new"></span>
                        </a>
                        <div class="item-info text-center">
                            <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim
                                    Unlocked Cell...</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                            </div>
                            <div class="hover-content">
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i
                                        class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                </div>
            </div>
        </div>
        <!-- same category products end -->
    </div>
</div>
<!-- product details end -->
@endsection