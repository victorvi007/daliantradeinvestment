@extends('layout.index')

@section('content')
<div class="hello">
    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
    {
    "symbols": [
      {
        "proName": "FOREXCOM:SPXUSD",
        "title": "S&P 500"
      },
      {
        "proName": "FOREXCOM:NSXUSD",
        "title": "US 100"
      },
      {
        "proName": "FX_IDC:EURUSD",
        "title": "EUR/USD"
      },
      {
        "proName": "BITSTAMP:BTCUSD",
        "title": "Bitcoin"
      },
      {
        "proName": "BITSTAMP:ETHUSD",
        "title": "Ethereum"
      }
    ],
    "showSymbolLogo": true,
    "colorTheme": "light",
    "isTransparent": false,
    "displayMode": "adaptive",
    "locale": "en"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
</div>
<div class="banner" style="background:url({{asset('img/dalian-banner.jpg')}});background-size:cover;background-position: center;height:100vh;">
    <div class="container">


        <div class="logo">
            <a href="/">
                <img src="{{asset('img/logo.svg')}}" alt="dalian" class="logo">
            </a>
            
        </div>
        <nav class="d-none d-md-flex d-lg-flex">
            <a href="/investment" class="btn">Investments</a>
            <a href="/about" class="btn">About</a>
            <a href="/terms" class="btn">T&C</a>
            <a href="#contact_us" class="btn">Contacts</a>
            <a href="{{ route('register') }}" class="btn border">Register</a>
            <a href="{{ route('login') }}" class="btn btn-secondary text-light">Login</a>
        </nav>
        <div class="harmbugger  d-block d-md-none d-lg-none text-light my-auto" id="harmbugger">
            <h1>
                <i class="fas fa-bars"></i>

            </h1>

        </div>
    </div>




    
    <div class="container h-75 ">
        <div class="row  m-auto">
            <div class="col-12 col-md-6">
                <img src="{{asset('img/Blue Modern Chain Brand Logo.png')}}" alt="" class="img-fluid">
                <div class="row">
                    <div class="col-6"> <a href="/about" class="btn w-100 fw-bolder py-3 btn-light text-secondary">About
                            Us</a> </div>
                    <div class="col-6"> <a href="{{ route('register') }}"
                            class="btn w-100 fw-bolder py-3 btn-light text-secondary">Register</a>
                    </div>
                </div>
            </div>
        
        </div>
    </div>

</div>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-12 d-none d-md-block col-md-6 m-auto">
                <img src="{{asset('img/logo3.png')}}" alt="" class="img-fluid  w-75">
            </div>
            <div class="col-12 col-md-6">
                <h2 class="text-secondary text-center m-2 display-1 fw-bolder">About</h2>
                <p class="para"> <span class="text-secondary">Dalian Trade Investments</span> is a registered
                    investment firm  in the United Kingdom. Our organization is
                    made up of highly driven people with a cumulative 5 years of experience in a variety of
                    financial fields. Individual online entrepreneurs to banks and financial corporations eager
                    to save during times of global crisis are among our typical customers.</p>
                <p class="para">
                    <span class="text-secondary">Dalian Trade Investments</span> is an international business
                    organization that was founded with the goal of giving its members with the safest and most
                    secure investment options available, as well as the best possible and achievable returns
                    with the least amount of risk. There are no unrealistic promises made here; only a steady
                    and consistent outcome is presented.
                </p>
                <p class="para">The company's success can be attributed to a significant number of profitable trades involving various trading BOTs that result in low risk and high profits. We've been in operation since 2015, and our investors continue to earn handsomely. We now want to give everyone the opportunity to invest in online trading. It is now a very popular and profitable business.</p>
                <p class="para">
                    <span class="text-secondary">Dalian Trade Investments</span> makes a profit by investing in
                    the growth of this branch. Investment in online trading and other marketplaces has grown at
                    an almost exponential rate during the previous two decades.
                </p>
                <p class="para">
                    We have a professional team that has been with us from the start of the company, and they
                    are continually monitoring online trading prices in the worldwide investment market. They
                    contribute to the growth of our business.
                </p>
            </div>
        </div>
    </div>

</section>
<section class=" stock-chrt my-5 py-3">
    <div class="container text-center my-4" style="height:600px;">
        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
    {
    "width": "100%",
    "height": "100%",
    "symbolsGroups": [
      {
        "name": "Indices",
        "originalName": "Indices",
        "symbols": [
          {
            "name": "FOREXCOM:SPXUSD",
            "displayName": "S&P 500"
          },
          {
            "name": "FOREXCOM:NSXUSD",
            "displayName": "US 100"
          },
          {
            "name": "FOREXCOM:DJI",
            "displayName": "Dow 30"
          },
          {
            "name": "INDEX:NKY",
            "displayName": "Nikkei 225"
          },
          {
            "name": "INDEX:DEU40",
            "displayName": "DAX Index"
          },
          {
            "name": "FOREXCOM:UKXGBP",
            "displayName": "UK 100"
          }
        ]
      },
      {
        "name": "Futures",
        "originalName": "Futures",
        "symbols": [
          {
            "name": "CME_MINI:ES1!",
            "displayName": "S&P 500"
          },
          {
            "name": "CME:6E1!",
            "displayName": "Euro"
          },
          {
            "name": "COMEX:GC1!",
            "displayName": "Gold"
          },
          {
            "name": "NYMEX:CL1!",
            "displayName": "Crude Oil"
          },
          {
            "name": "NYMEX:NG1!",
            "displayName": "Natural Gas"
          },
          {
            "name": "CBOT:ZC1!",
            "displayName": "Corn"
          }
        ]
      },
      {
        "name": "Bonds",
        "originalName": "Bonds",
        "symbols": [
          {
            "name": "CME:GE1!",
            "displayName": "Eurodollar"
          },
          {
            "name": "CBOT:ZB1!",
            "displayName": "T-Bond"
          },
          {
            "name": "CBOT:UB1!",
            "displayName": "Ultra T-Bond"
          },
          {
            "name": "EUREX:FGBL1!",
            "displayName": "Euro Bund"
          },
          {
            "name": "EUREX:FBTP1!",
            "displayName": "Euro BTP"
          },
          {
            "name": "EUREX:FGBM1!",
            "displayName": "Euro BOBL"
          }
        ]
      },
      {
        "name": "Forex",
        "originalName": "Forex",
        "symbols": [
          {
            "name": "FX:EURUSD"
          },
          {
            "name": "FX:GBPUSD"
          },
          {
            "name": "FX:USDJPY"
          },
          {
            "name": "FX:USDCHF"
          },
          {
            "name": "FX:AUDUSD"
          },
          {
            "name": "FX:USDCAD"
          }
        ]
      }
    ],
    "showSymbolLogo": true,
    "colorTheme": "light",
    "isTransparent": false,
    "locale": "en"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
    </div>



</section>
<section class="my-5 py-3">
    <div class="container text-center my-4">
        <h1 class="text-primary display-4">The right way to invest? It's up to you.</h1>
        <p class="text-">Everyone has difference goals when it comes to their life, their money, and their investment plan</p>

        <div class="row">
            <div class="row">
                <div class="col-12 col-md-2 mx-3">
                    <img src="{{ asset('/img/a.jpg') }}" alt="" class="img-fluid">
                    <h6>Take the trip of a lifetime</h6>
                </div>
                <div class="col-12 col-md-2 mx-3">
                    <img src="{{ asset('/img/b.jpg') }}" alt="" class="img-fluid">
                    <h6>Buy a home</h6>
                </div>
                <div class="col-12 col-md-2 mx-3">
                    <img src="{{ asset('/img/c.jpg') }}" alt="" class="img-fluid">
                    <h6>Pay for a wedding</h6>
                </div>
                <div class="col-12 col-md-2 mx-3">
                    <img src="{{ asset('/img/d.jpg') }}" alt="" class="img-fluid">
                    <h6>Retire early</h6>
                </div>
                <div class="col-12 col-md-2 mx-3">
                    <img src="{{ asset('/img/e.jpg') }}" alt="" class="img-fluid">
                    <h6>Save for a kids' education</h6>
                </div>
            
            </div>
        </div>
    </div>

</section>

<div class="mb-5" >
    <div class="container" style="height:70vh;">
        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
    {
    "width": "100%",
    "height": "100%",
    "defaultColumn": "overview",
    "screener_type": "crypto_mkt",
    "displayCurrency": "BTC",
    "colorTheme": "light",
    "locale": "en"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
    </div>






</div>

<section class="dark-background-secondary py-4  the-height-2 d-flex align-items-center">
    <div class="container ">
        <h2 class="text-center text-primary fw-bolder  display-5">Why invest with Dalian</h2>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 my-2">
                <h4 class="text-primary my-2">Planning and advice</h4>
                <p>We can offer you with financial planning, from complex wealth management to retirement needs.</p>
            </div>
            <div class="col-12 col-md-4 col-lg-4 my-2">
                <h4 class="text-primary my-2">Straightforward pricing</h4>
                <p>We can make your money go further with no account fees, no commission trades, and no account minimums.</p>
            </div>
            <div class="col-12 col-md-4 col-lg-4 my-2">
                <h4 class="text-primary my-2">Robust investing tools</h4>
                <p>Our team of experts will provide you with simple tools and the most up-to-date professional insights.</p>
            </div>
        </div>
    </div>

</section>
<section class="stats">
    <div class="container">
        <h2 class="text-center text-secondary fw-bolder m-5 display-5">Our Live Statistics</h2>
        <div class="row ">
            <div class="col-6 col-md-3 text-center">
                <div class="card shadow my-3"> 
                    <img class="card-img-top w-50 mx-auto"src="{{asset('svg/969248_performance_stopwatch_timer_speed_time_icon.svg')}}" alt="">
                    <div class="card-body">
                        <p class="card-text">Started</p>
                        <h4 class="card-title">May, 2015</h4>

                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="card shadow text-left my-3">
                    <img class="card-img-top w-50 mx-auto"src="{{asset('svg/8683104_calendar_payday_money_dollar_coin_icon.svg')}}" alt="">
                    <div class="card-body">
                        <p class="card-text">Running days</p>
                        <h4 class="card-title" id="runningDays">+
                          <?php 
                            
                            $now = time(); // or your date as well
                            $your_date = strtotime("2015-05-24");
                            $datediff = $now - $your_date;
                            echo round($datediff / (60 * 60 * 24));
                            ?>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="card shadow text-left my-3">
                    <img class="card-img-top w-50 mx-auto"src="{{asset('svg/8209148_user_interface_connection_account_profile_icon.svg')}}" alt="">
                    <div class="card-body">
                        <p class="card-text">Total accounts</p>
                        <h4 class="card-title">4239</h4>

                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="card shadow text-left my-3">
                    <img class="card-img-top w-50 mx-auto"src="{{asset('svg/1564534_customer_man_user_account_profile_icon.svg')}}" alt="">
                    <div class="card-body">
                        <p class="card-text">Investors online</p>
                        <p class="card-title text-inline m-auto"> 
                          <i class="fas fa-circle " style="color:green;"></i> 
                         <span class="h4"><?php echo rand(20,70); ?></span> 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="product my-5 dark-background p-3">
    <div class="container">
        <h2 class="text-center text-primary fw-bolder m-5 display-5">Investment Products</h2>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 my-3">
                <div class="card text-left p-2">
                    <h4 class="card-title text-center fw-bold text-primary">Hedge Fund Investment</h4>
                  <div class="card-body">
                    <p class="card-text fs-5">Hedge Investment  generates positive returns in both rising and falling equity and bond markets. The reduction of overall portfolio risk and volatility in balanced portfolios.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary fw-bolder w-100 my-2">Open a HFA Account</a>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 my-3">
                <div class="card text-left p-2">
                    <h4 class="card-title text-center fw-bold text-primary">Individual Retirement Investment</h4>
                  <div class="card-body">
                    <p class="card-text fs-5">Great if you want to reduce your taxable income by deducting your contributions. You won't pay taxes until you withdraw money in retirement.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary fw-bolder w-100 my-2">Open a IRA Account</a>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 my-3">
                <div class="card text-left p-2">
                    <h4 class="card-title text-center fw-bold text-primary">Child Savings Investment</h4>
                  <div class="card-body">
                    <p class="card-text fs-5">All money inside the account grows tax free and distributions made to pay for education expenses are also not taxed. </p>
                    <a href="{{ route('register') }}" class="btn btn-primary fw-bolder w-100 my-2">Open a CSA Account</a>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 my-3">
                <div class="card text-left p-2">
                    <h4 class="card-title text-center fw-bold text-primary">Health Savings Investment</h4>
                  <div class="card-body">
                    <p class="card-text fs-5">Your contributions to an HSA are tax deductible, and you can use the money tax-free. Any increase is also tax-free.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary fw-bolder w-100 my-2">Open a HSA Account</a>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 my-3">
                <div class="card text-left p-2">
                    <h4 class="card-title text-center fw-bold text-primary">Stock Trading Investment</h4>
                  <div class="card-body">
                    <p class="card-text fs-5">Take advantage of our comprehensive and cutting edge trading bots and low online commission rates to buy and sell shares of publicly traded companies in both domestic and international markets.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary fw-bolder w-100 my-2">Open a STA Account</a>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 my-3">
                <div class="card text-left p-2">
                    <h4 class="card-title text-center fw-bold text-primary">Cryptocurrency Investment</h4>
                  <div class="card-body">
                    <p class="card-text fs-5">Take advantage of our comprehensive and cutting edge trading bots and low online commission rates to buy and sell crypto with minimal loss.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary fw-bolder w-100 my-2">Open a CCA Account</a>
                  </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="security">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center my-3 my-auto text-primary">
                <h2 class="fw-bolder">Our Features</h2>
                <p class="px-5">Dalian Trade Investments provides you most necessary features which will make
                    your experience more better</p>
                <a href="#" class="btn btn-primary fw-bolder p-3">Want to invest with us?</a>
            </div>
            <div class="col-12 col-md-6 my-3 my-auto">
                <div class="row">
                    <div class="col-12 col-md-6 p-2 ">
                        <div class="card text-left text-center p-2 dark-background">
                            <img class="card-img-top w-50 m-auto" src="{{asset('svg/ssl-security.svg')}}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Comodo SSL Security</h4>
                                <p class="card-text">Comodo SSL Certificate guarantees the security of your
                                    transactions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-2 ">
                        <div class="card text-left text-center p-2 dark-background">
                            <img class="card-img-top w-50 m-auto img-fluid"
                                src="{{asset('svg/customer support_female_girl_headset_icon.svg')}}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">24/7 Customer Support</h4>
                                <p class="card-text">Our live support team online 24/7. They are always ready to
                                    help you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-2  ">
                        <div class="card text-left text-center p-2 dark-background">
                            <img class="card-img-top w-50 m-auto"
                                src="{{asset('svg/antivirus_internet_lock_locked_protect_icon.svg')}}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">DDOS Protected System</h4>
                                <p class="card-text">Our Strong DDOS protection system keep our site always
                                    stable. It makes our site more faster</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-2  ">
                        <div class="card text-left text-center p-2 dark-background">
                            <img class="card-img-top w-50 m-auto" src="{{asset('svg/2639768_approval_icon.svg')}}"
                                alt="">
                            <div class="card-body">
                                <h4 class="card-title">UK Resigtred Company</h4>
                                <p class="card-text">Our Company No. 13030576 . You can verify our company with
                                    this number.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="dark-background py-1 the-height-2 d-flex align-items-center">
    <div class="container">
        <h4 class="text-center text-primary fw-bolder">Whatever you're looking to invest in, we can assist you.</h4>
        <div class="text-center">
            <p class="w-50 mx-auto">It only takes a few minutes to open an account, whether you require a trading account, a Rollover, Traditional, or IRA.</p>
            
            <a href="#" class="btn btn-primary fw-bolder px-4">Open an Account</a>
        </div>
    </div>

</section>
<section class="warning m-5">
    <div class="container">
        <div class="row">
       
            <div class="col-12 col-md-12 col-lg-12">
                <h2 class="text-primary fw-bolder text-center mx-5">Scam Alert</h2>
                <p>
                    Please do not send money to any wallets other than the official company wallet on the website, and do not accept any agreement or contract that does not come from the official company website. Scammers posing as Dalian Trade Investments employees have been reported to us. Please be cautious and take precautions to protect yourself and your funds from crooks. You can also contact us using our official support mail to report any suspicious scams. At Dalian Trade Investments, we wish you a rewarding investment experience.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="terms my-5 py-4">
    <div class="container my-3">
        <h4 class="text-center text-primary fw-bolder">Terms of Use</h4>
        <div class="my-3">
            <p>
                We solely ask for personal information when it is absolutely necessary to provide you with a service. With your knowledge and consent, we collect it in a fair and lawful manner. We also explain why we're collecting it and how we'll use it.
            </p>
            <p>The user's registration on the website acknowledges that he has read and understood the current Rules, and that he intends to follow them to the letter. The user must cancel their account registration and exit this website if they reject the rules, disagree with the general doctrine of the rules, or have any other disagreements.
            </p>
            <p>
                The current rules can be amended at the project managers' discretion. The changes take effect as soon as they are published on the website and sent to individual's mail in this situation.
            </p>
            <div class="text-center ">
                <a href="/terms" class="btn btn-primary fw-bolder w-50">See Our Terms of Service</a>
            </div>
            
        </div>
    </div>
</section>
<section class="dark-background  py-2">
    <div class="container  text-center py-5">
        <h4 class="text-center text-primary fw-bolder">We're here to assist you in any way and at any time.</h4>
        <p class="text-secondary">We're here to assist you in any way and at any time.</p>
        <div class="d-flex justify-content-center p-1" id="contact_us">
                    <a href="#" class="text-secondary  m-4 p-2">
                        <h1><i class="fas fa-comment-alt"></i></h1>
                        <p class="text-center">Talk with a representative</p>
                    </a>
                
                    <a href="mailto:admin@daliantradeinvestment.com" class="text-secondary  m-4 p-2 ">
                        <h1><i class="fas fa-envelope"></i></h1>
                        <p>Send us a Mail</p>
                    </a>
                
        </div>
    </div>
</section>
<section class="dark-background-secondary py-2">
    <div class="container  text-center py-5">
        <h1 class="text-center text-primary fw-bolder">Get started with no minimums.</h1>
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2"></div>
                <div class="col-12 col-md-8 col-lg-8 text-light fs-5 my-3">Investing is for anyone that can afford to do it —which is why you can start with as little as $20. Make a one-time investment today, or set-up recurring payment if that works better for you. 
                </div>
        <div class="col-12 col-md-2 col-lg-2"></div>
        </div>
            
       <div class="text-center my-2">
           <a href="{{ route('register') }}" class="btn btn-primary w-50 p-1 fs-4">Invest</a>
       </div>
    </div>
</section>
@endsection