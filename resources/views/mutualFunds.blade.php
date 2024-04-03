@extends('Layouts.layout')


@section('content')
    <section class="focus" id="aboutus">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header1">
                <!-- SECTION TITLE -->
                <h2 class="dark-text">Mutual Funds</h2>
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
                        At Fiscal Fellows, we offer a diverse range of mutual funds to suit your investment goals. Here’s what you need to know:
                    </p><br />
                    <p style="text-align:justify;">
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                            {
                                "symbols": [
                                {
                                    "description": "",
                                    "proName": "GETTEX:NSE"
                                },
                                {
                                    "description": "",
                                    "proName": "BSE:SENSEX"
                                }
                            ],
                                "showSymbolLogo": true,
                                "isTransparent": false,
                                "displayMode": "adaptive",
                                "colorTheme": "light",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    </p><br />

                 <div class="row">
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <img src="{{asset('assets/images/mutualFunds.jpg')}}" style="width: 100%" alt="">
                      </div>
                     <div class="col-lg-8 col-md-6 col-sm-12">
                         <div style="padding-left: 2em;">

                             <ol style="padding-top: 1em;">

                                 <li style="text-align: justify; padding-bottom:1em;">
                                     <strong>1): Personalized Solutions:- </strong>

                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     o  Our platform offers a <strong>diverse array of mutual funds </strong>to cater to various investment goals.
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     <strong>o Risk Assessment:</strong>
                                     We consider your risk appetite and financial objectives to recommend suitable funds.
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     <strong>o Long-Term Planning:</strong>
                                     Whether you’re saving for retirement, education, or other milestones, we’ve got you covered.
                                 </li>

                             </ol>
                         </div>

                         <div style="padding-left: 2em;">

                             <ol style="padding-top: 1em;">


                                 <li style="text-align: justify; padding-bottom:1em;">
                                     <strong>2): Performance Tracking:- </strong>
                                 </li>
                                 <p style="text-align:justify;">
                                     We understand the importance of staying informed. Our mutual fund services provide <strong>regular statements and reports</strong>:
                                 </p>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     <strong>o Account Statements: </strong>
                                     Receive periodic statements detailing your investments, transactions, and portfolio performance.
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     <strong>o  Annual Reports:</strong>
                                     Access comprehensive reports summarizing fund performance, holdings, and strategies.
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     o Stay informed about fund performance through our user-friendly interface.
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     <strong>o   Regular Updates:</strong>
                                     Receive timely updates on your investments.
                                 </li>

                             </ol>
                         </div>

                         <div style="padding-left: 2em;">

                             <ol style="padding-top: 1em;">
                                 <li style="text-align: justify; padding-bottom:1em;">
                                     <strong>3): Expert Guidance:- </strong>
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     o Our seasoned advisors provide <strong>personalized guidance</strong>.
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     o Whether you’re a novice or an experienced investor, we assist you in making informed choices.
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     <strong>o Investment Strategies:</strong> Learn about diversification, asset allocation, and more.
                                 </li>
                             </ol>
                         </div>
                     </div>
                 </div>
                </div>
                <!-- / END 4 FOCUS BOXES -->
            </div>
        </div><!-- / END CONTAINER -->
    </section> <!-- / END ABOUT US SECTION -->
    <!-- =========================

@endsection
