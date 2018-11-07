@extends('frontend')
@section('content')

@section('navigation', 'Home')

@include('partials.slider')

<!-- scroll item menu start -->
<div class="scroll-item">
    <nav class="collapse navbar-collapse">
        <ul>
            <li v-bind:key="index" v-for="(brand, index) in brands">
                <a :href="'#'+ brand.name" class="smooth">
                    <img :src="brand.logo || '/img/logo.png'" />
                </a>
            </li>
            <li id="scrollUp"> <a href="#"><i class="fa fa-angle-double-up"></i><span>back to top</span></a></li>
        </ul>
    </nav>
</div>
<!-- scroll item menu end -->


<div class="pt-40">
    <!-- products area start -->
    <div class="container">
        <div v-bind:key="index" v-for="(brand, index) in brands">
            <div v-if="index % 2== 0">
                <!-- electronics section heading start -->
                <div class="row" v-bind:id="brand.name">
                    <div class="col-lg-9 col-md-12">
                        <div class="section-heading mt-40">
                            <div class="row">
                                <!-- section title start -->
                                <div class="col-md-4 col-sm-5">
                                    <h2 class="blue small-icon-size">
                                        <img :src="brand.logo || '/img/logo.png'" />
                                        @{{brand.name}}</h2>
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
                            <div class="products">
                                <div v-bind:key="product.id" v-for="product in brand.products" class="item">
                                    <a href="#" @click.prevent="goToProduct(product)" class="item-img">
                                        <img :src="product.image || '/img/logo.png'" />
                                        <span class="sale"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="#" @click.prevent="goToProduct(product)" class="item-title">@{{product.name}}</a></h2>
                                        {{-- <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div> --}}
                                        <h3 class="item-price"> @{{product.price}} </h3>
                                        <div class="actions">
                                            <a href="#" @click.prevent="addToCart(product)" class="single-action">add to cart</a>
                                            <a href="#" @click.prevent="singleProductModal(product)" class="single-action">check</a>
                                        </div>
                                        <div class="hover-content">
                                            {{-- <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                            </a>
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                            </a> --}}
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 hidden-md hidden-sm hidden-xs mt-minus-53">
                        <a href="#" @click.prevent="goToBrand(brand)" class="banner-hover">
                            <img :src="brand.banner || '/img/logo.png'" />
                        </a>
                    </div>
                </div>
                <!-- electronics items end -->
            </div>
            <div v-else>
                <!-- electronics section heading start -->
                <div class="row" v-bind:id="brand.name">
                    <div class="col-lg-9 col-lg-offset-3 col-md-12">
                        <div class="section-heading mt-40">
                            <div class="row">
                                <!-- section title start -->
                                <div class="col-md-4 col-sm-5">
                                    <h2 class="blue small-icon-size">
                                        <img :src="brand.logo || '/img/logo.png'" />
                                        @{{brand.name}}</h2>
                                </div>
                                <!-- section title end -->
                                <div class="col-md-8 col-sm-7 col-xs-12">
                                    <!-- tab menu start -->
                                    <ul class="product-tab">
                                        {{-- <li class="active"><a data-toggle="tab" href="#tab-1"> bestseller </a></li>
                                        <li><a data-toggle="tab" href="#tab-2"> featured </a></li>
                                        <li><a data-toggle="tab" href="#tab-3"> speical </a></li> --}}
                                    </ul>
                                    <!-- tab menu end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- electronics section heading end -->

                <!-- electronics items start -->
                <div class="row">
                    <div class="col-lg-3 hidden-md hidden-sm hidden-xs mt-minus-53">
                        <a href="#" @click.prevent="goToBrand(brand)" class="banner-hover">
                            <img :src="brand.banner || '/img/logo.png'" />
                        </a>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="tab-content mt-30">
                            <div class="products">
                                <div v-bind:key="product.id" v-for="product in brand.products" class="item">
                                    <a href="#" @click.prevent="goToProduct(product)" class="item-img">
                                        <img :src="product.image || '/img/logo.png'" />
                                        <span class="sale"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="#" @click.prevent="goToProduct(product)" class="item-title">@{{product.name}}</a></h2>
                                        {{-- <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div> --}}
                                        <h3 class="item-price"> @{{product.price}} </h3>
                                        <div class="actions">
                                            <a href="#" @click.prevent="addToCart(product)" class="single-action">add to cart</a>
                                            <a href="#" @click.prevent="singleProductModal(product)" class="single-action">check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- electronics items end -->
            </div>

        </div>

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
@endsection