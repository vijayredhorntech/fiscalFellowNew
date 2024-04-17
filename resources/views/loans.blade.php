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
                    <div class="row" style="margin-top: 20px">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="swiffy-slider slider-nav-autoplay">
                                <ul class="slider-container">
                                    <li><img src="{{asset('assets/images/HOme Loan 3.jpeg')}}" style="width: 100%" alt=""></li>
                                    <li><img src="{{asset('assets/images/Car Loan 4.jpeg')}}" style="width: 100%" alt=""></li>

                                    <li><img src="{{asset('assets/images/l3.jpg')}}" style="width: 100%; height:100%" alt=""></li>
                                </ul>

                                <button type="button" class="slider-nav"></button>
                                <button type="button" class="slider-nav slider-nav-next"></button>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <div class="row">
                                <!-- COLUMN 1 - BRIEF ABOUT THE COMPANY-->
                                <div class="col-md-12" data-scrollreveal="enter bottom after 0s over 1s">
                                    <p style="text-align:justify;">
                                        We are here with tie up with top-notch banks to provide you finance with competitive rate of interest, the least hassles of documentation and faster disbursements so that you can focus on your core business without worrying about the cumbersome process of documentation, rate negotiations and numerous visits of banks to sort list the best for you.
                                    </p><br />
                                    <p style="text-align:justify;">
                                        Let’s fuel the growth together!!!
                                    </p>
                                    <div style="padding-left: 2em;">
                                        <ol style="padding-top: 1em;">
                                            <li style="text-align: justify; padding-bottom:1em;">
                                                <strong>1) Business Finance: </strong>
                                                Finance is the fuel for any business. In a developing economy like ours, which is poised to grow at an exponential rate, business is blooming in every corner of the country. Finance is lifeblood and fuel to each and every business. For a startup, it’s a seeding spur and for an existing one this the expansion fuel.
                                            </li>
                                            <li style="text-align: justify; padding-bottom:1em;">
                                                <strong>2)  Personal Finance: </strong>
                                                Ease of fulfilling the dreams. Fiancé is the biggest tool to turn dreams into reality. Whether you are buying a house, buying your dream car, furnishing your house with amenities, want to grab a latest gadgets or just going on a dream destination we are here to find your dream.
                                            </li>


                                        </ol>
                                    </div>



                                </div>
                                <!-- / END 4 FOCUS BOXES -->
                            </div>
                            <div class="row">
                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                     <img src="{{asset('assets/images/home.png')}}" class="loanTypeImages" alt="">
                                     <span class="loanTypeName">Home Loan</span>
                                 </div>
                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                                     <img src="{{asset('assets/images/car.jpeg')}}" class="loanTypeImages" alt="">
                                     <span class="loanTypeName">Car Loan</span>
                                 </div>
                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5">
                                     <img src="{{asset('assets/images/shop.png')}}" class="loanTypeImages" alt="">
                                     <span class="loanTypeName">Business Loan</span>
                                 </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="margin-top: 10px">
                    <script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js" type="text/javascript"></script>
                    <div id="ecww-widgetwrapper" style="min-width:250px;width:100%;">
                        <div id="ecww-widget" style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;">

                        </div>
                    </div>
                </div>
            </div>
            </div><!-- / END CONTAINER -->
    </section> <!-- / END ABOUT US SECTION -->
    <!-- =========================

@endsection
