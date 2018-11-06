@extends('frontend')
@section('content')

@section('navigation', 'Home')

@include('partials.slider')

<div class="pt-40">
    <!-- products area start -->
    <div class="container">
        @foreach ($brands as $index => $brand)
        @if ($index % 2 == 0)
        <!-- electronics section heading start -->
        <div class="row" id="electronics">
            <div class="col-lg-9 col-md-12">
                <div class="section-heading mt-40">
                    <div class="row">
                        <!-- section title start -->
                        <div class="col-md-4 col-sm-5">
                            <h2 class="blue small-icon-size">
                                <img src="{{asset('themes/frontend/img/icon/icon_electronics.jpg')}}" alt="">
                                {{$brand->name}}
                            </h2>
                        </div>
                        <!-- section title end -->
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            <!-- tab menu start -->
                            {{-- <ul class="product-tab">
                                <li class="active"><a data-toggle="tab" href="#tab-1"> bestseller </a></li>
                                <li><a data-toggle="tab" href="#tab-2"> featured </a></li>
                                <li><a data-toggle="tab" href="#tab-3"> speical </a></li>
                            </ul> --}}
                            <!-- tab menu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- electronics section heading end -->

        <!-- electronics items start -->
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="tab-content mt-30">
                    <div class="multiple-items">
                        <!-- single product item start -->
                        @foreach ($brand->products as $products)
                        <div class="single-product-item">
                            <a href="#" class="item-img">
                                <img src="{{ $products->image }}" />
                                <span class="sale"></span>
                            </a>
                            <div class="item-info text-center">
                                <h2><a href="#" class="item-title">{{$products->name}}</a></h2>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="item-price"> {{$products->price}} <span class="old-price">$30.51</span>
                                </h3>
                                <div class="actions">
                                    <a href="#" class="single-action">add
                                        to cart</a>
                                </div>
                                <div class="hover-content">
                                    <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                    </a>
                                    <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                    </a>
                                    <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal">
                                        <i class="zmdi zmdi-search"></i> </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- single product item end -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 hidden-md hidden-sm hidden-xs mt-minus-53">
                <a href="#" class="banner-hover">
                    <img src="{{asset('img/banner.png')}}" alt="">
                </a>
            </div>
        </div>

        @else
        <!-- fashion section heading start -->
        <div class="row" id="fashion">
            <div class="col-lg-9 col-lg-offset-3 col-md-12">
                <div class="section-heading mt-40">
                    <div class="row">
                        <!-- section title start -->
                        <div class="col-md-4 col-sm-5">
                            <h2 class="sweet small-icon-size">
                                <img src="{{asset('themes/frontend/img/icon/icon_electronics.jpg')}}" alt="">
                                {{$brand->name}}
                        </div>
                        <!-- section title end -->
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            <!-- tab menu start -->
                            <ul class="product-tab">
                                <li class="active"><a data-toggle="tab" href="#tab-4"> bestseller </a></li>
                                <li><a data-toggle="tab" href="#tab-5"> featured </a></li>
                                <li><a data-toggle="tab" href="#tab-6"> speical </a></li>
                            </ul>
                            <!-- tab menu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fashion section heading end -->

        <!-- fashion items start -->
        <div class="row">
            <div class="col-lg-3 hidden-md hidden-sm hidden-xs mt-minus-53">
                <a href="#" class="banner-hover">
                    <img src="{{asset('img/banner.png')}}" alt="">
                </a>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="tab-content mt-30">
                    <div class="multiple-items">
                        <!-- single product item start -->
                        @foreach ($brand->products as $products)
                        <div class="single-product-item">
                            <a href="#" class="item-img">
                                <img src="{{ asset($products->image) }}" />
                                <span class="sale"></span>
                            </a>
                            <div class="item-info text-center">
                                <h2><a href="#" class="item-title">{{$products->name}}</a></h2>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="item-price"> {{$products->price}} <span class="old-price">$30.51</span>
                                </h3>
                                <div class="actions">
                                    <a href="#" class="single-action">add
                                        to cart</a>
                                </div>
                                <div class="hover-content">
                                    <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                    </a>
                                    <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                    </a>
                                    <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal">
                                        <i class="zmdi zmdi-search"></i> </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- single product item end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- fashion items end -->
        @endif

        <!-- electronics items end -->
        @endforeach

        <!-- category section heading start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading mt-40">
                    <div class="row">
                        <!-- section title start -->
                        <div class="col-md-4 col-lg-3">
                            <h2> <img src="img/icon/icon_categories.png" alt=""> Our Categories</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- category section heading end -->

        <!-- box items area start -->
        <div class="row mt-30">
            <div class="col-md-12">
                <div class="box-items">
                    <!-- box item start -->
                    <div v-bind:key="category.id" v-for="category in categories.slice(0,2)" class="box-item">
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

                    <!-- box item start -->
                    <div v-bind:key="category.id" v-for="category in categories.slice(2,4)" class="box-item">
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

                    <!-- box item start -->
                    <div v-bind:key="category.id" v-for="category in categories.slice(4,6)" class="box-item">
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
    @endsection