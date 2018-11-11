@extends('frontend')
@section('content')

@include('partials.breadcrumb', ['pageName' => 'Product'])

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
                    <div class="item-in">
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

        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <ul class="nav nav-tabs tabs-left" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                data-toggle="tab">Home</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">home tab</div>
                        <div role="tabpanel" class="tab-pane" id="profile">profile tab</div>
                        <div role="tabpanel" class="tab-pane" id="messages">messages tab</div>
                        <div role="tabpanel" class="tab-pane" id="settings">setting tabs</div>
                    </div>
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




        <!-- box items area start -->
        <div class="row mt-30">
            <div class="col-md-12">
                <div class="box-items">
                    <!-- box item start -->
                    <div v-bind:key="category.id" v-for="category in categories" class="box-item">
                        <!-- single box item start -->
                        <div class="single-box-item">
                            <div class="box-item-img">
                                <a href="#"><img :src="category.image || '/img/logo.png'" /></a>
                            </div>
                            <div class="box-content">
                                <a href="#">@{{category.name}}</a>
                                <ul class="item-list">
                                    <li><a href="shop.html" target="_blank">All-in-One Computers</a></li>
                                    <li><a href="shop.html" target="_blank">towers only</a></li>
                                    <li><a href="shop.html" target="_blank">Refurbished Desktops</a></li>
                                    <li><a href="shop.html" target="_blank">Gaming Desktops</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single box item end -->
                    </div>
                    <!-- box item end -->

                </div>
            </div>
        </div>
        <!-- box items area end -->


    </div>
</div>
<!-- product details end -->
@endsection