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

    <style>
        .tollFree
        {
            position: fixed;
            right: 20px;
            bottom: 80px;
            width: 40px;
            overflow:hidden;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: 0.5s;
        }
        .tollFree:hover {
            width: 120px;
            transition: 0.5s;
        }

        .tollFreeNumber
        {
            height: 0px;
            overflow: hidden;
            position: fixed ;
            left: 0px;
            bottom: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: center;
            justify-content: center;
            width: 100%;
            transition: 0.5s;

        }
    </style>


</head>


<body ng-controller="emailController">

@include('Layouts.header')
     @yield('content')
@include('Layouts.footer')



    <a  href="https://wa.me/9878434296" target="_blank" style="position: fixed; right: 20px; bottom: 20px">
        <i class="fa-brands fa-whatsapp" style="font-size: 40px; color: #34b647"></i>
    </a>

    <div class="tollFree" onclick="document.querySelector('.tollFreeNumber').style.height = '130px';">
        <img src="{{asset('assets/images/tollfree.png')}}" alt="" style="width: 40px">
        <div style="display: flex; flex-direction: column; justify-content: center; color: #f6ab2b">
            <span style="font-weight: bold; font-size: 15px; margin-left: 10px; line-height: 10px"> Toll&nbspFree</span>
            <span style="font-weight: bold; font-size: 15px; margin-left: 10px"> Number</span>
        </div>
    </div>

<div class="tollFreeNumber">
    <a href="tel:18008896296" target="_blank">
        <div style="width: 350px; height: max-content; padding: 16px 5px; background-color: #77b0aa; border-radius: 10px ; display: flex; justify-content: center; align-items: center">
            <i class="fa fa-phone" style="color: black; font-weight: bold; font-size: 20px; margin-right: 10px"></i>
            <span style="color: black; font-weight: bold; font-size: 20px">1800 88 96296</span>
        </div>
    </a>
        <div style="cursor: pointer; width: 350px; height: max-content; padding: 16px 5px; background-color: #77b0aa; border-radius: 10px ; display: flex; justify-content: center; align-items: center"
             onclick=" document.querySelector('.tollFreeNumber').style.height = '0px';">
            <span style="color: black; font-weight: bold; font-size: 20px">Cancle</span>
        </div>
</div>




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
