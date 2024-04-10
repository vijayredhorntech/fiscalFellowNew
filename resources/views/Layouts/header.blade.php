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
                    <li><a href="{{route('home')}}#aboutus" style="color: {{Route::currentRouteName()==='home'? '#f6ab2b': 'black' }}; font-weight: 600">ABOUT US</a></li>


                    <li><a href="{{route('mutualFunds')}}" style="color: {{Route::currentRouteName()==='mutualFunds'? '#f6ab2b': 'black' }}; font-weight: 600">MUTUAL FUNDS</a></li>
                    <li><a href="{{route('loans')}}" style="color: {{Route::currentRouteName()==='loans'? '#f6ab2b': 'black' }}; font-weight: 600">LOANS</a></li>
                    <li><a href="{{route('digitalSignature')}}" style="color: {{Route::currentRouteName()==='digitalSignature'? '#f6ab2b': 'black' }}; font-weight: 600" >DIGITAL SIGNATURES (DSCs)</a></li>
                    <li><a href="{{route('businessSupport')}}" style="color: {{Route::currentRouteName()==='businessSupport'? '#f6ab2b': 'black' }}; font-weight: 600">BUSINESS SUPPORT & COMPLIANCE</a></li>
                    <li><a href="{{route('home')}}#contact" style="color: {{Route::currentRouteName()==='dsa'? '#f6ab2b': 'black' }}; font-weight: 600">CONTACT US</a></li>

                </ul>
            </nav>
        </div>
    </div>
    <div class="container" style="display: {{Route::currentRouteName()==='home'? 'block': 'none'}}">




        <h1 class="intro" >
            {{Route::currentRouteName()==='home'? 'Balancing your Finances': ''}}
        </h1>
        <div class="buttons" style="display:{{Route::currentRouteName()==='home'? '': 'none'}}">
            <a href="{{route('home')}}#services" class="btn btn-primary custom-button red-btn">Our Services</a>
            <a href="{{route('home')}}#contact" class="btn btn-primary custom-button green-btn">Contact Us</a>
        </div>
        <div class="slideShow" style="display:{{Route::currentRouteName()==='home'? '': 'none'}};">
            <a id="start-animation" title="Slide show">
                <i class="fa fa-play" aria-hidden="true"></i>
            </a>
            <a id="stop-animation">
                <i class="fa fa-pause" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</header>
