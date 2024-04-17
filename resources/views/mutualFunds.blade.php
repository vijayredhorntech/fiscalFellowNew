@extends('Layouts.layout')

@push('styles')
    <style>

        :root {
            --background-color: white;
            --vigo-color: #f7b84b;
            --slider-color: #00D09C;
            --input-number-color: #EBEBEB;
        }


        #amountLabel {
            width: 210px;
        ;
        }

        .sip-calculator {
            border: 5px solid white;
            -moz-box-shadow: 0px 0px 5px hsl(15, 2%, 55%);
            -webkit-box-shadow: 0px 0px 5px hsl(15, 2%, 55%);
            box-shadow: 0px 0px 10px hsl(0, 0%, 73.9%);
            padding: 3em;
            margin: 1em;
            width: 100%;
            background-color: white;
        }

        .sip-calculator-amount,
        .sip-calculator-year,
        .sip-calculator-roi {
            margin-bottom: 2.2em;
            width: 100%;
        }

        .amount-slider,
        .year-slider,
        .roi-slider {
            width: 100%;
            height: 1px;
            border-radius: 10px;
            background: var(--slider-color);
            outline: none;

        }

        input[type=range] {
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            cursor: pointer;
        }

        /*input[type=range]:focus {*/
        /*    outline: none;*/
        /*}*/

        input[type=range]::-ms-track {
            width: 100%;
            cursor: pointer;
        }

        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            border: 2.5px solid var(--vigo-color);
            height: 20px;
            width: 20px;
            border-radius: 40px;
            background: white;
            cursor: pointer;
            margin-top: 0px;

        }

        input[type=range]::-moz-range-thumb {
            border: 2.5px solid var(--vigo-color);
            height: 20px;
            width: 20px;
            border-radius: 40px;
            background: white;
            cursor: pointer;
        }

        input[type=range]::-ms-thumb {
            border: 2.5px solid var(--vigo-color);
            height: 20px;
            width: 20px;
            border-radius: 40px;
            background: white;
            cursor: pointer;
        }

        input[type=number] {
            -moz-appearance: none;
            -webkit-appearance: none;
            cursor: pointer;
            background: var(--input-number-color);
            border-style: none;
            height: 30px;
            margin-left: 20px;
            margin-right: 10px;
            text-align: right;
            padding-right: 5px;
            font-family: 'Roboto', sans-serif;
            font-size: 1.5em;
            border-radius: 4px;

        }

        input[type=number]:focus {
            outline: none;
            border: 1px solid #3197EE;

        }
        input[type=number]:hover {
            outline: none;
            border: 1px solid #3197EE;
        }



        .returndiv{
            margin-top: 1em;
            font-size: 1.2em;
            background: #f1f2f3;
            border-radius: 7px;
            padding: 20px;
        }
        .link {
            font-size: 20px;
            text-align: center;
            margin: 17px 0px -30px 0px;
        }
        @media only screen and (max-width: 325px) {
            .sip-calculator {
                height: 560px;
            }

            h1 {
                font-size: 1.5em;
            }
        }

        @media (max-width: 576px) {
            body {
                font-size: smaller;
            }

            .sip-calculator {
                width: 100%;
                padding: 2em;
                margin: .1em;
            }
        }

        @media (max-width: 768px) {
            .groww-logo {
                width: 100px;
                height: 25px;
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
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                              <div class="col-lg-4 col-md-6 col-sm-12">
                              <div class="swiffy-slider slider-nav-autoplay">
                                  <ul class="slider-container">
                                      <li><img src="{{asset('assets/images/Mutual Funds.jpg')}}" style="width: 100%; height:100%" alt=""></li>
                                      <li><img src="{{asset('assets/images/mutualFunds.jpg')}}" style="width: 100%; height:100%" alt=""></li>
                                      <li><img src="{{asset('assets/images/mutual.jpeg')}}" style="width: 100%; height:100%" alt=""></li>
                                  </ul>

                                  <button type="button" class="slider-nav"></button>
                                  <button type="button" class="slider-nav slider-nav-next"></button>
                              </div>

                          </div>
                             <div class="col-lg-8 col-md-6 col-sm-12">
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


                                 <p style="text-align:justify;">
                                     At Fiscal Fellows, we offer a diverse range of mutual funds to suit your investment goals. Here’s what you need to know:
                                 </p><br />
                                 <p style="text-align:justify;">
                                     Mutual Funds are not only the best tool to grow your savings but also to safeguard your savings from inflation which other investment instruments like bank FDs normally fail since interest earned on bank savings accounts or fixed deposits, is normally less than or just almost equal to inflation rate.
                                 </p><br />
                                 <p style="text-align:justify;">
                                     We offer Personalized Solutions with a diverse array of mutual funds to cater to various investment goals after considering your risk appetite and financial objectives to recommend suitable funds with a long-term planning for different objectives like higher education, a vacation, retirement or to achieve any other financial milestone in the life.
                                 </p><br />

                                 <div>
                                     <p style="text-align:justify;">
                                         Based on your risk appetite and financial objectives, mutual funds can be categorised into following categories:
                                     </p><br />


                                     <ol>

                                         <li style="text-align: justify;">
                                             <strong>1) Aggressive: </strong>

                                         </li>
                                         <li style="text-align: justify; padding-left: 2em">Embrace the potential for higher returns by investing predominantly in growth-oriented assets like stocks. This strategy prioritizes capital appreciation over stability, aiming for investors with a higher risk tolerance seeking long-term growth opportunities.</li>
                                     </ol>
                                 </div>
                                 <div>

                                     <ol style="padding-top: 1em;">

                                         <li style="text-align: justify;">
                                             <strong>2) Balanced: </strong>

                                         </li>
                                         <li style="text-align: justify; padding-left: 2em">Seek a middle ground between growth and stability by diversifying investments across various asset classes, including stocks, bonds, and sometimes alternative investments. This approach aims to provide a blend of capital appreciation and downside protection, suitable for investors with a moderate risk appetite.</li>
                                     </ol>
                                 </div>
                                 <div>

                                     <ol style="padding-top: 1em;">

                                         <li style="text-align: justify;">
                                             <strong>3) Conservative: </strong>

                                         </li>
                                         <li style="text-align: justify; padding-left: 2em">Prioritize capital preservation and income generation by focusing on low-risk assets like high-quality bonds and cash equivalents. This strategy aims to minimize volatility and preserve capital, appealing to investors prioritizing wealth protection and steady income streams over high returns.</li>
                                     </ol>
                                 </div>








                             </div>
                        </div>
                    </div>
                    <!-- / END 4 FOCUS BOXES -->
                </div>

            <div class="row">
                <div class="col-md-9">
                    <form name="sipForm">
                        <div class="sip-calculator">
                          <div class="row">
                              <div class="col-md-7">
                                  <h3 id="heading" style="margin-bottom: 1.5em; text-align: center;">SIP Calculator</h3>
                                  <div class="sip-calculator-amount">
                                      <p style="margin-top: 1.8em;">
                                          <label id="amountLabel"> Monthly Investment</label>
                                          <input name="Amount" id="inputAmount" type="number" step="100" value="500" min="0"
                                                 max="500000" />
                                          <span id="amount"></span> Rs.
                                      </p>
                                      <input class="amount-slider" name="realAmount" id="myAmount" type="range" step="100" min="0"
                                             max="500000" value="500" />
                                  </div>
                                  <div class="sip-calculator-roi">
                                      <p style="margin-top: 1.8em;">
                                          Return Rate
                                          <input name="Retunrs" id="inputRoi" type="number" value="2" min="1" max="30" />
                                          <span id="roi"></span> %
                                      </p>
                                      <input class="roi-slider" name="realRoi" id="myRoi" type="range" min="1" step="1" max="30" value="2">
                                  </div>
                                  <div class="sip-calculator-year">
                                      <p style="margin-top: 1.8em;">
                                          Time Period
                                          <input name="Years" id="inputYears" type="number" value="10" min="1" max="50" />
                                          <span id="years"></span> Yr
                                      </p>
                                      <input class="year-slider" name="realYears" id="myYears" type="range" min="1" max="50" step="1" value="1">
                                  </div>
                                  <div class="sip-calculator-amount" >
                                      <p style="margin-top: 1.8em; display: flex; justify-content: center">
                                          <label id="amountLabel"> Monthly Investment</label>
                                      <div style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap">
                                          <div style="display: flex; align-items: center; gap: 3px">
                                              <div id="aggressive" style="height: 15px; width: 15px; border-radius: 50%; border: 1px solid black; cursor: pointer; display: flex; justify-content: center; align-items: center"
                                                   onclick="
                                                       document.getElementById('inputRoi').value = 16;
                                                         document.getElementById('myRoi').value = 16;
                                                            selectedfun();
                                                            document.getElementById('aggressiveDiv').style.backgroundColor = '#f7b84b';
                                                            document.getElementById('balancedDiv').style.backgroundColor = 'white';
                                                            document.getElementById('safetyFirstDiv').style.backgroundColor = 'white';

                                                  "


                                              >
                                                  <div id="aggressiveDiv" style="height: 12px; width: 12px; border-radius: 50%">

                                                  </div>
                                              </div>
                                              <span id="amount"></span> Aggressive
                                          </div>

                                          <div style="display: flex; align-items: center; gap: 3px">
                                              <div id="balanced" style="height: 15px; width: 15px; border-radius: 50%; border: 1px solid black; cursor: pointer; display: flex; justify-content: center; align-items: center"
                                                   onclick="
                                                       document.getElementById('inputRoi').value = 12;
                                                         document.getElementById('myRoi').value = 12;
                                                            selectedfun();
                                                            document.getElementById('aggressiveDiv').style.backgroundColor = 'white';
                                                            document.getElementById('balancedDiv').style.backgroundColor = '#f7b84b';
                                                            document.getElementById('safetyFirstDiv').style.backgroundColor = 'white';

                                                  "
                                              >
                                                  <div id="balancedDiv" style="height: 12px; width: 12px; border-radius: 50%">

                                                  </div>
                                              </div>
                                              <span id="amount"></span> Balanced
                                          </div>

                                          <div style="display: flex; align-items: center; gap: 3px">
                                              <div id="safetyFirst" style="height: 15px; width: 15px; border-radius: 50%; border: 1px solid black; cursor: pointer; display: flex; justify-content: center; align-items: center"
                                                   onclick="
                                                       document.getElementById('inputRoi').value = 8;
                                                         document.getElementById('myRoi').value = 8;
                                                            selectedfun();
                                                            document.getElementById('aggressiveDiv').style.backgroundColor = 'white';
                                                            document.getElementById('balancedDiv').style.backgroundColor = 'white';
                                                            document.getElementById('safetyFirstDiv').style.backgroundColor = '#f7b84b';

                                                  "
                                              >
                                                  <div id="safetyFirstDiv" style="height: 12px; width: 12px; border-radius: 50%">

                                                  </div>
                                              </div>
                                              <span id="amount"></span> Conservative
                                          </div>
                                      </div>
                                      </p>

                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <p class="returndiv">
                                      <strong>Invested Amount:</strong>
                                      <span id="investvalue" style="font-size: 1.2em;margin-left: 8px;"></span>
                                  </p>
                                  <p class="returndiv">
                                      <strong>Estimated Returns:</strong>
                                      <span id="estreturn" style="font-size: 1.2em;margin-left: 8px;"></span>
                                  </p>
                                  <p class="returndiv">
                                      <strong>Total Value:</strong>
                                      <span id="totalv" style="font-size: 1.2em;margin-left: 8px;"></span>
                                  </p>
                              </div>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <canvas id="pieChart" width="400" height="400"></canvas>

                </div>
            </div>

        </div><!-- / END CONTAINER -->
    </section> <!-- / END ABOUT US SECTION -->


    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            let sliders = document.querySelectorAll("input[type='range']");
            let numbers = document.querySelectorAll("input[type='number']");

            let investvalue = document.getElementById('investvalue');
            let estreturn = document.getElementById('estreturn');
            let totalv = document.getElementById('totalv');

            let pieChart;

            function selectedfun() {
                sliders.forEach(function(slider) {
                    slider.addEventListener("input", sliderfun);
                });
                numbers.forEach(function(number) {
                    number.addEventListener("input", sliderfun2);
                });

                function sliderfun() {
                    let investments = sliders[0].value;
                    let returnrate = sliders[1].value;
                    let times = sliders[2].value;
                    numbers[0].value = sliders[0].value;
                    numbers[1].value = sliders[1].value;
                    numbers[2].value = sliders[2].value;

                    var monthlyRate = returnrate / 12 / 100;
                    var months = times * 12;
                    var futureValue = 0;
                    var total = 0;

                    futureValue = investments * (((Math.pow((1 + monthlyRate), months) - 1) * (1 + monthlyRate)) / monthlyRate);

                    total = investments * months;

                    let wealth = Math.round(futureValue - total);
                    let totalinvestvalue = Math.round(total);
                    let totalvalues = Math.round(futureValue);

                    investvalue.innerText = totalinvestvalue;
                    totalv.innerHTML = totalvalues;
                    estreturn.innerHTML = wealth;

                    updatePieChart(totalinvestvalue, wealth);
                };




                function sliderfun2() {
                    if (this.max) this.value = Math.min(parseInt(this.max), parseInt(this.value) || 0);
                    if (this.min) this.value = Math.max(parseInt(this.min), parseInt(this.value) || 0);

                    sliders[0].value = numbers[0].value;
                    sliders[1].value = numbers[1].value;
                    sliders[2].value = numbers[2].value;

                    let investments = numbers[0].value;
                    let returnrate = numbers[1].value;
                    let times = numbers[2].value;

                    var monthlyRate = returnrate / 12 / 100;
                    var months = times * 12;
                    var futureValue = 0;
                    var wealth = 0;
                    var total = (investments * times * 12);
                    let mplush = 1 + monthlyRate;
                    let mathpow = Math.pow(mplush, months);

                    futureValue = (investments * ((mathpow - 1) * mplush)) / monthlyRate;

                    wealth = Math.round(futureValue - total);
                    let totalinvestvalue = Math.round(total);
                    let totalvalues = Math.round(futureValue);

                    investvalue.innerText = totalinvestvalue;
                    totalv.innerHTML = totalvalues;
                    estreturn.innerHTML = wealth;

                    updatePieChart(totalinvestvalue, wealth);
                }

                sliderfun();
            };
            selectedfun();

            function updatePieChart(investedAmount, profit) {
                if (pieChart) {
                    pieChart.destroy();
                }

                let ctx = document.getElementById('pieChart').getContext('2d');
                pieChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['Invested Amount', 'Profit'],
                        datasets: [{
                            data: [investedAmount, profit],
                            backgroundColor: [
                                'rgba(255, 159, 64, 0.8)', // Light orange for invested amount
                                'rgba(75, 192, 192, 0.8)' // Green for profit
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: true,
                            position: 'bottom'
                        }
                    }
                });
            }
        </script>


    @endpush
@endsection





