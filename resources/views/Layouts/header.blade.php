<header id="home" class="header">
    <div id="main-nav" class="navbar navbar-inverse bs-docs-nav fixed" role="banner">
        <div class="container" style="width: 98%">
            <div class="navbar-header responsive-logo">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{route('home')}}" class="navbar-brand" style="display: flex; align-items: center; gap: 5px">
                    <img src="{{asset('assets/images/logo.jpg')}}" alt="Unified Vision Capital">
                    <span class="brandName">Fiscal Fellows</span>
                </a>
            </div>
            <nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" style="height: 1px;">
                <ul class="nav navbar-nav navbar-right responsive-nav">
                    <li><a href="{{route('home')}}#aboutus" style="color: {{Route::currentRouteName()==='home'? 'white': 'black' }}; font-weight: 600">
                            <img src="{{asset('assets/images/About Us.png')}}" style="height: 30px; width: 30px; border-radius: 50%" alt="">
                            ABOUT US</a></li>
                    <li><a href="{{route('mutualFunds')}}" style="color: {{Route::currentRouteName()==='mutualFunds'? 'white': 'black' }}; font-weight: 600">
                            <img src="{{asset('assets/images/Mutual Funds.jpg')}}" style="height: 30px; width: 30px; border-radius: 50%" alt="">
                            MUTUAL FUNDS</a></li>
                    <li><a href="{{route('loans')}}" style="color: {{Route::currentRouteName()==='loans'? 'white': 'black' }}; font-weight: 600">
                            <img src="{{asset('assets/images/HOme Loan 3.jpeg')}}" style="height: 30px; width: 30px; border-radius: 50%" alt="">
                            LOANS</a></li>
                    <li><a href="{{route('digitalSignature')}}" style="color: {{Route::currentRouteName()==='digitalSignature'? 'white': 'black' }}; font-weight: 600" >
                            <img src="{{asset('assets/images/DSC.jpeg')}}" style="height: 30px; width: 30px; border-radius: 50%" alt="">
                            <span id="digitalSignatureText">DSCs</span>
                        </a></li>
                    <li><a href="{{route('businessSupport')}}" style="color: {{Route::currentRouteName()==='businessSupport'? 'white': 'black' }}; font-weight: 600">
                            <img src="{{asset('assets/images/business Support 2.png')}}" style="height: 30px; width: 30px; border-radius: 50%" alt="">
                            <span id="businessSupportText">BUSINESS SUPPORT</span>
{{--                            <script>--}}
{{--                                // Function to handle screen size change--}}
{{--                                function handleScreenSizeChange() {--}}
{{--                                    if (window.innerWidth < 768) {--}}
{{--                                        // If screen size is less than 768, remove <br> tag--}}
{{--                                        document.getElementById('digitalSignatureText').innerHTML = 'DIGITAL SIGNATURES (DSCs)';--}}
{{--                                        document.getElementById('businessSupportText').innerHTML = 'BUSINESS SETUP, SUPPORT & COMPLIANCE';--}}
{{--                                    } else {--}}
{{--                                        // If screen size is 768 or greater, add <br> tag--}}
{{--                                        document.getElementById('digitalSignatureText').innerHTML = 'DIGITAL <br> SIGNATURES (DSCs)';--}}
{{--                                        document.getElementById('businessSupportText').innerHTML = 'BUSINESS SETUP, <br> SUPPORT & COMPLIANCE';--}}
{{--                                    }--}}
{{--                                }--}}

{{--                                // Call the function initially--}}
{{--                                handleScreenSizeChange();--}}

{{--                                // Add event listener for screen resize--}}
{{--                                window.addEventListener('resize', handleScreenSizeChange);--}}
{{--                            </script>--}}
                        </a></li>
                    <li><a href="{{route('home')}}#contactUs" style="color: {{Route::currentRouteName()==='dsa'? 'white': 'black' }}; font-weight: 600">
                            <img src="{{asset('assets/images/contact us 1.png')}}" style="height: 30px; width: 30px; border-radius: 50%" alt="">
                            CONTACT US</a></li>

                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="container" style="  background: rgba(0, 0, 0, 0.5); width:100%; display:{{Route::currentRouteName()==='home'? 'block': 'none'}}">




    <h1 class="intro" >
        {{Route::currentRouteName()==='home'? 'Balancing your Finances': ''}}
    </h1>
    <div class="buttons" style="display:{{Route::currentRouteName()==='home'? '': 'none'}}">
        <a href="{{route('home')}}#services" class="btn btn-primary custom-button red-btn">Our Services</a>
        <a href="{{route('home')}}#contact" class="btn btn-primary custom-button green-btn">Contact Us</a>
    </div>
    <div class="slideShow" style="display:{{Route::currentRouteName()==='home'? '': 'none'}};">
        <a id="start-animation" title="Slide show">
            <i class="fa fa-play" aria-hidden="true" style="color: white"></i>
        </a>
        <a id="stop-animation">
            <i class="fa fa-pause" aria-hidden="true" style="color: white"></i>
        </a>
    </div>
</div>

