@extends('Layouts.layout')


@section('content')
    <section class="focus" id="aboutus">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header1">
                <!-- SECTION TITLE -->
                <h2 class="dark-text">LOANS</h2>
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
                    <script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js" type="text/javascript"></script>
                    <div id="ecww-widgetwrapper" style="min-width:250px;width:100%;">
                        <div id="ecww-widget" style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;"></div>

                        <!-- EMI Calculator Widget END -->

                        <section class="works" id="contact" style="margin-top: 20px">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="section-header" style="text-align: left">
                                            <!-- SECTION TITLE -->
                                            <h2 class="dark-text">Contact us</h2>
                                            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                                            <!--<h6 class="white-text">
                                                Have any question? Drop us a message. We will get back to you in 24 hours.
                                            </h6>-->
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12" style="text-align:left;">
                                                <h5 class="dark-text">Registered Office</h5><br />
                                                <div class="dark-text">
                                                    Plot No. 213, First Floor,<br>
                                                    Manthan Work Spaces, Phase I,<br>
                                                    Industrial Area, Chandigarh<br>
                                                    Postal Code : 160002<br>
                                                    Phone No: +91 9878434296<br>
                                                    Email: <a href="mailto:care@fiscalfellows.com">care@fiscalfellows.com</a><br>
                                                    <a href="https://www.google.com/maps/place/Manthan+Work+Spaces/@30.699197,76.804233,16z/data=!4m6!3m5!1s0x390fedb0e5ba0f0f:0x916d8e4a2ef8cf89!8m2!3d30.699197!4d76.8042333!16s%2Fg%2F11srgg_nh8?hl=en&entry=ttu" target="_blank"><img style="width:10%;height:10%;" src="{{asset('assets/images/map72x72.png')}}" alt="Locate us"></a>
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
                                            <form role="form" class="contact-form">
                                                <div class="col-lg-6 col-sm-12" data-scrollreveal="enter left after 0s over 1s">
                                                    <input type="text" name="company" placeholder="Your Company's Name" class="form-control input-box" ng-model="email.companyName" required>
                                                </div>
                                                <div class="col-lg-6 col-sm-12" data-scrollreveal="enter left after 0s over 1s">
                                                    <input type="text" name="name" placeholder="Your Name" class="form-control input-box" ng-model="email.name" required>
                                                </div>
                                                <div class="col-lg-6 col-sm-12" data-scrollreveal="enter left after 0s over 1s">
                                                    <input type="email" name="email" placeholder="Your Email" class="form-control input-box" ng-model="email.emailId" required>
                                                </div>
                                                <div class="col-lg-6 col-sm-12" data-scrollreveal="enter left after 0s over 1s">
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
                                                <div class="col-md-6">
                                                    <button class="btn btn-primary custom-button red-btn" data-scrollreveal="enter left after 0s over 1s" ng-click="sendEmail(true)" button-spinner="loading">Send Message</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>



                    </div>
                    <!-- / END 4 FOCUS BOXES -->
                </div>
            </div><!-- / END CONTAINER -->
    </section> <!-- / END ABOUT US SECTION -->
    <!-- =========================

@endsection
