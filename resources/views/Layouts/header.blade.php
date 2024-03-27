<header id="home" class="header">
    <div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
        <div class="container">
            <div class="navbar-header responsive-logo">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{route('home')}}" class="navbar-brand">
                    <img src="{{asset('assets/images/logo.jpg')}}" alt="Unified Vision Capital">
                </a>
            </div>
            <nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" style="height: 1px;">
                <ul class="nav navbar-nav navbar-right responsive-nav">
                    <li><a href="{{route('home')}}" style="color: {{Route::currentRouteName()==='home'? '#f6ab2b': 'black' }}">HOME <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" style="color: {{Route::currentRouteName()==='about_promoter'? '#f6ab2b': 'black' }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('home')}}#aboutus">About us</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('home')}}#mission">Why Us</a></li>
                        </ul>
                    </li>

                    <li><a href="{{route('mutualFunds')}}" style="color: {{Route::currentRouteName()==='mutualFunds'? '#f6ab2b': 'black' }}">MUTUAL FUNDS</a></li>
                    <li><a href="{{route('digitalSignature')}}" style="color: {{Route::currentRouteName()==='digitalSignature'? '#f6ab2b': 'black' }}">DIGITAL SIGNATURES (DSCS)</a></li>
                    <li><a href="{{route('businessSupport')}}" style="color: {{Route::currentRouteName()==='businessSupport'? '#f6ab2b': 'black' }}">BUSINESS SUPPORT</a></li>
                    <li><a href="{{route('dsa')}}" style="color: {{Route::currentRouteName()==='dsa'? '#f6ab2b': 'black' }}">DSA</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CONTACT US <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('home')}}#contact">Contact us</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('home')}}#businessenquiry">Business Enquiry</a></li>
                            <li role="separator" class="divider"></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <!-- HEADING -->
        <h1 class="intro" style=" margin-top: {{Route::currentRouteName()==='home'? '25%': '15%'}}; padding-bottom: {{Route::currentRouteName()==='home'? '0%': '15%'}};">
            <!--Enhance the value for the stakeholders & employers by identifying most apposite patron.-->

            {{Route::currentRouteName()==='home'? 'We Help You Businesses Innovate and Grow': ''}}
        </h1>
        <!-- CALL TO ACTION BUTTONS -->
        <div class="buttons" style="display:{{Route::currentRouteName()==='home'? '': 'none'}}">
            <a href="{{route('home')}}#services" class="btn btn-primary custom-button red-btn">Our Services</a>
            <a href="{{route('home')}}#contact" class="btn btn-primary custom-button green-btn">Contact Us</a>
        </div>
        <!-- 3 SHORT MESSAGE ABOUT COMPANY -->
{{--        <div class="row bottom-message-section">--}}
{{--            <div class="col-lg-4 col-sm-4">--}}
{{--                <div class="short-text">--}}
{{--                    <i class="icon icon-fontawesome-webfont-358"></i> Fixed price for packages--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-4">--}}
{{--                <div class="short-text">--}}
{{--                    <i class="icon-fontawesome-webfont-286"></i> Quality product in time--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-4">--}}
{{--                <div class="short-text">--}}
{{--                    <i class="icon-fontawesome-webfont-347"></i> Satisfaction guranteed--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="slideShow" style="display:{{Route::currentRouteName()==='home'? '': 'none'}}">
            <a id="start-animation" title="Slide show">
                <i class="fa fa-play" aria-hidden="true"></i>
            </a>
            <a id="stop-animation">
                <i class="fa fa-pause" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</header>
