@extends('Layouts.layout')

@push('styles')
    <style>

        .display_result {
            font-size: 22px;
            color: #4895ef;
        }

        .form-range {
            width: inherit !important;
            margin: 0px 0;
        }

        .text_input {
            height: 40px;
            width: 100%;
            float: right;
            outline: 0;
            border: 1px solid #ccc;
        }

        .outer_div {
            min-height: 100px;
            height: max-content;
            background-color: #eee;
            padding: 20px;
        }
        .outer_div2 {
            padding: 20px 70px 20px 30px;
        }
        .hide-span {
            opacity: 0; z-index: -9
        }

        .inner_div {
            /* border-left: 5px solid #0ebeff; */
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            padding-left: 10px;
            position: relative;
        }

        .row {
            --bs-gutter-x: 0 !important;
        }
        .slider_box {
            /*     position: absolute;
                right: 20px;
                align-items: center; */
        }

        input[type="range"]:focus {
            outline: none;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            border: 1px solid #fff;
            height: 30px;
            width: 15px;
            border-radius: 3px;
            background: #4895ef;
            cursor: pointer;
            margin-top: -10px;
            /* You need to specify a margin in Chrome, but in Firefox and IE it is automatic */
            box-shadow: 0px 0px 0px #000000, 0px 0px 3px #0d0d0d;
            outline: 0;
        }

        #showValue,
        #showValue2, #showValue3 {
            position: absolute;
            border: 1px solid #9ccaff;
            width: 40px;
            height: 30px;
            background: #ffffff;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #00a1ff;
            top: 45px;
            left: 0px;
        }

        #showAmps {
        }
        #showValue:before, #showValue2:before, #showValue3:before {
            content: '';
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid transparent;
            border-bottom: 7px solid #4895ef;
            height: 0px;
            width: 0px;
            position: absolute;
            /* left: 0; */
            top: -12px;
        }
        .thisthis {
            font-weight: 300;
            font-size: 11px;
            float: right;
            line-height: 2;
        }
        .text-center {
            text-align: center;
            padding: 10px 0;
        }

        @media only screen and (max-width: 500px) {
            .text_input {
                margin-left: 10px;
                font-size: 18px;
                padding: 5px;
                width: 120px;
            }
            #textValue, #textValue2 {
                font-size: 16px;
                padding: 2px;
            }
            .outer_div2, .outer_div {
                padding: 10px;
            }
            .inner_div {
                margin: 0;
            }
            .slider_box {
                padding-right: 0;
            }
            .inner_div {
                padding: 0;
            }
            .thisthis {
                width: 95px;
                line-height: 2;
            }
            .result_text {
                font-size: 12px
            }
            .display_result {
                font-size: 16px;
            }
        }
        @media only screen and (max-width: 300px) {
            .result_text {
                font-size: 10px
            }
            .display_result {
                font-size: 13px;
            }
            #textValue, #textValue2, #textValue3 {
                font-size: 12px;
            }
            .col-4 {
                font-size: 12px;
            }
        }
    </style>
