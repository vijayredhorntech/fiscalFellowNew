<!doctype html>
<html ng-app="uvCapitalApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiscal-Fellows</title>
    <!-- =========================
     FAV AND TOUCH ICONS
    ============================== -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo.jpg')}}">
    <!-- =========================
         STYLESHEETS
    ============================== -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.vegas.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/icon-fonts/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pixeden-icons.css')}}">
    <link rel="stylesheet" id="font-awesome-css" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css" media="screen">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/menu.css')}}">
    <link href="{{asset('assets/css/user-interaction-messages.css')}}" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
    <!-- WEBFONT -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700|Homemade+Apple' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/html5shiv.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->
    <!-- JQUERY -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3NN75C99Z9"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

    @stack('styles')


</head>


<body ng-controller="emailController">

@include('Layouts.header')

     @yield('content')


@include('Layouts.footer')



    <a  href="https://wa.me/9878434296" target="_blank" style="position: fixed; right: 20px; bottom: 20px">
        <i class="fa-brands fa-whatsapp" style="font-size: 40px"></i>
    </a>




<!-- / END TEAM DETAILS MODAL POPUP -->
<!-- SCRIPTS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nav.js')}}"></script>
<script src="{{asset('assets/js/jquery.knob.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/smoothscroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.vegas.min.js')}}"></script>
<script src="{{asset('assets/js/scrollReveal.js')}}"></script>
<script src="{{asset('assets/js/jquery.ui.totop.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<!-- AngularJs -->
<script src="{{asset('assets/js/angular/angular.js')}}"></script>
<script src="{{asset('assets/js/angular/angular-button-spinner.js')}}"></script>
<script src="{{asset('assets/js/app/app.js')}}"></script>
<script src="{{asset('assets/js/controllers/emailController.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@stack('scripts')
</body>
</html>
