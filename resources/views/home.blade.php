@extends('frontend')
@section('content')
<div id="app">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- top banner area start -->
    {{-- <div class="top-banner-area top-banner-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="close-section-btn"><i class="zmdi zmdi-close"></i></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- top banner area end -->

    <!-- header start -->
    <header>
        <!-- header top start -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="top-content">
                        <div class="col-lg-6">
                            <div class="header-address">
                                <span>Hotline:</span>
                                <a href="tel:0123456789"> 0123-456-789</a>
                            </div>
                            <div class="header-address">
                                <span>Email:</span>
                                <a href="mailto:sales@yourcompany.com">sales@yourcompany.com</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-menu">
                                <ul>
                                    {{-- <li><a href="#">languages <span>English <i class="fa fa-angle-down"></i>
                                            </span></a>
                                        <ul>
                                            <li><a href="#"><img src="{{asset('themes/frontend/img/languages/1.jpg')}}"
                                                        alt=""> English </a></li>
                                            <li><a href="#"><img src="{{asset('themes/frontend/img/languages/2.jpg')}}"
                                                        alt=""> Arab </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">currenct <span>USD <i class="fa fa-angle-down"></i> </span></a>
                                        <ul>
                                            <li><a href="#">Dollar(USD)</a></li>
                                            <li><a href="#">Euro(EUR)</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="#">My Account <i class="fa fa-angle-down"></i> </a>
                                        <ul>
                                            <li><a href="#">my account</a></li>
                                            <li><a href="#">my wishlist</a></li>
                                            <li><a href="#">checkout</a></li>
                                            <li><a href="#">login</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top end -->

        <!-- main header start -->
        <div class="main-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <!-- logo start -->
                        <a href="index.html" class="logo"> <img src="{{asset('themes/frontend/img/logo.jpg')}}" alt="">
                        </a>
                        <!-- logo end -->
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="row">
                            <div class="col-lg-9 col-md-8 col-sm-8">
                                <!-- category bar start -->
                                <div class="catagory-bar">
                                    <div class="header-search">
                                        <form action="#" method="GET">
                                            <input type="text" placeholder="Search entire store here ...">
                                            <span>
                                                <select name="select" id="select">
                                                    <option value="">All Categories</option>
                                                    <option value="12">Fashion</option>
                                                    <option value="22">--Dresses</option>
                                                    <option value="26">---Sweater</option>
                                                    <option value="27">---Evening</option>
                                                    <option value="28">---Day</option>
                                                    <option value="29">---Sports</option>
                                                    <option value="23">--Handbags</option>
                                                    <option value="30">---Shoulder</option>
                                                    <option value="31">---Satchels</option>
                                                    <option value="32">---kids</option>
                                                    <option value="33">---coats</option>
                                                    <option value="24">--shoes</option>
                                                    <option value="34">---Ankle Boots</option>
                                                    <option value="35">---Clog sandals</option>
                                                    <option value="36">---run</option>
                                                    <option value="37">---Books</option>
                                                    <option value="25">--Clothing</option>
                                                    <option value="38">---Coats Jackets</option>
                                                    <option value="39">---Raincoats</option>
                                                    <option value="40">---Jackets</option>
                                                    <option value="41">---T-shirts</option>
                                                    <option value="13">Electronics</option>
                                                    <option value="42">--Laptops</option>
                                                    <option value="46">---Dell Laptops</option>
                                                    <option value="47">---HP Laptops</option>
                                                    <option value="48">---Lenovo Laptops</option>
                                                    <option value="49">---Apple Laptops</option>
                                                    <option value="43">--Camera</option>
                                                    <option value="50">---Digital Cameras</option>
                                                    <option value="51">---Camcorders</option>
                                                    <option value="52">---Photo Accessories</option>
                                                    <option value="53">---Memory Cards</option>
                                                    <option value="44">--Smart Phone</option>
                                                    <option value="54">---Apple Phones</option>
                                                    <option value="55">---Samsung Phones</option>
                                                    <option value="56">---Motorola Phones</option>
                                                    <option value="57">---Lenovo Phones</option>
                                                    <option value="45">--Television</option>
                                                    <option value="58">---All-in-One Computers</option>
                                                    <option value="59">---Towers Only</option>
                                                    <option value="60">---Refurbished Desktops</option>
                                                    <option value="61">---Gaming Desktops</option>
                                                    <option value="14">Furnitured & Decor</option>
                                                    <option value="62">--Chair</option>
                                                    <option value="65">---Dining room</option>
                                                    <option value="66">---bedroom</option>
                                                    <option value="67">--- Home & Office</option>
                                                    <option value="68">---living room</option>
                                                    <option value="63">--Lighting</option>
                                                    <option value="69">---Ceiling Lighting</option>
                                                    <option value="70">---Wall Lighting</option>
                                                    <option value="71">---Outdoor Lighting</option>
                                                    <option value="72">---Smart Lighting</option>
                                                    <option value="64">--Sofa</option>
                                                    <option value="73">---Fabric Sofas</option>
                                                    <option value="74">---Leather Sofas</option>
                                                    <option value="75">---Corner Sofas</option>
                                                    <option value="76">---Sofa Beds</option>
                                                    <option value="15">Jewelry & Watches</option>
                                                    <option value="16">Health & Beauty</option>
                                                    <option value="17">Books & Office</option>
                                                    <option value="18">Sport & Outdoor</option>
                                                    <option value="19">Smart phone & Tablets</option>
                                                    <option value="20">Computer - Laptop</option>
                                                    <option value="21">Accessories</option>
                                                    <option value="77">--Bags & Belts</option>
                                                    <option value="78">--Sunglasses & Readers</option>
                                                    <option value="79">--Socks & Tights</option>
                                                    <option value="80">--Scarves & Gloves</option>
                                                </select>
                                            </span>
                                            <button type="submit">
                                                <i class="zmdi zmdi-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <!-- category bar end -->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4">
                                <!-- total cart start -->
                                <div class="total-cart">
                                    <div class="cart-button">
                                        <a href="#"> <i class="zmdi zmdi-shopping-cart"></i> <strong> MY CART
                                            </strong> <span class="price"></span>Price: $55.98</a>
                                    </div>
                                    <div class="cart-item">
                                        <div v-bind:key="product.id" v-for="product in cartProducts" class="single-item">
                                            <div class="item-img">
                                                <a href="#" @click.prevent="goToProduct(product)">
                                                    <img :src="product.image || '/img/logo.png'" />
                                                </a>
                                            </div>
                                            <div class="item-info">
                                                <a href="#" @click.prevent="goToProduct(product)" class="title"> <span>
                                                        @{{product.quantity}} x </span>@{{product.name}}</a>
                                                <a href="#">S,</a>
                                                <a href="#"> Yellow</a>
                                                <span>@{{product.price}}</span>
                                            </div>
                                            <span class="single-item-remove" @click.precent="removeProduct(product)">x</span>
                                        </div>
                                        <div class="subtotal">
                                            <h3> Shipping: <span>$7.00</span> </h3>
                                            <h3> Total: <span>@{{total}}</span> </h3>
                                        </div>
                                        <div class="checkout">
                                            <a href="{{ URL::route('cart') }}"> check out <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- total cart end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header end -->

        <!-- header bottom start -->
        <div id="sticker" class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- category menu start -->
                        <div class="catagory-menu hidden-sm hidden-xs">
                            <div class="catagory-heading">
                                <h2>all categories</h2>
                            </div>
                            <div class="catagory-list-menu hidden-menu">
                                <ul>
                                    <li class="arrow"> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/1.jpg')}}"
                                                alt=""> fashion</a>
                                        <!-- category mega menu start -->
                                        <div class="c-mega-menu">
                                            <div class="block">
                                                <span>
                                                    <a href="#">Dresses </a>
                                                    <a href="#">Sweater</a>
                                                    <a href="#">Evening</a>
                                                    <a href="#">Day</a>
                                                    <a href="#">Sports</a>
                                                </span>
                                                <span>
                                                    <a href="#">Handbags </a>
                                                    <a href="#">Shoulder</a>
                                                    <a href="#">Satchels</a>
                                                    <a href="#">kids</a>
                                                    <a href="#">coats</a>
                                                </span>
                                                <span>
                                                    <a href="#">shoes</a>
                                                    <a href="#">Ankle Boots</a>
                                                    <a href="#">Clog sandals </a>
                                                    <a href="#">run</a>
                                                    <a href="#">Books</a>
                                                </span>
                                                <span>
                                                    <a href="#">Clothing</a>
                                                    <a href="#">Coats Jackets </a>
                                                    <a href="#">Raincoats</a>
                                                    <a href="#">Jackets</a>
                                                    <a href="#">T-shirts</a>
                                                </span>
                                            </div>
                                            <div class="banner">
                                                <a href="#" class="banner-hover">
                                                    <img src="{{asset('themes/frontend/img/banner/menu.jpg')}}" alt="banner">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- category mega menu end -->
                                    </li>
                                    <li class="arrow"> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/2.jpg')}}"
                                                alt="">
                                            Electronics</a>
                                        <!-- category mega menu start -->
                                        <div class="c-mega-menu">
                                            <div class="block">
                                                <span>
                                                    <a href="#">Laptops </a>
                                                    <a href="#">Dell Laptops</a>
                                                    <a href="#">HP Laptops</a>
                                                    <a href="#">Lenovo Laptops</a>
                                                    <a href="#">Apple Laptops</a>
                                                </span>
                                                <span>
                                                    <a href="#">Camera </a>
                                                    <a href="#">Digital Cameras</a>
                                                    <a href="#">Camcorders</a>
                                                    <a href="#">Photo Accessories</a>
                                                    <a href="#">Memory Cards</a>
                                                </span>
                                                <span>
                                                    <a href="#">Smart Phone</a>
                                                    <a href="#">Apple Phones</a>
                                                    <a href="#">Samsung Phones </a>
                                                    <a href="#">Motorola Phones</a>
                                                    <a href="#">Lenovo Phones</a>
                                                </span>
                                                <span>
                                                    <a href="#">Television</a>
                                                    <a href="#">All-in-One Computers</a>
                                                    <a href="#">Towers Only</a>
                                                    <a href="#">Refurbished Desktops</a>
                                                    <a href="#">Gaming Desktops</a>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- category mega menu end -->
                                    </li>
                                    <li class="arrow"> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/3.jpg')}}"
                                                alt="">
                                            Furnitured & Decor</a>
                                        <!-- category mega menu start -->
                                        <div class="c-mega-menu item-3">
                                            <div class="block">
                                                <span>
                                                    <a href="#">Chair </a>
                                                    <a href="#">Dining room</a>
                                                    <a href="#">bedroom</a>
                                                    <a href="#">Home & Office</a>
                                                    <a href="#">living room</a>
                                                </span>
                                                <span>
                                                    <a href="#">Lighting </a>
                                                    <a href="#">Ceiling Lighting</a>
                                                    <a href="#">Wall Lighting</a>
                                                    <a href="#">Outdoor Lighting</a>
                                                    <a href="#">Smart Lighting</a>
                                                </span>
                                                <span>
                                                    <a href="#">Sofa</a>
                                                    <a href="#">Fabric Sofas</a>
                                                    <a href="#">Leather Sofas </a>
                                                    <a href="#">Corner Sofas</a>
                                                    <a href="#">Sofa Beds</a>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- category mega menu end -->
                                    </li>
                                    <li class="arrow"> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/4.jpg')}}"
                                                alt="">Accessories</a>
                                        <!-- category sub menu start -->
                                        <ul class="c-sub-menu">
                                            <li> <a href="#">Bags & Belts</a> </li>
                                            <li> <a href="#">Sunglasses & Readers</a> </li>
                                            <li> <a href="#">Socks & Tights</a> </li>
                                            <li> <a href="#">Scarves & Gloves</a> </li>
                                        </ul>
                                        <!-- category sub menu end -->
                                    </li>
                                    <li> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/5.jpg')}}" alt="">
                                            Jewelry & Watches</a>
                                    </li>
                                    <li> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/6.jpg')}}" alt="">
                                            Health & Beauty</a>
                                    </li>
                                    <li> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/7.jpg')}}" alt="">
                                            Books & Office</a>
                                    </li>
                                    <li> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/8.jpg')}}" alt="">
                                            Sport & Outdoor</a>
                                    </li>
                                    <li> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/9.jpg')}}" alt="">
                                            Smart phone & Tablets</a>
                                    </li>
                                    <li class="more-catagory"> <a href="#"> <i class="zmdi zmdi-plus-circle"></i>
                                            More Catagories</a> </li>
                                    <li class="more-catagory-item"> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/10.jpg')}}"
                                                alt=""> Computer - Laptop</a> </li>
                                    <li class="less-catagory"> <a href="#"> <i class="zmdi zmdi-minus-circle"></i>
                                            Less Catagories</a> </li>
                                </ul>
                            </div>
                        </div>
                        <!-- category menu end -->
                    </div>
                    <div class="col-md-9">
                        <div class="mainmenu hidden-xs">
                            <ul>
                                <li><a href="{{ URL::route('home') }}">Home</a></li>
                                <li><a href="{{ URL::route('category') }}">Category</a></li>
                                <li><a href="">my account <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="my-account.html">my account</a></li>
                                        <li><a href="authentication.html">authentication</a></li>
                                    </ul>
                                </li>
                                <li><a href="">blog <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="blog.html">blog default</a></li>
                                        <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-details-left-sidebar.html">blog details left sidebar</a></li>
                                        <li><a href="blog-details-right-sidebar.html">blog details right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="">other pages <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="cart-empty.html">cart empty</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="wishlist-empty.html">wishlist empty</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="mobileMenu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header bottom end -->
    </header>
    <!-- header end -->

    <!-- scroll item menu start -->
    <div class="scroll-item">
        <nav class="collapse navbar-collapse">
            <ul>
                <li><a href="#electronics" class="smooth"><img src="{{asset('themes/frontend/img/icon/icon_electronics.jpg')}}"
                            alt=""></a></li>
                <li><a href="#fashion" class="smooth"><img src="{{asset('themes/frontend/img/icon/icon_fashion.jpg')}}"
                            alt=""></a></li>
                <li><a href="#furniture" class="smooth"><img src="{{asset('themes/frontend/img/icon/icon_Furniture.jpg')}}"
                            alt=""></a></li>
                <li><a href="#accessories" class="smooth"><img src="{{asset('themes/frontend/img/icon/icon_sunglass.jpg')}}"
                            alt=""></a></li>
                <li id="scrollUp"> <a href="#"><i class="fa fa-angle-double-up"></i><span>back to top</span></a></li>
            </ul>
        </nav>
    </div>
    <!-- scroll item menu end -->
    <!-- slide show area start -->
    <div class="slide-show">
        <!-- slider area start -->
        <div class="slider-area">
            <div class="bend niceties preview-1">
                <!-- slider images start -->
                <div id="nivoslider" class="slides">
                    <img src="{{asset('img/1.jpg')}}" alt="slider_1" />
                    <img src="{{asset('img/2.jpg')}}" alt="slider_1" />
                </div>
                <!-- slider images end -->
            </div>
        </div>
        <!-- slider area end -->
    </div>
    <!-- slide show area end -->
    <div class="pt-40">
        <!-- products area start -->
        <div class="container">

            <!-- banner start -->
            {{-- <div class="row">
                <div class="col-sm-4">
                    <a href="#" class="banner-hover">
                        <img src="{{asset('themes/frontend/img/banner/banner12.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-sm-4 xs-mt-20">
                    <a href="#" class="banner-hover">
                        <img src="{{asset('themes/frontend/img/banner/banner13.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-sm-4 xs-mt-20">
                    <a href="#" class="banner-hover">
                        <img src="{{asset('themes/frontend/img/banner/banner14.jpg')}}" alt="">
                    </a>
                </div>
            </div> --}}
            <!-- banner end -->
             <!-- LEFT -->
            <div v-bind:key="index" v-for="(brand, index) in brands">
                <div v-if="index%2==0">
                    <!-- electronics section heading start -->
                    <div class="row" id="electronics">
                        <div class="col-lg-9 col-md-12">
                            <div class="section-heading mt-40">
                                <div class="row">
                                    <!-- section title start -->
                                    <div class="col-md-4 col-sm-5">
                                        <h2 class="blue small-icon-size"> <img src="{{asset('themes/frontend/img/icon/icon_electronics.jpg')}}" alt="">
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
                                    <div class="multiple-items">
                                        <!-- single product item start -->
                                        <div v-bind:key="product.id" v-for="product in brand.products" class="single-product-item">
                                            <a href="#" @click.prevent="goToProduct(product)" class="item-img">
                                                <img :src="product.image || '/img/logo.png'" />
                                                <span class="sale"></span>
                                            </a>
                                            <div class="item-info text-center">
                                                <h2><a href="#" @click.prevent="goToProduct(product)" class="item-title">@{{product.name}}</a></h2>
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h3 class="item-price"> @{{product.price}} <span class="old-price">$30.51</span>
                                                </h3>
                                                <div class="actions">
                                                    <a href="#" @click.prevent="addToCart(product)" class="single-action">add
                                                        to cart</a>
                                                </div>
                                                <div class="hover-content">
                                                    <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                                    </a>
                                                    <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                                    </a>
                                                    <a href="#" @click.prevent="singleProductModal(product)" class="single-action"
                                                        data-toggle="modal" data-target="#item-modal">
                                                        <i class="zmdi zmdi-search"></i> </a>
                                                </div>
                                            </div>
                                        </div>

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
                </div>

                <div v-else>
                    <!-- fashion section heading start -->
                    <div class="row" id="fashion">
                        <div class="col-lg-9 col-lg-offset-3 col-md-12">
                            <div class="section-heading mt-40">
                                <div class="row">
                                    <!-- section title start -->
                                    <div class="col-md-4 col-sm-5">
                                        <h2 class="sweet small-icon-size"> 
                                            <img src="{{asset('themes/frontend/img/icon/icon_electronics.jpg')}}" alt="">
                                            @{{brand.name}}</h2>
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
                                        <div v-bind:key="product.id" v-for="product in brand.products" class="single-product-item">
                                            <a href="#" @click.prevent="goToProduct(product)" class="item-img">
                                                <img :src="product.image || '/img/logo.png'" />
                                                <span class="sale"></span>
                                            </a>
                                            <div class="item-info text-center">
                                                <h2><a href="#" @click.prevent="goToProduct(product)" class="item-title">@{{product.name}}</a></h2>
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h3 class="item-price"> @{{product.price}} <span class="old-price">$30.51</span>
                                                </h3>
                                                <div class="actions">
                                                    <a href="#" @click.prevent="addToCart(product)" class="single-action">add
                                                        to cart</a>
                                                </div>
                                                <div class="hover-content">
                                                    <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                                    </a>
                                                    <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                                    </a>
                                                    <a href="#" @click.prevent="singleProductModal(product)" class="single-action"
                                                        data-toggle="modal" data-target="#item-modal">
                                                        <i class="zmdi zmdi-search"></i> </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- single product item end -->
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- fashion items end -->
                </div>

                <!-- electronics items end -->
            </div>




            <!-- banner start -->
            {{-- <div class="row mt-40">
                <div class="col-sm-6">
                    <a href="#" class="banner-hover">
                        <img src="{{asset('themes/frontend/img/banner/banner2.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-sm-6 xs-mt-20">
                    <a href="#" class="banner-hover">
                        <img src="{{asset('themes/frontend/img/banner/banner3.jpg')}}" alt="">
                    </a>
                </div>
            </div> --}}
            <!-- banner end -->


        </div>

        <!-- Product item details Modal start -->
        <div class="modal fade" id="item-modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- close button start -->
                        <div class="close-button" data-dismiss="modal"><i class="fa fa-times-circle"></i></div>
                        <!-- product modal details start -->
                        <div class="product-modal">
                            <!-- single product item start -->
                            <div class="single-product-item floating">
                                <a href="#" @click.prevent="goToProduct(selectedProduct)" class="item-img">
                                    <img :src="selectedProduct.image || '/img/logo.png'" />
                                    <span class="sale"></span>
                                </a>
                                <div class="item-info">
                                    <h2><span class="item-title large">@{{selectedProduct.name}}</span></h2>
                                    <div class="info">
                                        <p>Reference: <span>@{{selectedProduct.reference}}</span></p>
                                        <p>Condition: <span>@{{selectedProduct.condition}}</span></p>
                                    </div>
                                    <h3 class="item-price"> @{{selectedProduct.price}} <span class="old-price">$30.51</span>
                                    </h3>
                                    <p class="product-descriptions">@{{selectedProduct.description}}</p>
                                    <div class="cart-plus-minus">
                                        <label>Quantity: </label>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                    </div>
                                    <div class="actions">
                                        <a href="#" @click.prevent="addToCart(selectedProduct)" class="single-action">add
                                            to cart</a>
                                        <a href="#" class="single-action"> <i class="fa fa-envelope"></i> </a>
                                        <a href="#" class="single-action"> <i class="fa fa-print"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                        </a>
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
                        <!-- product modal details end -->
                    </div>
                    <!-- close button end -->
                </div>
            </div>
        </div>
        <!-- Product item details Modal end -->

        <!-- footer area start -->
        <footer class="footer-area mt-40">
            <div class="newsletter-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="newsletter-title">
                                <h2>Sign Up for Newsletters</h2>
                                Get e-mail updates about our latest shop and special offers.
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-7 xs-mt-20">
                            <div class="newsletter-form">
                                <form action="#" method="POST">
                                    <input type="email" placeholder="enter your email">
                                    <button type="submit">subscribe !</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-5 xs-mt-20">
                            <div class="social-icons text-right">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-rss"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-widget-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 xs-mt-40">
                            <div class="widget-title">
                                <h3>about us</h3>
                            </div>
                            <div class="widget-address">
                                <p> <span> address : </span> 123 Main Street, Anytown, CA 12345 USA.</p>
                                <p> <span> Phone : </span> <a href="tel:880123456789"></a> (800) 123 456 789</p>
                                <p> <span> Email : </span> <a href="mailto:demo@yourdomain.com"></a>
                                    demo@yourdomain.com</p>
                                <p> <span> Fax : </span> (800) 123 456 789</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 xs-mt-40">
                            <div class="widget-title">
                                <h3>my account</h3>
                            </div>
                            <div class="widget-menu">
                                <a href="#">my orders</a>
                                <a href="#">my account</a>
                                <a href="#">my credit slips</a>
                                <a href="#">my addresses</a>
                                <a href="#">my personal info</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 sm-mt-40 xs-mt-40">
                            <div class="widget-title">
                                <h3>information</h3>
                            </div>
                            <div class="widget-menu">
                                <a href="#">specials</a>
                                <a href="#">new products</a>
                                <a href="#">best sellers</a>
                                <a href="#">our stores</a>
                                <a href="#">contact us</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 sm-mt-40 xs-mt-40">
                            <div class="widget-title">
                                <h3>categories</h3>
                            </div>
                            <div class="widget-menu">
                                <a href="#">fashion</a>
                                <a href="#">electronics</a>
                                <a href="#">furnitured & decor</a>
                                <a href="#">jewelry & warches</a>
                                <a href="#">health & beauty</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-bottom-area">
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <div class="footer-copyright">
                                Copyright &copy; <a href="#">devitems</a>. All Rights Reserved
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 sm-mt-40 text-right xs-mt-40">
                            <a href="#"><img src="{{asset('themes/frontend/img/payment.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->
    </div>
    @endsection

    @section('js')
    @parent
    {{--
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script> --}}
    <script>
        new Vue({
            el: '#app',
            data: {
                message: 'hellow world',
                categories: [],
                brands: [],
                products: [],
                selectedProduct: {},
                cartProducts: [],
                total: 0,
                brands: []
            },
            created() {
                console.log('Testing console. from Home')
                this.getCartProducts()
                this.getBrands()
            },
            methods: {
                getCartProducts() {
                    if (localStorage.getItem("cart")) {
                        json = JSON.parse(localStorage.getItem("cart"))

                        //var arr = []
                        for (var prop in json) {
                            this.cartProducts.push(json[prop])
                            this.total = this.total + parseFloat(json[prop].price)
                        }
                        console.log(this.cartProducts)
                    }
                },
                getBrands() {
                    let ref = this
                    axios.get(`/api/frontend-home-brands`)
                        .then(function (response) {
                            console.log(response)
                            ref.brands = response.data.data
                        })
                        .catch(function (error) {
                            console.log(error)
                        })
                },
                goToProduct(product) {
                    console.log(product)
                    let url = "{{ route('product', ':id') }}"
                    url = url.replace(':id', product.id)
                    document.location.href = url
                },
                addToCart(product) {

                    if (localStorage.getItem("cart")) {
                        json = JSON.parse(localStorage.getItem("cart"))
                        this.cartProducts = []
                        for (var prop in json) {
                            this.cartProducts.push(json[prop])
                        }


                    }
                    let obj = this.cartProducts.find(x => x.id === product.id)
                    if (obj) {
                        obj.quantity = parseInt(obj.quantity + 1)
                        console.log('already added')

                    }
                    else {
                        this.cartProducts.push(product)
                    }


                    localStorage.setItem("cart", JSON.stringify(this.cartProducts));

                    console.log(this.cartProducts)

                    //this.getCartProducts()
                },
                singleProductModal(product) {
                    console.log(product)
                    this.selectedProduct = product
                },
                removeProduct(product) {
                    if (localStorage.getItem("cart")) {
                        json = JSON.parse(localStorage.getItem("cart"))
                        this.cartProducts = []
                        for (var prop in json) {
                            this.cartProducts.push(json[prop])
                        }
                    }
                    this.cartProducts = this.cartProducts.filter(function (obj) {
                        return obj.id !== product.id
                    })

                    localStorage.setItem("cart", JSON.stringify(this.cartProducts))
                },
            },
        })
    </script>
    @endsection