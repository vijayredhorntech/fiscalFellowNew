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
                    <div class="row" >
                        <div class="col-lg-4 col-md-4 col-6" style="margin-top: 10px">
                            <li><a href="{{route('home')}}#aboutus" style="color: {{Route::currentRouteName()==='home'? '#f6ab2b': 'black' }}; text-align: center; display: flex;  align-items: center; gap:3px; font-weight: 600">
                                    <img src="{{asset('assets/images/About Us.png')}}" style="height: 30px; width: 30px; border-radius: 50%" alt="">

                                    ABOUT US</a></li>

                        </div>
                        <div class="col-lg-4 col-md-4 col-6" style="margin-top: 10px">
                            <li><a href="{{route('mutualFunds')}}" style="color: {{Route::currentRouteName()==='mutualFunds'? '#f6ab2b': 'black' }}; display: flex;  align-items: center; gap:3px; font-weight: 600">
                                    <img src="{{asset('assets/images/Mutual Funds.jpg')}}" style="height: 30px; width: 30px; border-radius: 50%" alt="">

                                    MUTUAL FUNDS</a></li>

                        </div>
                        <div class="col-lg-4 col-md-4 col-6" style="margin-top: 10px">
                            <li><a href="{{route('loans')}}" style="color: {{Route::currentRouteName()==='loans'? '#f6ab2b': 'black' }}; display: flex;  align-items: center; gap:3px; font-weight: 600">
                                    <img src="{{asset('assets/images/HOme Loan 3.jpeg')}}" style="height: 30px; width: 30px; border-radius: 50%" alt="">

                                    LOANS</a></li>

                        </div>
                        <div class="col-lg-4 col-md-4 col-6" style="margin-top: 10px">
                            <li><a href="{{route('digitalSignature')}}" style="color: {{Route::currentRouteName()==='digitalSignature'? '#f6ab2b': 'black' }}; display: flex;  align-items: center; gap:3px; font-weight: 600" >
                                    <img src="{{asset('assets/images/DSC.jpeg')}}" style="height: 30px; width: 30px; border-radius: 50%" alt="">
                                    DIGITAL SIGNATURES (DSCs)</a></li>

                        </div>
                        <div class="col-lg-4 col-md-4 col-6" style="margin-top: 10px">
                            <li><a href="{{route('businessSupport')}}" style="color: {{Route::currentRouteName()==='businessSupport'? '#f6ab2b': 'black' }};display: flex;  align-items: center; gap:3px; font-weight: 600">
                                    <img src="{{asset('assets/images/business Support 2.png')}}" style="height: 30px; width: 30px; border-radius: 50%" alt="">

                                    BUSINESS SUPPORT & COMPLIANCE</a></li>

                        </div>
                        <div class="col-lg-4 col-md-4 col-6" style="margin-top: 10px">
                            <li><a href="{{route('home')}}#contact" style="color: {{Route::currentRouteName()==='dsa'? '#f6ab2b': 'black' }}; display: flex;  align-items: center; gap:3px; font-weight: 600">
                                    <img src="{{asset('assets/images/contact us 1.png')}}" style="height: 30px; width: 30px; border-radius: 50%" alt="">

                                    CONTACT US</a></li>

                        </div>

                    </div>









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
            <i class="fa fa-play" aria-hidden="true"></i>
        </a>
        <a id="stop-animation">
            <i class="fa fa-pause" aria-hidden="true"></i>
        </a>
    </div>
</div>

