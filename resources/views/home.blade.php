@extends('frontend')
@section('content')
<div id="app">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- top banner area start -->
    <div class="top-banner-area top-banner-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="close-section-btn"><i class="zmdi zmdi-close"></i></div>
                </div>
            </div>
        </div>
    </div>
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
                                    <li><a href="#">languages <span>English <i class="fa fa-angle-down"></i> </span></a>
                                        <ul>
                                            <li><a href="#"><img src="{{asset('themes/frontend/img/languages/1.jpg')}}" alt=""> English </a></li>
                                            <li><a href="#"><img src="{{asset('themes/frontend/img/languages/2.jpg')}}" alt=""> Arab </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">currenct <span>USD <i class="fa fa-angle-down"></i> </span></a>
                                        <ul>
                                            <li><a href="#">Dollar(USD)</a></li>
                                            <li><a href="#">Euro(EUR)</a></li>
                                        </ul>
                                    </li>
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
                        <a href="index.html" class="logo"> <img src="{{asset('themes/frontend/img/logo.jpg')}}" alt=""> </a>
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
                                        <div  v-bind:key="product.id" v-for="product in cartProducts" class="single-item">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img :src="product.image || '/img/logo.png'" />
                                                </a>
                                            </div>
                                            <div class="item-info">
                                                <a href="#" class="title"> <span> 1 x </span>@{{product.name}}</a>
                                                    <a href="#">S,</a>
                                                    <a href="#"> Yellow</a>
                                                <span>@{{product.price}}</span>
                                            </div>
                                        </div>
                                        <div class="subtotal">
                                            <h3> Shipping: <span>$7.00</span> </h3>
                                        <h3> Total: <span>@{{total}}</span> </h3>
                                        </div>
                                        <div class="checkout">
                                            <a href="#"> check out <i class="fa fa-angle-right"></i> </a>
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
                                    <li class="arrow"> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/1.jpg')}}" alt=""> fashion</a>
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
                                    <li class="arrow"> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/2.jpg')}}" alt="">
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
                                    <li class="arrow"> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/3.jpg')}}" alt="">
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
                                    <li class="arrow"> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/4.jpg')}}" alt="">Accessories</a>
                                        <!-- category sub menu start -->
                                        <ul class="c-sub-menu">
                                            <li> <a href="#">Bags & Belts</a> </li>
                                            <li> <a href="#">Sunglasses & Readers</a> </li>
                                            <li> <a href="#">Socks & Tights</a> </li>
                                            <li> <a href="#">Scarves & Gloves</a> </li>
                                        </ul>
                                        <!-- category sub menu end -->
                                    </li>
                                    <li> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/5.jpg')}}" alt=""> Jewelry & Watches</a>
                                    </li>
                                    <li> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/6.jpg')}}" alt=""> Health & Beauty</a>
                                    </li>
                                    <li> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/7.jpg')}}" alt=""> Books & Office</a>
                                    </li>
                                    <li> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/8.jpg')}}" alt=""> Sport & Outdoor</a>
                                    </li>
                                    <li> <a href="#"> <img src="{{asset('themes/frontend/img/menu-icon/9.jpg')}}" alt=""> Smart phone & Tablets</a>
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
                                <li><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="index.html">home version 1</a></li>
                                        <li><a href="index-2.html">home version 2</a></li>
                                        <li><a href="index-3.html">home version 3</a></li>
                                        <li><a href="index-4.html">home version 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="">shop <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="shop.html">shop default</a></li>
                                        <li><a href="shop-list.html">shop list</a></li>
                                        <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                        <li><a href="product-details.html">shop details</a></li>
                                        <li><a href="product-details-left-sidebar.html">shop details left sidebar</a></li>
                                        <li><a href="product-details-right-sidebar.html">shop details right sidebar</a></li>
                                    </ul>
                                </li>
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
                <li><a href="#electronics" class="smooth"><img src="{{asset('themes/frontend/img/icon/icon_electronics.jpg')}}" alt=""></a></li>
                <li><a href="#fashion" class="smooth"><img src="{{asset('themes/frontend/img/icon/icon_fashion.jpg')}}" alt=""></a></li>
                <li><a href="#furniture" class="smooth"><img src="{{asset('themes/frontend/img/icon/icon_Furniture.jpg')}}" alt=""></a></li>
                <li><a href="#accessories" class="smooth"><img src="{{asset('themes/frontend/img/icon/icon_sunglass.jpg')}}" alt=""></a></li>
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
                    <img src="{{asset('themes/frontend/img/slider/4.jpg')}}" alt="slider_1" />
                    <img src="{{asset('themes/frontend/img/slider/3.jpg')}}" alt="slider_2" />
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
            <div class="row">
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
            </div>
            <!-- banner end -->

            <!-- electronics section heading start -->
            <div class="row" id="electronics">
                <div class="col-lg-9 col-md-12">
                    <div class="section-heading mt-40">
                        <div class="row">
                            <!-- section title start -->
                            <div class="col-md-4 col-sm-5">
                                <h2 class="blue small-icon-size"> <img src="{{asset('themes/frontend/img/icon/icon_electronics.jpg')}}"
                                        alt="">
                                    electronics</h2>
                            </div>
                            <!-- section title end -->
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <!-- tab menu start -->
                                <ul class="product-tab">
                                    <li class="active"><a data-toggle="tab" href="#tab-1"> bestseller </a></li>
                                    <li><a data-toggle="tab" href="#tab-2"> featured </a></li>
                                    <li><a data-toggle="tab" href="#tab-3"> speical </a></li>
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
                <div class="col-lg-9 col-md-12">
                    <div class="tab-content mt-30">
                        <div class="tab-pane active fade in" id="tab-1">
                            <div class="multiple-items">
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/2.jpg')}}" alt="">
                                        <span class="sale"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Samsung galaxy J5
                                                Dual Sim Unlocked Cell...</a></h2>
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
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                            </a>
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                            <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal">
                                                <i class="zmdi zmdi-search"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product item end -->

                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/12.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand
                                                Mens Sports Watches...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $27.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/9.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Customized 19Inch
                                                Computer Screen...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $30.58</h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/16.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6''
                                                LapTop 1920x1080 RAM 4G</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $18.98 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/17.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/18.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2">
                            <div class="multiple-items">
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/12.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Samsung galaxy J5
                                                Dual Sim Unlocked Cell...</a></h2>
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
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                            </a>
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                            <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal">
                                                <i class="zmdi zmdi-search"></i> </a>
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
                                        <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand
                                                Mens Sports Watches...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $27.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/17.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Customized 19Inch
                                                Computer Screen...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $30.58</h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/19.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6''
                                                LapTop 1920x1080 RAM 4G</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $18.98 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/9.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/16.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/18.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/12.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/20.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-3">
                            <div class="multiple-items">
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/20.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Samsung galaxy J5
                                                Dual Sim Unlocked Cell...</a></h2>
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
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                            </a>
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                            <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal">
                                                <i class="zmdi zmdi-search"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product item end -->

                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/16.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand
                                                Mens Sports Watches...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $27.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/13.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Customized 19Inch
                                                Computer Screen...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $30.58</h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/11.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6''
                                                LapTop 1920x1080 RAM 4G</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $18.98 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/7.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/5.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 hidden-md hidden-sm hidden-xs mt-minus-53">
                    <a href="#" class="banner-hover">
                        <img src="{{asset('themes/frontend/img/banner/banner15.jpg')}}" alt="">
                    </a>
                </div>
            </div>
            <!-- electronics items end -->

            <!-- banner start -->
            <div class="row mt-40">
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
            </div>
            <!-- banner end -->

            <!-- fashion section heading start -->
            <div class="row" id="fashion">
                <div class="col-lg-9 col-lg-offset-3 col-md-12">
                    <div class="section-heading mt-40">
                        <div class="row">
                            <!-- section title start -->
                            <div class="col-md-4 col-sm-5">
                                <h2 class="sweet small-icon-size"> <img src="{{asset('themes/frontend/img/icon/icon_fashion.jpg')}}"
                                        alt="">
                                    fashion</h2>
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
                        <img src="{{asset('themes/frontend/img/banner/banner16.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="tab-content mt-30">
                        <div class="tab-pane active fade in" id="tab-4">
                            <div class="multiple-items">
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/21.jpg')}}" alt="">
                                        <span class="sale"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Samsung galaxy J5
                                                Dual Sim Unlocked Cell...</a></h2>
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
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                            </a>
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                            <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal">
                                                <i class="zmdi zmdi-search"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product item end -->

                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/23.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand
                                                Mens Sports Watches...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $27.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/24.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Customized 19Inch
                                                Computer Screen...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $30.58</h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/27.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6''
                                                LapTop 1920x1080 RAM 4G</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $18.98 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/28.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/29.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-5">
                            <div class="multiple-items">
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/28.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Samsung galaxy J5
                                                Dual Sim Unlocked Cell...</a></h2>
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
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                            </a>
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                            <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal">
                                                <i class="zmdi zmdi-search"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product item end -->

                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/24.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand
                                                Mens Sports Watches...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $27.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/26.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Customized 19Inch
                                                Computer Screen...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $30.58</h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/29.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6''
                                                LapTop 1920x1080 RAM 4G</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $18.98 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/23.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/31.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/32.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/28.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/25.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-6">
                            <div class="multiple-items">
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/33.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Samsung galaxy J5
                                                Dual Sim Unlocked Cell...</a></h2>
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
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                            </a>
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                            <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal">
                                                <i class="zmdi zmdi-search"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product item end -->

                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/34.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand
                                                Mens Sports Watches...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $27.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/31.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Customized 19Inch
                                                Computer Screen...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $30.58</h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/26.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6''
                                                LapTop 1920x1080 RAM 4G</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $18.98 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/23.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/27.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fashion items end -->

            <!-- banner start -->
            <div class="row mt-40">
                <div class="col-sm-4">
                    <a href="#" class="banner-hover">
                        <img src="{{asset('themes/frontend/img/banner/banner5.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-sm-4 xs-mt-20">
                    <a href="#" class="banner-hover">
                        <img src="{{asset('themes/frontend/img/banner/banner6.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-sm-4 xs-mt-20">
                    <a href="#" class="banner-hover">
                        <img src="{{asset('themes/frontend/img/banner/banner7.jpg')}}" alt="">
                    </a>
                </div>
            </div>
            <!-- banner end -->

            <!-- Furnitured section heading start -->
            <div class="row" id="furniture">
                <div class="col-md-12">
                    <div class="section-heading mt-40">
                        <div class="row">
                            <!-- section title start -->
                            <div class="col-md-4 col-sm-5">
                                <h2 class="brown small-icon-size"> <img src="{{asset('themes/frontend/img/icon/icon_Furniture.jpg')}}"
                                        alt="">
                                    Furnitured & Decor</h2>
                            </div>
                            <!-- section title end -->
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <!-- tab menu start -->
                                <ul class="product-tab">
                                    <li class="active"><a data-toggle="tab" href="#tab-7"> bestseller </a></li>
                                    <li><a data-toggle="tab" href="#tab-8"> featured </a></li>
                                    <li><a data-toggle="tab" href="#tab-9"> speical </a></li>
                                </ul>
                                <!-- tab menu end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Furnitured section heading end -->

            <!-- Furnitured items start -->
            <div class="row">
                <div class="col-12-8 col-lg-9">
                    <div class="tab-content mt-30">
                        <div class="tab-pane active fade in" id="tab-7">
                            <div class="multiple-items">
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/35.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Samsung galaxy J5
                                                Dual Sim Unlocked Cell...</a></h2>
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
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                            </a>
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                            <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal">
                                                <i class="zmdi zmdi-search"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product item end -->

                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/36.jpg')}}" alt="">
                                        <span class="sale"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand
                                                Mens Sports Watches...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $27.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/37.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Customized 19Inch
                                                Computer Screen...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $30.58</h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/38.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6''
                                                LapTop 1920x1080 RAM 4G</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $18.98 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/39.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/3.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-8">
                            <div class="multiple-items">
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/39.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Samsung galaxy J5
                                                Dual Sim Unlocked Cell...</a></h2>
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
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                            </a>
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                            <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal">
                                                <i class="zmdi zmdi-search"></i> </a>
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
                                        <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand
                                                Mens Sports Watches...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $27.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/3.jpg')}}" alt="">
                                        <span class="sale"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Customized 19Inch
                                                Computer Screen...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $30.58</h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/38.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6''
                                                LapTop 1920x1080 RAM 4G</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $18.98 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/35.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/36.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/43.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/44.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-9">
                            <div class="multiple-items">
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/44.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Samsung galaxy J5
                                                Dual Sim Unlocked Cell...</a></h2>
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
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                            </a>
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                            <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal">
                                                <i class="zmdi zmdi-search"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product item end -->

                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/43.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand
                                                Mens Sports Watches...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $27.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/38.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Customized 19Inch
                                                Computer Screen...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $30.58</h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/11.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6''
                                                LapTop 1920x1080 RAM 4G</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $18.98 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/39.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/40.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 hidden-md hidden-sm hidden-xs mt-minus-53">
                    <a href="#" class="banner-hover">
                        <img src="{{asset('themes/frontend/img/banner/banner17.jpg')}}" alt="">
                    </a>
                </div>
            </div>
            <!-- Furnitured items end -->

            <!-- banner start -->
            <div class="row mt-40">
                <div class="col-sm-6">
                    <a href="#" class="banner-hover">
                        <img src="{{asset('themes/frontend/img/banner/banner9.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-sm-6 xs-mt-20">
                    <a href="#" class="banner-hover">
                        <img src="{{asset('themes/frontend/img/banner/banner10.jpg')}}" alt="">
                    </a>
                </div>
            </div>
            <!-- banner end -->

            <!-- accessories section heading start -->
            <div class="row" id="accessories">
                <div class="col-lg-9 col-lg-offset-3 col-md-12">
                    <div class="section-heading mt-40">
                        <div class="row">
                            <!-- section title start -->
                            <div class="col-md-4 col-sm-5">
                                <h2 class="green small-icon-size"> <img src="{{asset('themes/frontend/img/icon/icon_sunglass.jpg')}}"
                                        alt="">
                                    Accessories</h2>
                            </div>
                            <!-- section title end -->
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <!-- tab menu start -->
                                <ul class="product-tab">
                                    <li class="active"><a data-toggle="tab" href="#tab-10"> bestseller </a></li>
                                    <li><a data-toggle="tab" href="#tab-11"> featured </a></li>
                                    <li><a data-toggle="tab" href="#tab-12"> speical </a></li>
                                </ul>
                                <!-- tab menu end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- accessories section heading end -->

            <!-- Accessories items start -->
            <div class="row">
                <div class="col-lg-3 hidden-md hidden-sm hidden-xs mt-minus-53">
                    <a href="#" class="banner-hover">
                        <img src="{{asset('themes/frontend/img/banner/banner18.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="tab-content mt-30">
                        <div class="tab-pane active fade in" id="tab-10">
                            <div class="multiple-items">
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/45.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Samsung galaxy J5
                                                Dual Sim Unlocked Cell...</a></h2>
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
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                            </a>
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                            <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal">
                                                <i class="zmdi zmdi-search"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product item end -->

                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/46.jpg')}}" alt="">
                                        <span class="sale"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand
                                                Mens Sports Watches...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $27.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/48.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Customized 19Inch
                                                Computer Screen...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $30.58</h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/50.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6''
                                                LapTop 1920x1080 RAM 4G</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $18.98 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/51.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-11">
                            <div class="multiple-items">
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/49.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Samsung galaxy J5
                                                Dual Sim Unlocked Cell...</a></h2>
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
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                            </a>
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                            <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal">
                                                <i class="zmdi zmdi-search"></i> </a>
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
                                        <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand
                                                Mens Sports Watches...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $27.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/46.jpg')}}" alt="">
                                        <span class="sale"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Customized 19Inch
                                                Computer Screen...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $30.58</h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/48.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6''
                                                LapTop 1920x1080 RAM 4G</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $18.98 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/52.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/50.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/51.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Original New Samsung
                                                Galaxy On7 G6000G6100...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $28.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/45.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Blackview A8 mobile
                                                phone MTK6580 5.0" IPS HD</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $32.08 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-12">
                            <div class="multiple-items">
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/4.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Samsung galaxy J5
                                                Dual Sim Unlocked Cell...</a></h2>
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
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i>
                                            </a>
                                            <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                            <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal">
                                                <i class="zmdi zmdi-search"></i> </a>
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
                                        <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand
                                                Mens Sports Watches...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $27.00 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/47.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Customized 19Inch
                                                Computer Screen...</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $30.58</h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                                <!-- single product item start -->
                                <div class="single-product-item">
                                    <a href="product-details.html" class="item-img">
                                        <img src="{{asset('themes/frontend/img/products/50.jpg')}}" alt="">
                                        <span class="new"></span>
                                    </a>
                                    <div class="item-info text-center">
                                        <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6''
                                                LapTop 1920x1080 RAM 4G</a></h2>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="item-price"> $18.98 </h3>
                                        <div class="actions">
                                            <a href="#" class="single-action">add to cart</a>
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
                                <!-- single product item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accessories items end -->

            <!-- category section heading start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading mt-40">
                        <div class="row">
                            <!-- section title start -->
                            <div class="col-md-4 col-lg-3">
                                <h2> <img src="{{asset('themes/frontend/img/icon/icon_categories.png')}}" alt=""> Our
                                    Categories</h2>
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
                        <div class="box-item">
                            <!-- single box item start -->
                            <div class="single-box-item">
                                <div class="box-item-img">
                                    <a href="#"><img src="{{asset('themes/frontend/img/products/53.jpg')}}" alt=""></a>
                                </div>
                                <div class="box-content">
                                    <a href="#">television</a>
                                    <ul class="item-list">
                                        <li><a href="shop.html" target="_blank">All-in-One Computers</a></li>
                                        <li><a href="shop.html" target="_blank">towers only</a></li>
                                        <li><a href="shop.html" target="_blank">Refurbished Desktops</a></li>
                                        <li><a href="shop.html" target="_blank">Gaming Desktops</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- single box item end -->

                            <!-- single box item start -->
                            <div class="single-box-item">
                                <div class="box-item-img">
                                    <a href="#"><img src="{{asset('themes/frontend/img/products/56.jpg')}}" alt=""></a>
                                </div>
                                <div class="box-content">
                                    <a href="#" class="title">television</a>
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
                        <div class="box-item">
                            <!-- single box item start -->
                            <div class="single-box-item">
                                <div class="box-item-img">
                                    <a href="#"><img src="{{asset('themes/frontend/img/products/54.jpg')}}" alt=""></a>
                                </div>
                                <div class="box-content">
                                    <a href="#">television</a>
                                    <ul class="item-list">
                                        <li><a href="shop.html" target="_blank">All-in-One Computers</a></li>
                                        <li><a href="shop.html" target="_blank">towers only</a></li>
                                        <li><a href="shop.html" target="_blank">Refurbished Desktops</a></li>
                                        <li><a href="shop.html" target="_blank">Gaming Desktops</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- single box item end -->

                            <!-- single box item start -->
                            <div class="single-box-item">
                                <div class="box-item-img">
                                    <a href="#"><img src="{{asset('themes/frontend/img/products/57.jpg')}}" alt=""></a>
                                </div>
                                <div class="box-content">
                                    <a href="#" class="title">television</a>
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
                        <div class="box-item">
                            <!-- single box item start -->
                            <div class="single-box-item">
                                <div class="box-item-img">
                                    <a href="#"><img src="{{asset('themes/frontend/img/products/55.jpg')}}" alt=""></a>
                                </div>
                                <div class="box-content">
                                    <a href="#">television</a>
                                    <ul class="item-list">
                                        <li><a href="shop.html" target="_blank">All-in-One Computers</a></li>
                                        <li><a href="shop.html" target="_blank">towers only</a></li>
                                        <li><a href="shop.html" target="_blank">Refurbished Desktops</a></li>
                                        <li><a href="shop.html" target="_blank">Gaming Desktops</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- single box item end -->

                            <!-- single box item start -->
                            <div class="single-box-item">
                                <div class="box-item-img">
                                    <a href="#"><img src="{{asset('themes/frontend/img/products/58.jpg')}}" alt=""></a>
                                </div>
                                <div class="box-content">
                                    <a href="#" class="title">television</a>
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
                        <div class="box-item">
                            <!-- single box item start -->
                            <div class="single-box-item">
                                <div class="box-item-img">
                                    <a href="#"><img src="{{asset('themes/frontend/img/products/59.jpg')}}" alt=""></a>
                                </div>
                                <div class="box-content">
                                    <a href="#">television</a>
                                    <ul class="item-list">
                                        <li><a href="shop.html" target="_blank">All-in-One Computers</a></li>
                                        <li><a href="shop.html" target="_blank">towers only</a></li>
                                        <li><a href="shop.html" target="_blank">Refurbished Desktops</a></li>
                                        <li><a href="shop.html" target="_blank">Gaming Desktops</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- single box item end -->

                            <!-- single box item start -->
                            <div class="single-box-item">
                                <div class="box-item-img">
                                    <a href="#"><img src="{{asset('themes/frontend/img/products/60.jpg')}}" alt=""></a>
                                </div>
                                <div class="box-content">
                                    <a href="#" class="title">television</a>
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

            <!-- blog area start -->
            <div class="row mt-40">
                <div class="col-md-8 col-sm-6">
                    <!-- section title start -->
                    <div class="section-heading">
                        <h2> <img src="{{asset('themes/frontend/img/icon/icon_title_blog.png')}}" alt=""> From the blog</h2>
                    </div>
                    <!-- section title start -->

                    <!-- blog area start -->
                    <div class="blog-posts-slider mt-30">
                        <!-- single blog post start -->
                        <div class="single-blog">
                            <a href="blog-details.html" class="blog-img">
                                <img src="{{asset('themes/frontend/img/blog/1.jpg')}}" alt="blog image">
                            </a>
                            <div class="blog-content">
                                <div class="blog-info">
                                    <div class="date">28 <span>dec</span> </div>
                                    <a href="blog-details.html">What is Bootstrap? – The History and the Hype</a>
                                    <p class="view-count"><i class="fa fa-eye"></i>views(47)</p>
                                </div>
                                <p class="blog-description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum...
                                </p>
                            </div>
                        </div>
                        <!-- single blog post end -->

                        <!-- single blog post start -->
                        <div class="single-blog">
                            <a href="blog-details.html" class="blog-img">
                                <img src="{{asset('themes/frontend/img/blog/2.jpg')}}" alt="blog image">
                            </a>
                            <div class="blog-content">
                                <div class="blog-info">
                                    <div class="date">28 <span>aug</span> </div>
                                    <a href="blog-details.html">What is Bootstrap? – The History and the Hype</a>
                                    <p class="view-count"><i class="fa fa-eye"></i>views(47)</p>
                                </div>
                                <p class="blog-description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum...
                                </p>
                            </div>
                        </div>
                        <!-- single blog post end -->
                    </div>
                    <!-- blog area end -->
                </div>
                <div class="col-md-4 col-sm-6 xs-mt-40">
                    <!-- section title start -->
                    <div class="section-heading">
                        <h2> <img src="{{asset('themes/frontend/img/icon/icon_title_logo.png')}}" alt=""> Our Brands</h2>
                    </div>
                    <!-- section title start -->
                    <!-- clients logo start -->
                    <div class="clients-logo mt-30">
                        <div class="logos">
                            <a href="#">
                                <img src="{{asset('themes/frontend/img/client-logo/1.jpg')}}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{asset('themes/frontend/img/client-logo/2.jpg')}}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{asset('themes/frontend/img/client-logo/3.jpg')}}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{asset('themes/frontend/img/client-logo/4.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="logos">
                            <a href="#">
                                <img src="{{asset('themes/frontend/img/client-logo/5.jpg')}}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{asset('themes/frontend/img/client-logo/6.jpg')}}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{asset('themes/frontend/img/client-logo/7.jpg')}}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{asset('themes/frontend/img/client-logo/8.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- clients logo end -->
                </div>
            </div>
            <!-- blog area end -->

            <!-- info area start -->
            <div class="row mt-10">
                <div class="col-sm-4">
                    <div class="single-info">
                        <div class="img">
                            <img src="{{asset('themes/frontend/img/info/info1.png')}}" alt="">
                            <img src="{{asset('themes/frontend/img/info/info1_hover.png')}}" alt="">
                        </div>
                        <div class="info-content">
                            <h3>Free Fast Delivery</h3>
                            Free shipping on all Uk order
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-info">
                        <div class="img">
                            <img src="{{asset('themes/frontend/img/info/info2.png')}}" alt="">
                            <img src="{{asset('themes/frontend/img/info/info2_hover.png')}}" alt="">
                        </div>
                        <div class="info-content">
                            <h3>Money Guarantee</h3>
                            30 days money back guarantee
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-info">
                        <div class="img">
                            <img src="{{asset('themes/frontend/img/info/info3.png')}}" alt="">
                            <img src="{{asset('themes/frontend/img/info/info3_hover.png')}}" alt="">
                        </div>
                        <div class="info-content">
                            <h3>24/7 Support</h3>
                            Support online 24 hours day
                        </div>
                    </div>
                </div>
            </div>
            <!-- info area end -->

        </div>
        <!-- products area end -->
    </div>
        
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
            cartProducts : [],
            total: 0
        },
        created() {
            console.log('Testing console. from Home')
            this.getCartProducts()
        },
        methods:{
            getCartProducts(){
                if( localStorage.getItem("cart")){
                    json = JSON.parse(localStorage.getItem("cart"))

                    //var arr = []
                    for (var prop in json) {
                        this.cartProducts.push(json[prop])
                        this.total = this.total + parseFloat(json[prop].price)
                    }
                    console.log(this.cartProducts)
                }
            }
        },
    })
    </script>
@endsection