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
                        Please <a href="{{route('home')}}#promoters" style="font-weight:600; color:blue; text-decoration:underline;">Click here</a> to know about the promoter.
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
            <div class="row" data-scrollreveal="enter left after 0s over 2s" style="gap: 10px">
                <!-- MEMBER -->
                <div class="col-lg-3 col-sm-3" style="margin-bottom: 10px">
                    <div class="team-member2">
                        <div class="row">
                            <div class="col-lg-6">
                                <figure class="profile-pic">
                                    <img src="{{asset('assets/images/mutual.jpeg')}}" alt=""> <!-- MEMBER PROFILE PIC -->
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
                </div>

                <div class="col-lg-3 col-sm-3" style="margin-bottom: 10px">
                    <div class="team-member2">
                        <div class="row">
                            <div class="col-lg-6">
                                <figure class="profile-pic">
                                    <img src="{{asset('assets/images/loan.jpeg')}}" alt=""> <!-- MEMBER PROFILE PIC -->
                                </figure>
                            </div>
                            <div class="col-lg-6">
                                <div class="member-details">
                                    <h5 class="dark-text">Loans</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="details" style="min-height: 200px">
                                <p>
                                    Start your entrepreneurial journey on the right foot with our comprehensive business setup services. From registration and licensing to compliance and advisory, we provide end-to-end support to help you establish and grow your business with confidence.
                                </p>
                            </div>
                            <div style="text-align:center">
                                <a href="{{route('loans')}}" class="btn btn-primary custom-button2 red-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3" style="margin-bottom: 10px">
                    <div class="team-member2">
                        <div class="row">
                            <div class="col-lg-6">
                                <figure class="profile-pic">
                                    <img src="{{asset('assets/images/digi.jpeg')}}" alt=""> <!-- MEMBER PROFILE PIC -->
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
                <div class="col-lg-3 col-sm-3" style="margin-bottom: 10px">
                    <div class="team-member2">
                        <div class="row">
                            <div class="col-lg-6">
                                <figure class="profile-pic">
                                    <img src="{{asset('assets/images/support.png')}}" alt=""> <!-- MEMBER PROFILE PIC -->
                                </figure>
                            </div>
                            <div class="col-lg-6">
                                <div class="member-details">
                                    <h5 class="dark-text">Business Setup & Support</h5>
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
            <div class="row" style="gap: 10px" data-scrollreveal="enter left after 0s over 2s">
                <!-- MEMBER -->
                <div class="col-lg-3 col-sm-6" style="margin-bottom: 10px; min-height: 280px; box-shadow: 0px 0px 5px 0px darkgray">
                    <div class="team-member2" style="min-height: 280px">
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
                                Our team comprises seasoned professionals with deep industry knowledge.
                                <div style="padding-bottom:2em;"><br /></div>
                            </div>
                        </div>
                    </div>
                </div><!-- / END MEMBER -->
                <div class="col-lg-3 col-sm-6" style="margin-bottom: 10px; min-height: 280px; box-shadow: 0px 0px 5px 0px darkgray">
                    <div class="team-member2" style="min-height: 280px">
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
                <div class="col-lg-3 col-sm-6" style="margin-bottom: 10px; min-height: 280px; box-shadow: 0px 0px 5px 0px darkgray">
                    <div class="team-member2" style="min-height: 280px">
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
                <div class="col-lg-3 col-sm-6" style="margin-bottom: 10px; min-height: 280px; box-shadow: 0px 0px 5px 0px darkgray">
                    <div class="team-member2" style="min-height: 280px">
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
                                Trust is the foundation of our relationships. We maintain transparency in all our dealings.
                                <div style="padding-bottom:2em;"><br /></div>
                            </div>
                        </div>
                    </div>
                </div><!-- / END MEMBER -->
            </div> <!-- / END TEAM MEMBER LIST -->
        </div> <!-- / END CONTAINER -->
    </section> <!-- / END VISION, MISSION, VALUES SECTION  -->