@endpush


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
                        <iframe style="border: none; width:100%; height: 53px;" data-widget-name="TickerTape" src="https://widget.darqube.com/ticker-tape?token=6613b01b7e7cd5981eca32bb" id="TickerTape-klkutaf"></iframe>
                        <script>
                            window.top.addEventListener("message", function(msg) {
                                const widget = document.getElementById('TickerTape-klkutaf');

                                if (!widget) return;

                                const styles = msg.data?.styles;
                                if (styles) {
                                    Object.keys(styles).forEach(key => widget.style.setProperty(key, styles[key]))
                                }

                                const height = msg.data?.tickerTapeHeight;

                                if (height) {
                                    widget.style.setProperty('height', height + 'px');
                                }
                            });
                        </script>



                    <div class="row">
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="swiffy-slider slider-nav-autoplay">
                              <ul class="slider-container">
                                  <li><img src="{{asset('assets/images/mutualFunds.jpg')}}" style="width: 100%" alt=""></li>
                                  <li><img src="{{asset('assets/images/mutual.jpeg')}}" style="width: 100%" alt=""></li>
                              </ul>

                              <button type="button" class="slider-nav"></button>
                              <button type="button" class="slider-nav slider-nav-next"></button>
                          </div>


                          <div class="section-header1" style="padding: 10px 5px">
                              <!-- SECTION TITLE -->
                              <h1 class="dark-text" style="font-size: 15px">Objective Aim:-</h1>
                              <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                              <!--<h6>
                                  We design &amp; develop qaulity products to help small &amp; medium level business.

                              </h6>-->
                          </div>


                          <div style="padding-left: 2em;">

                              <ol style="padding-top: 1em;">

                                  <li style="text-align: justify; padding-bottom:1em;">
                                      <strong>1) Aggressive: </strong>

                                  </li>
                                  <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">Embrace the potential for higher returns by investing predominantly in growth-oriented assets like stocks. This strategy prioritizes capital appreciation over stability, aiming for investors with a higher risk tolerance seeking long-term growth opportunities.</li>
                              </ol>
                          </div>
                          <div style="padding-left: 2em;">

                              <ol style="padding-top: 1em;">

                                  <li style="text-align: justify; padding-bottom:1em;">
                                      <strong>2) Balanced: </strong>

                                  </li>
                                  <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">Seek a middle ground between growth and stability by diversifying investments across various asset classes, including stocks, bonds, and sometimes alternative investments. This approach aims to provide a blend of capital appreciation and downside protection, suitable for investors with a moderate risk appetite.</li>
                              </ol>
                          </div>
                          <div style="padding-left: 2em;">

                              <ol style="padding-top: 1em;">

                                  <li style="text-align: justify; padding-bottom:1em;">
                                      <strong>3) Safety First: </strong>

                                  </li>
                                  <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">Prioritize capital preservation and income generation by focusing on low-risk assets like high-quality bonds and cash equivalents. This strategy aims to minimize volatility and preserve capital, appealing to investors prioritizing wealth protection and steady income streams over high returns.</li>
                              </ol>
                          </div>

                      </div>


                     <div class="col-lg-8 col-md-6 col-sm-12">

                         <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                         <div class="row" style="margin: 0px">
                             <div class="col-12 col-md-7" style="margin: 0px">
                                 <div class="outer_div">
                                     <div class="inner_div row" style="margin: 0px;" >
                                         <div class="col-12">Money Per month(₹)</div>
                                         <div class="col-12 slider_box">
                                             <input class="text_input" id="textValue" value="500" onkeyup="setWattValue()" />
                                         </div>
                                         <div class="col-12">
                                             <input title="Tooltip on top" value="500" min="500" max="200000" step="500" type="range"
                                                    class="form-range col-8" id="watts" />
                                             <span id="showValue"  class="hide-span">500</span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="outer_div">
                                     <div class="inner_div row">
                                         <div class="col-6">Interest Rate(%)</div>
                                         <div class="col-6 slider_box">
                                             <input class="text_input" id="textValue2" value="1" onkeyup="setVoltValue()" />
                                         </div>
                                         <div class="col-12">
                                             <input title="Tooltip on top" value="1" min="1" max="30" step="1" type="range" class="form-range col-8"
                                                    id="volts" />
                                             <span id="showValue2" class="hide-span">1</span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="outer_div">
                                     <div class="inner_div row">
                                         <div class="col-6">Year(s)</div>
                                         <div class="col-6 slider_box">
                                             <input class="text_input" id="textValue3" value="1" onkeyup="setYearValue()" />
                                         </div>
                                         <div class="col-12">
                                             <input title="Tooltip on top" value="1" min="1" max="30" step="1" type="range" class="form-range col-8"
                                                    id="years" />
                                             <span id="showValue3"  class="hide-span">1</span>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="outer_div outer_div2 row"  style="position: relative; margin: 0px">
                                     <div class="text-center col-lg-6 col-md-6 col-sm-6 col-12">
                                         <div class="display_result" id="showInvested">1,20,000</div>
                                         <div class="result_text">Invested</div>
                                     </div>

                                     <div class="text-center col-lg-6 col-md-6 col-sm-6 col-12">
                                         <div class="display_result" id="showReturn">1,20,000</div>
                                         <div class="result_text">Returns</div>
                                     </div>

                                     <div class="text-center col-lg-12 col-md-12 col-sm-12 col-12">
                                         <div class="display_result" id="showAmps">1,20,000</div>
                                         <div class="result_text">Total</div>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-12 col-md-5 chartDiv" style="">
                                 <canvas id="myChart"></canvas>
                             </div>
                         </div>
                         <div class="section-header1" style="padding: 10px 5px">
                             <!-- SECTION TITLE -->
                             <h1 class="dark-text" style="font-size: 15px">SIP Calculator</h1>
                             <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                             <!--<h6>
                                 We design &amp; develop qaulity products to help small &amp; medium level business.

                             </h6>-->
                         </div>







                         <div style="padding-left: 2em;">

                             <ul style="padding-top: 1em;">

                                 <li style="text-align: justify; padding-bottom:1em;">
                                     <strong>1) Personalized Solutions:- </strong>
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     o Our platform offers a <strong>diverse array of mutual funds </strong>to cater to various investment goals.
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                    o <strong> Risk Assessment:</strong>
                                     We consider your risk appetite and financial objectives to recommend suitable funds.
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                    o <strong> Long-Term Planning:</strong>
                                     Whether you’re saving for retirement, education, or other milestones, we’ve got you covered.
                                 </li>

                             </ul>
                         </div>

                         <div style="padding-left: 2em;">

                             <ol style="padding-top: 1em;">


                                 <li style="text-align: justify; padding-bottom:1em;">
                                     <strong>2) Performance Tracking:- </strong>
                                 </li>
                                 <p style="text-align:justify;">
                                     We understand the importance of staying informed. Our mutual fund services provide <strong>regular statements and reports</strong>:
                                 </p>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     o <strong> Account Statements: </strong>
                                     Receive periodic statements detailing your investments, transactions, and portfolio performance.
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     o <strong>  Annual Reports:</strong>
                                     Access comprehensive reports summarizing fund performance, holdings, and strategies.
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     o Stay informed about fund performance through our user-friendly interface.
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     o <strong>Regular Updates:</strong>
                                     Receive timely updates on your investments.
                                 </li>

                             </ol>
                         </div>

                         <div style="padding-left: 2em;">

                             <ol style="padding-top: 1em;">
                                 <li style="text-align: justify; padding-bottom:1em;">
                                     <strong>3) Expert Guidance:- </strong>
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     o Our seasoned advisors provide <strong>personalized guidance</strong>.
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     o Whether you’re a novice or an experienced investor, we assist you in making informed choices.
                                 </li>
                                 <li style="text-align: justify; padding-bottom:1em; padding-left: 2em">
                                     o <strong>Investment Strategies:</strong> Learn about diversification, asset allocation, and more.
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


    @push('scripts')
        <script>
            let currentWatt,
                catchWatt = document.getElementById("watts"),
                catchTooltipMaxSlide = catchWatt.offsetWidth - 15,
                catchTooltip = document.getElementById("showValue"),
                catchTextValue = document.getElementById("textValue"),

                catchVolt = document.getElementById("volts"),
                catchTooltip2MaxSlide = catchVolt.offsetWidth - 7,
                catchTooltip2 = document.getElementById("showValue2"),
                currentVolt,
                catchTextValue2 = document.getElementById("textValue2"),
                catchAmps = document.getElementById("showAmps"),
                catchReturn = document.getElementById("showReturn"),
                catchInvested = document.getElementById("showInvested"),

                currentYear,
                catchYear = document.getElementById("years"),
                catchTooltip3MaxSlide = catchYear.offsetWidth - 7,
                catchTooltip3 = document.getElementById("showValue3"),
                catchTextValue3 = document.getElementById("textValue3"),
                futureValue,
                invested,
                returnedValue;

            catchWatt.oninput = function () {
                tooltipSliding("watt");
                calculateAmps();
            };
            catchVolt.oninput = function () {
                tooltipSliding("volt");
                calculateAmps();
            };
            catchYear.oninput = function () {
                tooltipSliding("year");
                calculateAmps();
            };

            function tooltipSliding(slider, textInput = "") {
                if (slider == "watt") {
                    currentWatt = textInput == "" ? catchWatt.value : textInput;
                    catchTooltip.innerHTML = currentWatt < 500 ? 500 : currentWatt;
                    catchTextValue.value = parseInt(currentWatt);
                    let tooltipCanSlide = catchTooltipMaxSlide;
                    catchTooltip.style.left = `${parseInt(
                        (tooltipCanSlide / 200000) * currentWatt
                    )}px`;
                } else if (slider == "volt") {
                    currentVolt = textInput == "" ? catchVolt.value : textInput;
                    catchTooltip2.innerHTML = currentVolt;
                    catchTextValue2.value = parseInt(currentVolt);
                    let tooltipCanSlide = catchTooltip2MaxSlide;
                    catchTooltip2.style.left = `${parseInt(
                        (tooltipCanSlide / 30) * currentVolt - 9
                    )}px`;
                    console.log(catchTooltip2.style.left)
                } else if (slider == "year") {
                    currentYear = textInput == "" ? catchYear.value : textInput;
                    catchTooltip3.innerHTML = currentYear;
                    catchTextValue3.value = parseInt(currentYear);
                    let tooltipCanSlide = catchTooltip3MaxSlide;
                    catchTooltip3.style.left = `${parseInt(
                        (tooltipCanSlide / 30) * currentYear - 9
                    )}px`;
                }
            }

            function setWattValue() {
                let pattern = /^[0-9]*$/,
                    v = catchTextValue.value;
                if (pattern.test(v) && v != '' && v <= 200000 && v >= 500 || v == 50) {
                    originalValue = parseInt(catchTextValue.value);
                    catchTextValue.value = originalValue;
                    catchWatt.value = originalValue;
                    tooltipSliding("watt", originalValue);
                } else {
                    catchTextValue.value = 500;
                    catchWatt.value = 500;
                    tooltipSliding("watt", 500);
                }
                if (v != '' && v <= 200000 && v >= 500) calculateAmps();
            }

            function setVoltValue() {
                let pattern = /^[0-9]*$/,
                    v = catchTextValue2.value;
                if (pattern.test(v) && v > -1 && v <= 30) {
                    originalValue = isNaN(parseInt(catchTextValue2.value)) ? 1 : parseInt(catchTextValue2.value);
                    catchTextValue2.value = originalValue;
                    catchVolt.value = originalValue;
                    tooltipSliding("volt", originalValue);
                    console.log('here', originalValue)
                } else if (v != '') {
                    console.log('here2')
                    catchTextValue2.value = 1;
                    catchVolt.value = 1;
                    tooltipSliding("volt", 1);
                }
                calculateAmps();
            }

            function setYearValue() {
                let pattern = /^[0-9]*$/,
                    v = catchTextValue3.value;
                if (pattern.test(v) && v != '' && v >= 1 && v <= 30) {
                    originalValue = isNaN(parseInt(catchTextValue3.value)) ? 1 : parseInt(catchTextValue3.value);
                    catchTextValue3.value = originalValue;
                    catchYear.value = originalValue;
                    tooltipSliding("year", originalValue);
                } else {
                    catchTextValue3.value = 1;
                    catchYear.value = 1;
                    tooltipSliding("year", 1);
                }
                calculateAmps();
            }

            window.addEventListener(
                "resize",
                function (event) {
                    catchTooltipMaxSlide = catchWatt.offsetWidth - 20;
                    catchTooltip2MaxSlide = catchVolt.offsetWidth - 20;
                },
                true
            );

            let myChart;
            function calculateAmps() {
                currentWatt = isNaN(currentWatt) ? 500 : currentWatt;
                currentVolt = isNaN(currentVolt) ? 1 : currentVolt;
                currentYear = isNaN(currentYear) ? 1 : currentYear;

                futureValue = futureValue == undefined ? 6266.33 : currentWatt * (((Math.pow((1 + (currentVolt / 100) / 12), (currentYear * 12))) - 1) / ((currentVolt / 100) / 12)) * (1 + (currentVolt / 100) / 12);
                invested = invested == undefined ? 6000 : currentWatt * currentYear * 12;
                returnedValue = futureValue - invested;
                console.log('VALUES :', futureValue, invested, returnedValue)

                if (Number.isNaN(futureValue) == false) {
                    catchAmps.innerHTML = `₹${futureValue.toFixed(2)}`;
                    catchReturn.innerHTML = `₹${returnedValue.toFixed(2)}`;
                    catchInvested.innerHTML = `₹${invested.toFixed(2)}`;
                } else {
                    catchAmps.innerHTML = "";
                }
                generateChart(parseInt(futureValue),  parseInt(invested), parseInt(returnedValue))
            }
            calculateAmps();


            function generateChart(a,b,c) {
                console.log('CHART===========',a,b,c)
                if (!(isNaN(futureValue), isNaN(invested), isNaN(returnedValue))) {
                    if (myChart !== undefined) {
                        myChart.destroy();
                    }
                    const data = {
                        labels: [
                            'Total',
                            'Invested',
                            'Return'
                        ],
                        datasets: [{
                            label: 'My First Dataset',
                            data: [a,b,c],
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)'
                            ],
                            hoverOffset: 4
                        }]
                    };
                    const config = {
                        type: 'doughnut',
                        data: data,
                    };
                    myChart = new Chart(
                        document.getElementById('myChart'),
                        config
                    );
                }
            };
        </script>
    @endpush



@endsection





