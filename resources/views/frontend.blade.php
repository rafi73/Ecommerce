<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="../images/favicon.ico">
    <title>RMS</title>


    @section('css')
    <!-- All CSS
        ============================================ -->
    <!-- normalize css
        ============================================ -->
    <link rel="stylesheet" href="{{asset('themes/frontend/css/normalize.css')}}">

    <!-- font-awesome css
        ============================================ -->
    <link rel="stylesheet" href="{{asset('themes/frontend/css/font-awesome.min.css')}}">

    <!-- material css
        ============================================ -->
    <link rel="stylesheet" href="{{asset('themes/frontend/css/material-design-iconic-font.min.css')}}">

    <!-- bootstrap css
        ============================================ -->
    <link rel="stylesheet" href="{{asset('themes/frontend/css/bootstrap.min.css')}}">

    <!-- animate css
        ============================================ -->
    <link rel="stylesheet" href="{{asset('themes/frontend/css/animate.css')}}">

    <!-- TimeCircles css
        ============================================ -->
    <link rel="stylesheet" href="{{asset('themes/frontend/css/TimeCircles.css')}}">

    <!-- owl carousel css
        ============================================ -->
    <link rel="stylesheet" href="{{asset('themes/frontend/css/owl.carousel.css')}}">

    <!-- slicknav css
        ============================================ -->
    <link rel="stylesheet" href="{{asset('themes/frontend/css/slicknav.min.css')}}">

    <!-- nivo-slider css
        ============================================ -->
    <link rel="stylesheet" href="{{asset('themes/frontend/lib/css/nivo-slider.css')}}">
    <link rel="stylesheet" href="{{asset('themes/frontend/lib/css/preview.css')}}">

    <!-- jquery ui css
        ============================================ -->
    <link rel="stylesheet" href="{{asset('themes/frontend/css/jquery-ui.css')}}">

    <!-- style css
        ============================================ -->
    <link rel="stylesheet" href="{{asset('themes/frontend/style.css')}}">

    <!-- responsive css
        ============================================ -->
    <link rel="stylesheet" href="{{asset('themes/frontend/css/responsive.css')}}">

    <!-- user custom css
        ============================================ -->
    <link rel="stylesheet" href="{{asset('themes/frontend/css/custom.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- modernizr-2 js
        ============================================ -->
    <script src="{{asset('themes/frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    @show

    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),])!!};
    </script>
</head>

<body>
    <div id="app">
        @include('partials.header')
        
        @include('partials.breadcrumb')

        <div>
            @yield('content')
        </div>

        @include('partials.singleProductModal')

        @include('partials.footer')
    </div>

    @section('js')

    {{--
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script> --}}

    <script src="{{asset('vue.js')}}"></script>
    <script src="{{asset('axios.js')}}"></script>

    {{--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script> --}}

    <!-- All JS
            =========================================== -->
    <!-- JQuery library
            =========================================== -->
    <script src="{{asset('themes/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!-- Bootstrap js
            =========================================== -->
    <script src="{{asset('themes/frontend/js/bootstrap.min.js')}}"></script>

    <!-- price slider js
            =========================================== -->
    <script src="{{asset('themes/frontend/js/jquery-price-slider.js')}}"></script>

    <!-- TimeCircles js
            =========================================== -->
    <script src="{{asset('themes/frontend/js/TimeCircles.js')}}"></script>

    <!-- easing js
            =========================================== -->
    <script src="{{asset('themes/frontend/js/jquery.easing.js')}}"></script>

    <!-- slicknav js
            =========================================== -->
    <script src="{{asset('themes/frontend/js/jquery.slicknav.min.js')}}"></script>

    <!-- owl carousel js
            =========================================== -->
    <script src="{{asset('themes/frontend/js/owl.carousel.min.js')}}"></script>

    <!-- nivo.slider js
            =========================================== -->
    <script src="{{asset('themes/frontend/lib/js/jquery.nivo.slider.js')}}"></script>
    <script src="{{asset('themes/frontend/lib/home.js')}}"></script>

    <!-- plugins js
            =========================================== -->
    <script src="{{asset('themes/frontend/js/plugins.js')}}"></script>

    <!-- Main js
            =========================================== -->
    
    <script src="{{asset('themes/frontend/js/main.js')}}"></script>

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
                brands: [],
                products: [],
                product: {}
            },
            created() {
                console.log('Testing console. from Home')
                this.getCartProducts()
                //this.getBrands()
                this.getCategories()
                this.getProducts()

                if (window.location.pathname.split('/')[2] == 'product') {
                    let productId = window.location.pathname.split('/')[3]
                    this.getProduct(productId)
                }

            },
            mounted: function () {
                var vm = this
                Vue.nextTick(function () {
                    vm.installOwlCarousel()
                }.bind(vm))
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
                    }
                    else {
                        this.cartProducts.push(product)
                    }

                    localStorage.setItem("cart", JSON.stringify(this.cartProducts))
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
                getCategories() {
                    let ref = this
                    axios.get(`/api/frontend-categories`)
                        .then(function (response) {
                            console.log(response)
                            ref.categories = response.data.data
                        })
                        .catch(function (error) {
                            console.log(error)
                        })
                },
                getProducts() {
                    let ref = this
                    axios.get(`/api/frontend-products`)
                        .then(function (response) {
                            console.log(response)
                            ref.products = response.data.data
                        })
                        .catch(function (error) {
                            console.log(error)
                        })
                },
                getProduct(id) {
                    let ref = this
                    axios.get(`/api/frontend-product/${id}`)
                        .then(function (response) {
                            ref.product = response.data.data
                            console.log(response)
                            //ref.products = response.data.data
                        })
                        .catch(function (error) {
                            console.log(error)
                        })
                },
                installOwlCarousel: function () {
                   
                },
                
            },
            computed: {
                totalPrice() {
                    return this.cartProducts.reduce((acc, item) => acc + parseFloat(item.price * item.quantity), 0);
                }
            }
        })
    </script>
    @show
</body>

</html>