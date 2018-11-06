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
    <div>
        @yield('content')
    </div>

    @section('js')
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script> --}}

    <script src="{{asset('vue.js')}}"></script>
    <script src="{{asset('axios.js')}}"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script> --}}

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

    
    @show
</body>

</html>