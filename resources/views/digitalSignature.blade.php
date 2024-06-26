@extends('Layouts.layout')


@section('content')
    <section class="focus" id="aboutus">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header1">
                <!-- SECTION TITLE -->
                <h2 class="dark-text">Digital Signatures (DSC<span style="text-transform: lowercase;">s</span>)</h2>
            </div>
            <!-- / END SECTION HEADER -->
            <!-- 4 FOCUS BOXES -->
            <!-- 3 COLUMNS OF ABOUT US-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; flex-direction: column; gap: 50px">
                    <div class="swiffy-slider slider-nav-autoplay">
                        <ul class="slider-container">
                            <li><img src="{{asset('assets/images/DSC.jpeg')}}" style="width: 100%; height:100%" alt=""></li>
                            <li><img src="{{asset('assets/images/DSC 1.jpg')}}" style="width: 100%;  height:100%" alt=""></li>
                            <li><img src="{{asset('assets/images/DSC 2.png')}}" style="width: 100%;  height:100%" alt=""></li>
                        </ul>

                        <button type="button" class="slider-nav"></button>
                        <button type="button" class="slider-nav slider-nav-next"></button>
                    </div>
                    <form id="digitalSignDesktopForm" action="{{route('dscQuery')}}" method="POST" class="contact-form" >
                        <div class="row">
                            @csrf
                            <h2 class="dark-text ">Contact Us</h2>


                            <div class="col-lg-12 col-sm-12" data-scrollreveal="enter left after 0s over 1s">
                                <input type="text" name="name" placeholder="Your name" style="margin-top: 10px" class="form-control input-box" value="{{old('name')}}">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-12 col-sm-12" data-scrollreveal="enter left after 0s over 1s">
                                <select name="dcsType" style="margin-top: 10px" class="form-control input-box">
                                    <option value="">-- Select type of DSC --</option>
                                    <option value="individualOnly">Class 3 Individual Sign Only</option>
                                    <option value="individualAndEncryption">Class 3 Individual Sign + Encryption</option>
                                    <option value="OrgnameOnly">Class 3 with Org Name Sign only</option>
                                    <option value="OrgnameAndEncryption">Class 3 with Org Name and Encryption</option>
                                </select>


                                @error('dcsType')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-12 col-sm-12" data-scrollreveal="enter left after 0s over 1s">
                                <input type="number" name="number" placeholder="Your Number" style="margin-top: 10px" class="form-control input-box" value="{{old('number')}}">
                                @error('number')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            @if(session('success'))
                                <div class="col-md-9">
                                    <div class="success-msg">
                                        <i class="fa fa-check"></i>
                                        Email sent successfully!
                                    </div>
                                </div>
                            @endif
                            @if(session('error'))
                                <div class="col-md-9">
                                    <div class="success-msg" style="background-color: red; color: white">
                                        <i class="fa fa-xmark"></i>
                                        {{session('error')}}
                                    </div>
                                </div>
                            @endif
                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                            <div class="col-md-12 " style="margin-top: 10px">
                                <div class="g-recaptcha" data-sitekey="6LcpiLYpAAAAADcNHZmh4TfNgXIXl2lMUpKu6ENq"></div>

                            </div>

                            <div class="col-md-12" style="display: flex; align-items: center; padding-left: 0px">
                                <input type="submit" value="Send Message" class="btn btn-primary custom-button red-btn" data-scrollreveal="enter left after 0s over 1s" ></input>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="row">
                        <!-- COLUMN 1 - BRIEF ABOUT THE COMPANY-->
                        <div class="col-md-12" data-scrollreveal="enter bottom after 0s over 1s">
                            <p style="text-align:justify;">
                                Discover the power of secure digital signatures with Fiscal Fellows
                            </p><br />
                            <p style="text-align:justify;">
                                With ever fast changing rather digitisation of life it’s a big challenge to keep ourself safe in the environment where artificial intelligence and machine learning is unfolding new chapters every single day. First step to safety seems to secure one’s identity and here comes the digital signatures to play the most critical and significant role in our lives. Digital Signatures are digital form of your signatures which authenticates the matter with your signatures. Likewise, any electronic or digital transaction or document cannot be an authentic one unless properly secured with your Digital Signatures. Digital Signatures are an extremely secure piece of software created with your biometrics and authentication with PAN and Adhaar. It’s kept inside a pen drive like looking device known as DSC Token and can be used with a password known to you ONLY.
                            </p><br />
                            <p style="text-align:justify;">
                                Currently only Class 3 signatures are prevalent. These are used everywhere, with Highest assurance level, essential for e-tendering, online bidding, and secure transactions. Used for ITR e-filing, EPFO & ESIC filings, MCA filings, e-Tendering, Import Export login with DGFT, IRCTC e-Ticketing and other digital & legal requirements.
                            </p><br />
                            <p style="text-align:justify;">
                                We not only provide Class 3 signatures at very competitive rates but also provide after sales technical support to use them.
                            </p><br />


                            <p style="text-align:justify;">
                                Let’s build a safe society to live happier !!!
                            </p><br />



                            <div>

                                <ol style="padding-top: 1em;">

                                    <li style="text-align: justify; padding-bottom:1em;">
                                         <p style="color: dodgerblue; font-size: 12px"><strong style="color: red">*Note:</strong> Logos of digital Signature Companies shown here are registered with respective brands, we are working with them hence shown here only for reference.</p>

                                    </li>

                                </ol>
                            </div>


                        </div>
                        <!-- / END 4 FOCUS BOXES -->
                        <div class="col-md-12">
                            <form id="digitalSignMobileForm" action="{{route('dscQuery')}}" method="POST" class="contact-form" >
                                <div class="row">
                                    @csrf
                                    <h2 class="dark-text ">Contact Us</h2>


                                    <div class="col-lg-12 col-sm-12" data-scrollreveal="enter left after 0s over 1s">
                                        <input type="text" name="name" placeholder="Your name" style="margin-top: 10px" class="form-control input-box" value="{{old('name')}}">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 col-sm-12" data-scrollreveal="enter left after 0s over 1s">
                                        <select name="dcsType" style="margin-top: 10px" class="form-control input-box">
                                            <option value="">-- Select type of DSC --</option>
                                            <option value="individualOnly">Class 3 Individual Sign Only</option>
                                            <option value="individualAndEncryption">Class 3 Individual Sign + Encryption</option>
                                            <option value="OrgnameOnly">Class 3 with Org Name Sign only</option>
                                            <option value="OrgnameAndEncryption">Class 3 with Org Name and Encryption</option>
                                        </select>


                                        @error('dcsType')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 col-sm-12" data-scrollreveal="enter left after 0s over 1s">
                                        <input type="number" name="number" placeholder="Your Number" style="margin-top: 10px" class="form-control input-box" value="{{old('number')}}">
                                        @error('number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    @if(session('success'))
                                        <div class="col-md-9">
                                            <div class="success-msg">
                                                <i class="fa fa-check"></i>
                                                Email sent successfully!
                                            </div>
                                        </div>
                                    @endif
                                    @if(session('error'))
                                        <div class="col-md-9">
                                            <div class="success-msg" style="background-color: red; color: white">
                                                <i class="fa fa-xmark"></i>
                                                {{session('error')}}
                                            </div>
                                        </div>
                                    @endif
                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                    <div class="col-md-12 " style="margin-top: 10px">
                                        <div class="g-recaptcha" data-sitekey="6LcpiLYpAAAAADcNHZmh4TfNgXIXl2lMUpKu6ENq"></div>

                                    </div>

                                    <div class="col-md-12" style="display: flex; align-items: center; padding-left: 0px">
                                        <input type="submit" value="Send Message" class="btn btn-primary custom-button red-btn" data-scrollreveal="enter left after 0s over 1s" ></input>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>



        </div><!-- / END CONTAINER -->
    </section> <!-- / END ABOUT US SECTION -->
    <!-- =========================

@endsection