{{--    <section class="newsletter">--}}
{{--        <div class="container">--}}
{{--            <h3 class="white-text wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">Get Our Newsletters</h3> <!-- NEWSLETTER SECTION HEADING -->--}}
{{--            <div class="sub-heading white-text wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">--}}
{{--                Subscribe for Email Updates on News &amp; Offers--}}
{{--            </div>--}}
{{--            <!-- SUBSCRIPTION FORM -->--}}
{{--            <form class="subscription wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" role="form">--}}
{{--                <input type="email" placeholder="Enter email" required class="form-control input-box" ng-model="subscriberEmailId">--}}
{{--                <button class="btn btn-primary custom-button red-btn" button-spinner="loading" disabled ng-click="sendEmail(false)">OK</button>--}}
{{--                <div class="col-md-9">--}}
{{--                    <div class="success-msg" ng-show="isSuccess">--}}
{{--                        <i class="fa fa-check"></i>--}}
{{--                        Email sent successfully!--}}
{{--                    </div>--}}
{{--                    <div class="error-msg" ng-show="isError">--}}
{{--                        <i class="fa fa-times-circle"></i>--}}
{{--                        Could not send email, please try after some time!--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--            <!-- / END SUBSCRIPTION FORM -->--}}
{{--        </div> <!-- / END CONTAINER -->--}}
{{--    </section>--}}
    <!-- / END NEWSLETTER SECTION -->
    <!-- =========================
       CONTACT US
    ============================== -->












    <section class="works" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-header">
                        <!-- SECTION TITLE -->
                        <h2 class="dark-text">Contact us</h2>
                        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                        <!--<h6 class="white-text">
                            Have any question? Drop us a message. We will get back to you in 24 hours.
                        </h6>-->
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12" style="display: flex; justify-content: center; flex-direction: column; align-items: center">
                            <h5 class="dark-text">Registered Office</h5><br />
                            <div class="dark-text" style="text-align: left; width: max-content; margin: auto 0px">
                                <i class="fa fa-home" style="font-size: 15px; color: #f6ab2b; margin-right: 5px"></i>
                               Plot No. 213, First Floor,<br>
                                Manthan Work Spaces, Phase I,<br>
                                Industrial Area, Chandigarh<br>
                                Postal Code : 160002<br>
                                <i class="fa fa-phone" style="font-size: 15px; color: #f6ab2b; margin-right: 5px"></i>
                                +91 9878434296<br>
                                <i class="fa fa-envelope" style="font-size: 15px; color: #f6ab2b; margin-right: 5px"></i>
                                <a href="mailto:care@fiscalfellows.com">care@fiscalfellows.com</a><br>
                                <div style="width: 100% ; display: flex; justify-content: center">
                                    <a href="https://www.google.com/maps/place/Manthan+Work+Spaces/@30.699197,76.804233,16z/data=!4m6!3m5!1s0x390fedb0e5ba0f0f:0x916d8e4a2ef8cf89!8m2!3d30.699197!4d76.8042333!16s%2Fg%2F11srgg_nh8?hl=en&entry=ttu" target="_blank"><img style="width:30px;height:30px;" src="{{asset('assets/images/map72x72.png')}}" alt="Locate us"></a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-header">
                        <!-- SECTION TITLE -->
                        <h2 class="dark-text">Business Enquiry</h2>
                        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                        <!--<h6 class="white-text">
                            Have any question? Drop us a message. We will get back to you in 24 hours.
                        </h6>-->
                    </div>
                    <div class="row">
                        <form action="{{route('query')}}" method="POST" class="contact-form">
                             @csrf
                            <div class="col-lg-12 col-sm-12" data-scrollreveal="enter left after 0s over 1s">
                                <input type="text" name="name" placeholder="Your Name" class="form-control input-box" value="{{old('name')}}">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-lg-6 col-sm-12" data-scrollreveal="enter left after 0s over 1s">
                                <input type="email" name="email" placeholder="Your Email" class="form-control input-box" value="{{old('email')}}">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-lg-6 col-sm-12" data-scrollreveal="enter left after 0s over 1s">
                                <input type="number" name="phone" placeholder="Your Contact Number" class="form-control input-box" value="{{old('phone')}}">
                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>



                            <div class="col-md-12" data-scrollreveal="enter right after 0s over 1s">
                                <textarea name="message" class="form-control textarea-box" placeholder="Your Message" >{{old('message')}}</textarea>
                                @error('message')
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



                            <div class="col-md-6">
                                <button  type="submit" class="btn btn-primary custom-button red-btn" data-scrollreveal="enter left after 0s over 1s" >Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="products" data-type="background" data-speed="1" id="people">
        <!--<div class="color-overlay">-->
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header">
                <!-- SECTION TITLE -->
                <h2 class="white-text">Promotors and Team</h2>
                <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                <!--<h6 class="white-text">
                    In addition to the below the core team of Unified Vision Capital include experienced professionals to carry out the in house Transaction Support Services.
                </h6>-->
            </div>
            <!-- / END SECTION HEADER -->

            <style>
                @media screen and (min-width:1000px) {
                    div.owl-wrapper{
                        width: 100% !important;
                    }
                    div.owl-wrapper>div.owl-item{
                        width: 49% !important;
                    }
                }
            </style>


            <!-- PRODUCTS -->
            <div class="row" id="promoters" data-scrollreveal="enter right after 0s over 1s">
                <div class="col-md-12">
                        <!-- Ajay Kumar, Chief Executive Officer -->
                        <div class="team-member2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="member-details" style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap">
                                        <img src="{{asset('assets/images/noimg.jpg')}}" style="height: 100px; width: 100px;object-fit: cover; border-radius: 50%" alt="">
                                        <h5 class="dark-text">
                                            MR. PAWANINDER JASWAL
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="details">
                                    <p>Meet our esteemed promoter, Mr. Pawaninder Jaswal! With a wealth of experience spanning over 26 years, he brings a unique blend of expertise in finance, taxation, and business management. Demonstrating his commitment to excellence in financial matters. Let’s delve into his remarkable journey:</p>
                                </div>
{{--                                <div style="text-align:right;">--}}
{{--                                    <ul class="soc">--}}
{{--                                        <li><a class="soc-twitter" href="#"> <i class="fa-brands fa-facebook"></i> </a></li>--}}
{{--                                        <li><a class="soc-linkedin" href="https://www.linkedin.com/company/unified-vision-capital-pvt-ltd-?trk=nmp_rec_act_company_name"></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                                <br>

                                <div style="text-align:center">
                                    <button type="button"  data-toggle="modal" data-target="#pawaninderJaswalModal" class="btn btn-primary custom-button2 red-btn">Read More</button>
                                </div>


                                <!-- Modal -->
                                <div class="modal fade" id="pawaninderJaswalModal" tabindex="-1" role="dialog" aria-labelledby="pawaninderJaswalModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="pawaninderJaswalModalLabel">MR. PAWANINDER JASWAL</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p style="text-align:justify;">
                                                    Meet our esteemed promoter, Mr. Pawaninder Jaswal! With a wealth of experience spanning over 26 years, he brings a unique blend of expertise in finance, taxation, and business management. Demonstrating his commitment to excellence in financial matters. Let’s delve into his remarkable journey:
                                                </p><br />

                                                <p style="text-align:justify;">
                                                    Professional Journey:
                                                </p>
                                                <div style="padding-left: 2em;">
                                                    <ol style="padding-top: 1em;">
                                                        <li style="text-align: justify; padding-bottom:1em;">
                                                            <strong>1)  Computer Age Management Systems Pvt Ltd (CAMS): </strong>
                                                            As a Regional Coordinator and Processing Officer at CAMS, he played a pivotal role in managing mutual fund operations. CAMS, a leading registrar and transfer agency, entrusted him with critical responsibilities.
                                                        </li>
                                                        <li style="text-align: justify; padding-bottom:1em;">
                                                            <strong>2)  Mahanagar Telephone Nigam Ltd (MTNL): </strong>
                                                            Mr. Pawaninder Jaswal contributed to the public sector as a Junior Accounts Officer at MTNL, a Government of India PSU. His financial acumen ensured smooth financial operations within the organization.
                                                        </li>
                                                        <li style="text-align: justify; padding-bottom:1em;">
                                                            <strong>3)  M/s Sammati Enterprises: </strong>
                                                            For over 12 years, he served as the Finance Head at M/s Sammati Enterprises, a chain of exclusive brand retail stores in the region of Chandigarh, Punjab and Haryana. His strategic financial planning, risk management, and astute decision-making elevated the company’s financial health.
                                                        </li>
                                                    </ol>
                                                </div>


                                                <p style="text-align:justify;">
                                                    Qualifications and Expertise:
                                                </p>
                                                <div style="padding-left: 2em;">
                                                    <ol style="padding-top: 1em;">
                                                        <li style="text-align: justify; padding-bottom:1em;">
                                                            <strong>Mutual Funds and Stock Market </strong>
                                                            Mr. Pawaninder Jaswal holds various certifications on Investment management and trading strategies from prestigious institutions:

                                                            <div style="padding-left:5em; padding-top:1em;">
                                                                <ol>
                                                                    <li style="text-align: justify;">  <strong>NSE Academy:</strong>
                                                                        Earned various qualifications related to mutual funds and stock market dynamics empower him to guide investors effectively.
                                                                    </li>
                                                                    <li style="text-align: justify;">  <strong>National Institute of Stock Markets (NISM):</strong>
                                                                        Established by SEBI, NISM’s certifications validate his expertise. Apart from qualifying Mutual Fund Distributors exam he is likely to earn Advance CPDS qualification.
                                                                    </li>

                                                                </ol>
                                                            </div>
                                                        </li>
                                                        <li style="text-align: justify; padding-bottom:1em;">
                                                            <strong>Vision and Commitment</strong>
                                                            <div style="padding-left:5em; padding-top:1em;">
                                                                <ol>
                                                                    <li style="text-align: justify;">
                                                                        Our promoter’s vision is to empower individuals and businesses through sound financial strategies.
                                                                    </li>
                                                                    <li style="text-align: justify;">
                                                                        He believes in transparency, ethical practices, and client-centric solutions.
                                                                    </li>


                                                                </ol>
                                                            </div>
                                                        </li>

                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div> <!-- / END COLUMN -->
            </div>
            <!--<br />-->
            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <br /><br /><br />
        </div> <!-- / END CONTAINER -->
        <!--</div>--> <!-- / END COLOR OVERLAY -->
    </section>





@endsection
