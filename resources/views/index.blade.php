@extends('Layouts.layout')


@section('content')

    <!-- =========================
       ABOUT US SECTION
    ============================== -->
    <section class="focus" id="aboutus">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header">
                <!-- SECTION TITLE -->
                <h2 class="dark-text">About Us</h2>
                <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                <!--<h6>
                    We design &amp; develop qaulity products to help small &amp; medium level business.

                </h6>-->
            </div>
            <!-- / END SECTION HEADER -->
            <!-- 4 FOCUS BOXES -->
            <!-- 3 COLUMNS OF ABOUT US-->
            <div class="row">
                <!-- COLUMN 1 - BRIEF ABOUT THE COMPANY-->
                <div class="col-md-12" data-scrollreveal="enter bottom after 0s over 1s">
                    <p style="text-align:justify;">
                        At Fiscal Fellows, we are committed to empowering individuals and businesses with comprehensive financial solutions. Our aim is to simplify complex processes, enhance convenience, and foster long-term growth for our clients. Here’s a glimpse into what we offer
                        <br /><br />
                    </p>
                    <p style="text-align:justify;">
                        Please <a href="{{route('about_promoter')}}" target="_blank" style="font-weight:600; color:blue; text-decoration:underline;">Click here</a> to know about the promoter.
                        <br /><br />
                    </p>
                    <p style="text-align:left;">
                        <i class="rt-icon-banknote"></i>
                        <!--<a href="pdf/unified_vision_capital_corporate.pdf" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image14','','images/download1.jpg',1)">
                            <img id="Img1" src="images/download.jpg" width="290" height="23" border="0">
                        </a>-->
                    </p>
                </div>
                <!-- / END 4 FOCUS BOXES -->
            </div>
        </div><!-- / END CONTAINER -->
    </section> <!-- / END ABOUT US SECTION -->

    <section class="packages" id="services">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header">
                <!-- SECTION TITLE -->
                <h2 class="white-text">Our Businesses</h2>
                <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                <!--<h6 class="white-text">
                    Check our awesome team memebers who always work hard to provide quality products.
                </h6>-->
            </div>
            <!-- / END SECTION HEADER -->
            <!-- TEAM MEMBERS -->
            <div class="row" data-scrollreveal="enter left after 0s over 2s">
                <!-- MEMBER -->
                <div class="col-lg-3 col-sm-3">
                    <div class="team-member2">
                        <div class="row">
                            <div class="col-lg-6">
                                <figure class="profile-pic">
                                    <img src="{{asset('assets/images/image_4.jpg')}}" alt=""> <!-- MEMBER PROFILE PIC -->
                                </figure>
                            </div>
                            <div class="col-lg-6">
                                <div class="member-details">
                                    <h5 class="dark-text">Mutual Funds</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="details" style="min-height: 200px">
                                <p>
                                    Unlock the potential of your investments with our expert guidance in mutual funds. We provide personalized advice and tailored investment strategies to help you achieve your financial goals efficiently.
                                </p>
                            </div>
                            <div style="text-align:center">
                                <a href="{{route('mutualFunds')}}" class="btn btn-primary custom-button2 red-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div><!-- / END MEMBER -->
                <div class="col-lg-3 col-sm-3">
                    <div class="team-member2">
                        <div class="row">
                            <div class="col-lg-6">
                                <figure class="profile-pic">
                                    <img src="{{asset('assets/images/image_5.jpg')}}" alt=""> <!-- MEMBER PROFILE PIC -->
                                </figure>
                            </div>
                            <div class="col-lg-6">
                                <div class="member-details">
                                    <h5 class="dark-text">Digital Signature</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="details" style="min-height: 200px" style="padding-left:1.5em;">
                                <p>
                                    Streamline your document signing process with our digital signature solutions. Enjoy the convenience of electronic signatures, eliminating the need for paperwork and enhancing the security of your transactions.
                                </p>
                            </div>
                            <div style="text-align:center">
                                <a href="{{route('digitalSignature')}}" class="btn btn-primary custom-button2 red-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div><!-- / END MEMBER -->
                <div class="col-lg-3 col-sm-3">
                    <div class="team-member2">
                        <div class="row">
                            <div class="col-lg-6">
                                <figure class="profile-pic">
                                    <img src="{{asset('assets/images/image_3.jpg')}}" alt=""> <!-- MEMBER PROFILE PIC -->
                                </figure>
                            </div>
                            <div class="col-lg-6">
                                <div class="member-details">
                                    <h5 class="dark-text">Business Setup</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="details" style="min-height: 200px">Start your entrepreneurial journey on the right foot with our comprehensive business setup services. From registration and licensing to compliance and advisory, we provide end-to-end support to help you establish and grow your business with confidenc</div>
                            <div style="text-align:center">
                                <a href="{{route('businessSupport')}}" class="btn btn-primary custom-button2 red-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div><!-- / END MEMBER -->
                <div class="col-lg-3 col-sm-3">
                    <div class="team-member2">
                        <div class="row">
                            <div class="col-lg-6">
                                <figure class="profile-pic">
                                    <img src="{{asset('assets/images/image_2.jpg')}}" alt=""> <!-- MEMBER PROFILE PIC -->
                                </figure>
                            </div>
                            <div class="col-lg-6">
                                <div class="member-details">
                                    <h5 class="dark-text">Support Services</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="details" style="min-height: 200px">Our dedicated support team is here to assist you every step of the way. Whether you need assistance with financial planning, loan applications, or any other aspect of your financial journey, we're committed to providing timely and reliable support to ensure your success.</div>
                            <div style="text-align:center">
                                <a href="{{route('dsa')}}" class="btn btn-primary custom-button2 red-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div><!-- / END MEMBER -->
            </div> <!-- / END TEAM MEMBER LIST -->
        </div> <!-- / END CONTAINER -->
    </section> <!-- / END SERVICES SECTION  -->

    <section class="focus" id="mission">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header">
                <!-- SECTION TITLE -->
                <h2 class="dark-text">Why Choose Us</h2>
                <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                <!--<h6 class="white-text">
                    Check our awesome team memebers who always work hard to provide quality products.
                </h6>-->
            </div>
            <!-- / END SECTION HEADER -->
            <!-- TEAM MEMBERS -->
            <div class="row" data-scrollreveal="enter left after 0s over 2s">
                <!-- MEMBER -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member2">
                        <div class="row">
                            <div class="col-lg-4">
                                <figure class="profile-pic">
                                    <img src="{{asset('assets/images/image_1.jpg')}}" alt=""> <!-- MEMBER PROFILE PIC -->
                                </figure>
                            </div>
                            <div class="col-lg-8">
                                <div class="member-details">
                                    <h5 class="dark-text">Expertise</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="details">
                                Our team comprises seasoned professionals with deep industry knowledge
                                <div style="padding-bottom:2em;"><br /></div>
                            </div>
                        </div>
                    </div>
                </div><!-- / END MEMBER -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member2">
                        <div class="row">
                            <div class="col-lg-4">
                                <figure class="profile-pic">
                                    <img src="{{asset('assets/images/image_2.jpg')}}" alt=""> <!-- MEMBER PROFILE PIC -->
                                </figure>
                            </div>
                            <div class="col-lg-8">
                                <div class="member-details">
                                    <h5 class="dark-text">Innovation</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="details">
                                We leverage cutting-edge technology to deliver efficient solutions.
                                <div style="padding-bottom:2em;"><br /></div>
                            </div>
                        </div>
                    </div>
                </div><!-- / END MEMBER -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member2">
                        <div class="row">
                            <div class="col-lg-4">
                                <figure class="profile-pic">
                                    <img src="{{asset('assets/images/image_3.jpg')}}" alt=""> <!-- MEMBER PROFILE PIC -->
                                </figure>
                            </div>
                            <div class="col-lg-8">
                                <div class="member-details">
                                    <h5 class="dark-text">Client-Centric <br> Approach</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="details">
                                Your success is our priority. We tailor our services to meet your unique needs.
                                <div style="padding-bottom:2em;"><br /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member2">
                        <div class="row">
                            <div class="col-lg-4">
                                <figure class="profile-pic">
                                    <img src="{{asset('assets/images/image_4.jpg')}}" alt=""> <!-- MEMBER PROFILE PIC -->
                                </figure>
                            </div>
                            <div class="col-lg-8">
                                <div class="member-details">
                                    <h5 class="dark-text">Transparency</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="details">
                                Trust is the foundation of our relationships. We maintain transparency in all our dealings
                                <div style="padding-bottom:2em;"><br /></div>
                            </div>
                        </div>
                    </div>
                </div><!-- / END MEMBER -->
            </div> <!-- / END TEAM MEMBER LIST -->
        </div> <!-- / END CONTAINER -->
    </section> <!-- / END VISION, MISSION, VALUES SECTION  -->

    <section class="newsletter">
        <div class="container">
            <h3 class="white-text wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">Get Our Newsletters</h3> <!-- NEWSLETTER SECTION HEADING -->
            <div class="sub-heading white-text wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                Subscribe for Email Updates on News &amp; Offers
            </div>
            <!-- SUBSCRIPTION FORM -->
            <form class="subscription wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" role="form">
                <input type="email" placeholder="Enter email" required class="form-control input-box" ng-model="subscriberEmailId">
                <button class="btn btn-primary custom-button red-btn" button-spinner="loading" disabled ng-click="sendEmail(false)">OK</button>
                <div class="col-md-9">
                    <div class="success-msg" ng-show="isSuccess">
                        <i class="fa fa-check"></i>
                        Email sent successfully!
                    </div>
                    <div class="error-msg" ng-show="isError">
                        <i class="fa fa-times-circle"></i>
                        Could not send email, please try after some time!
                    </div>
                </div>
            </form>
            <!-- / END SUBSCRIPTION FORM -->
        </div> <!-- / END CONTAINER -->
    </section> <!-- / END NEWSLETTER SECTION -->
    <!-- =========================
       CONTACT US
    ============================== -->
    <section class="works" id="contact">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header">
                <!-- SECTION TITLE -->
                <h2 class="dark-text">Contact us</h2>
                <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                <!--<h6 class="white-text">
                    Have any question? Drop us a message. We will get back to you in 24 hours.
                </h6>-->
            </div>
            <!-- / END SECTION HEADER -->
            <div class="row">
                <div class="col-lg-12 col-sm-12" style="text-align:center;">
                    <h5 class="dark-text">Registered Office</h5><br />
                    <div class="dark-text">
                        Plot No. 213, First Floor,<br>
                        Manthan Work Spaces, Phase I,<br>
                        Industrial Area, Chandigarh<br>
                        Postal Code : 160002<br>
                        Phone No: +91 9878434296<br>
                        Email: <a href="mailto:care@fiscalfellows.com">care@fiscalfellows.com</a><br>
                        <a href="https://www.google.com/maps/place/Manthan+Work+Spaces/@30.699197,76.804233,16z/data=!4m6!3m5!1s0x390fedb0e5ba0f0f:0x916d8e4a2ef8cf89!8m2!3d30.699197!4d76.8042333!16s%2Fg%2F11srgg_nh8?hl=en&entry=ttu" target="_blank"><img style="width:2%;height:2%;" src="{{asset('assets/images/map72x72.png')}}" alt="Locate us"></a>
                    </div>
                </div>

            </div>
        </div> <!-- / END CONTAINER -->
    </section> <!-- / END CONTACT US SECTION-->
    <!-- =========================
       BUSINESS ENQUIRY
    ============================== -->
    <section class="contact-us" id="businessenquiry" ng-controller="emailController">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header">
                <!-- SECTION TITLE -->
                <h2 class="white-text">Business Enquiry</h2>
                <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                <!--<h6 class="white-text">
                    Have any question? Drop us a message. We will get back to you in 24 hours.
                </h6>-->
            </div>
            <!-- / END SECTION HEADER -->
            <!-- CONTACT FORM-->
            <div class="row">
                <form role="form" class="contact-form">
                    <div class="col-lg-6 col-sm-4" data-scrollreveal="enter left after 0s over 1s">
                        <input type="text" name="company" placeholder="Your Company's Name" class="form-control input-box" ng-model="email.companyName" required>
                    </div>
                    <div class="col-lg-6 col-sm-4" data-scrollreveal="enter left after 0s over 1s">
                        <input type="text" name="name" placeholder="Your Name" class="form-control input-box" ng-model="email.name" required>
                    </div>
                    <div class="col-lg-6 col-sm-4" data-scrollreveal="enter left after 0s over 1s">
                        <input type="email" name="email" placeholder="Your Email" class="form-control input-box" ng-model="email.emailId" required>
                    </div>
                    <div class="col-lg-6 col-sm-4" data-scrollreveal="enter left after 0s over 1s">
                        <input type="text" name="subject" placeholder="Your Contact Number" class="form-control input-box" ng-model="email.phoneNumber" required>
                    </div>
                    <div class="col-md-12" data-scrollreveal="enter right after 0s over 1s">
                        <textarea name="message" class="form-control textarea-box" placeholder="Your Message" ng-model="email.message" required></textarea>
                    </div>
                    <div class="col-md-9">
                        <div class="success-msg" ng-show="isSuccess">
                            <i class="fa fa-check"></i>
                            Email sent successfully!
                        </div>
                        <div class="error-msg" ng-show="isError">
                            <i class="fa fa-times-circle"></i>
                            Could not send email, please try after some time!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary custom-button red-btn" data-scrollreveal="enter left after 0s over 1s" ng-click="sendEmail(true)" button-spinner="loading">Send Message</button>
                    </div>
                </form>
            </div>
            <!-- / END CONTACT FORM-->
        </div> <!-- / END CONTAINER -->
    </section> <!-- / END BUSINESS ENQUIRY SECTION-->

@endsection
