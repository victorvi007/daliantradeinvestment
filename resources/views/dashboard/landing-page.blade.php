@extends('layout.dashboard')

@section('content')

<div class="container-fluid">
    <h2 class="user my-2">Welcome  <span class="text-secondary text-lowercase">{{ auth()->user()->name }}</span> </h2>

    <div class="">
        <h4 class="bg-primary text-light w-100 p-3">Wallet Ballance</h4>
        <div class="row g-3 mb-2">
            {{-- <div class="col-6 col-md-4">
                <div class="card custom-card">
                    <h6 class="my-auto">Assets</h6>
                    <h6 class="my-auto">Amount</h6>
                </div>
    
            </div> --}}
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card custom-card" style="background-color:#10375C;">
                    <h4 class="my-auto">{{$data['investment_plan'] }}</h4>
                    <h6 class="my-auto">Investment Plan</h6>
                    <div class="icon"> <i class="fa fa-wallet"></i> </div>
                </div>
    
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card custom-card" style="background-color:#F44336;">
                    <h4 class="my-auto">$ @if( $amount != null) {{ $amount['amount'] }}@else 0.00 @endif </h4>
                    <h6 class="my-auto"> Deposited </h6>
                    <div class="icon"> <i class="fa fa-dollar-sign"></i> </div>
                </div>

                </div> 

             <div class="col-12 col-md-6 col-lg-4">
                 <div class="card custom-card" style="background-color:#EA907A;">
                    <h4 class="my-auto">$  @if( $amount != null) {{ $amount['amount'] }}@else 
                        0.00
                     @endif </h4>
                    <h6 class="my-auto">Investable</h6>
                    <div class="icon"> <i class="fa fa-hand-holding-usd"></i> </div>
                 </div>
    
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card custom-card" style="background-color:#E84A5F;">
                    <h4 class="my-auto">${{ $totalProfit }}</h4>
                    <h6 class="my-auto">Total Profit</h6>
                    <div class="icon"> <i class="fa fa-wallet"></i> </div>
                </div>
    
            </div>
        </div>
     



        <div class="p-2 my-2 d-flex justify-content-between bg-primary text-light mt-3">
            <h5>Stock Assets</h5>
            
        </div>
        <div class="row g-3">

                    <div class="col-12 col-md-3 col-lg-3">
                            @if(isset($hfi))
                            <div class="card custom-card" style="background-color:#6a0440;">
                                <h5 class="">{{  $hfi->product }}</h5>
                                <div class="p-2  d-flex justify-content-end">
                                    <h6>invested: </h6>
                                    <h6>${{ $hfi->amount }}</h6>

                                    <div class="icon"> <i class="fas fa-chart-bar"></i> </div>
                                </div>
                                <div class="p-2  d-flex justify-content-end">
                                    <h6>Profit: </h6>
                                    <h6>${{ $hfi->profit }}</h6>
                                    
                                    
                                </div>
                            </div>

                        @endif
                    </div>
               
                    <div class="col-12 col-md-3 col-lg-3">
                        @if(isset($iri))
                            <div class="card custom-card" style="background-color:#0b046a;">
                                <h5 class="">{{ $iri->product }}</h5>
                                <div class="p-2  d-flex justify-content-end">
                                    <h6>invested: </h6>
                                    <h6>${{ $iri->amount }}</h6>
                                    <div class="icon"> <i class="fas fa-chart-bar"></i> </div>
                                </div>
                                <div class="p-2  d-flex justify-content-end">
                                    <h6>Profit: </h6>
                                    <h6>${{ $iri->profit }}</h6>
                                    
                                </div>
                            </div>
                            
                        @endif
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        @if(isset($csi))
                            <div class="card custom-card">
                                <h5 class="">{{ $csi->product }}</h5>
                                <div class="p-2  d-flex justify-content-end">
                                    <h6>invested: </h6>
                                    <h6>${{ $csi->amount }}</h6>
                                    <div class="icon"> <i class="fas fa-chart-bar"></i> </div>
                                </div>
                                <div class="p-2 d-flex justify-content-end">
                                    <h6>Profit: </h6>
                                    <h6>${{ $csi->profit }}</h6>
                                    
                                </div>
                            </div>
                        
                        @endif
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">

                        @if(isset($hsi))
                            <div class="card custom-card" style="background-color:#04676a;">
                                <h5 class="">{{ $hsi->product }}</h5>
                                <div class="p-2 d-flex justify-content-end">
                                    <h6>invested:</h6> 
                                    <h6>${{ $hsi->amount }}</h6>
                                    <div class="icon"> <i class="fas fa-chart-bar"></i> </div>
                                </div>
                                <div class="p-2 d-flex justify-content-end">
                                    <h6>Profit:</h6>
                                    <h6>${{ $hsi->profit }}</h6>
                                    
                                </div>
                            </div>
                          
                        @endif
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">

                        @if(isset($sti))
                            <div class="card custom-card" style="background-color:#04416a;">
                                <h4 class="">{{ $sti->product }}</h4>
                                <div class="p-2 d-flex justify-content-end">
                                    <h6>invested: </h6>
                                    <h6>${{ $sti->amount }}</h6>
                                    <div class="icon"> <i class="fas fa-chart-bar"></i> </div>
                                </div>
                                <div class="p-2 d-flex justify-content-end">
                                    <h6>Profit: </h6>
                                    <h6>${{ $sti->profit }}</h6>
                                    
                                </div>
                            </div>
                        
                        @endif
                    </div>

                    <div class="p-2 my-2 d-flex justify-content-between bg-primary text-light">
                        <h5>Crypto Assets</h5>
                        <h5>Amount</h5>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">

                            @if(isset($btc))
                            <div class="card custom-card" style="background-color:#45046A;">
                                <h4 class="">{{ $btc->product }}</h4>
                                <div class="p-2 d-flex justify-content-end">
                                    <h6>invested:</h6>
                                    <h6>${{ $btc->amount }}</h6>
                                    <div class="icon"> <i class="fas fa-coins"></i></div>
                                    
                                </div>
                                <div class="p-2 d-flex justify-content-end">
                                    <h6>Profit:</h6>
                                    <h6>${{ $btc->profit }}</h6>
                                    
                                </div>
                            </div>
                    
                        @endif
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">

                        @if(isset($eth))
                        <div class="card custom-card" style="background-color:#046a2f;">
                            <h4 class="">{{ $eth->product }}</h4>
                            <div class="p-2 d-flex justify-content-end">
                                <h6>invested:</h6>
                                <h6>${{ $eth->amount }}</h6>
                                <div class="icon"> <i class="fas fa-coins"></i></div>
                            </div>
                            <div class="p-2 d-flex justify-content-end">
                                <h6>Profit:</h6>
                                <h6>${{ $eth->profit }}</h6>
                                
                            </div>
                        </div>
                    
                        @endif
                    </div>
                    <div class="col-6 col-md-3 col-lg-3">

            @if(isset($ltc))
            <div class="card custom-card" style="background-color:#6a3e04;">
                <h4 class="">{{ $ltc->product }}</h4>
                <div class="p-2 d-flex justify-content-end">
                    <h6>invested:</h6>
                    <h6>${{ $ltc->amount }}</h6>
                    <div class="icon"> <i class="fas fa-coins"></i></div>
                </div>
                <div class="p-2 d-flex justify-content-end">
                    <h6>Profit:</h6>
                    <h6>${{ $ltc->profit }}</h6>
                    
                </div>
            </div>
            
            @endif
             </div>
             <div class="col-6 col-md-3 col-lg-3">

            @if(isset($tether))
            <div class="card  custom-card" style="background-color:#6a4604;">
                <h4 class="">{{ $tether->product }}</h4>
                <div class="p-2 d-flex justify-content-end">
                    <h6>invested:</h6>
                    <h6>${{ $tether->amount }}</h6>
                    
                </div>
                <div class="p-2 d-flex justify-content-end">
                    <h6>Profit:</h6>
                    <h6>${{ $tether->profit }}</h6>
                    <div class="icon"> <i class="fas fa-coins"></i></div>
                </div>
            </div>

            @endif
             </div>
             <div class="col-6 col-md-3 col-lg-3">

            @if(isset($btc_cash))
            <div class="card custom-card" style="background-color:#6a043c;">
                <h4 class="">{{ $btc_cash->product }}</h4>
                <div class="p-2 d-flex justify-content-end">
                    <h6>invested</h6>
                    <h6>${{ $btc_cash->amount }}</h6>
                    <div class="icon"> <i class="fas fa-coins"></i></div>
                </div>
                <div class="p-2 d-flex justify-content-end">
                    <h6>Profit</h6>
                    <h6>${{ $btc_cash->profit }}</h6>
                    
                </div>
            </div>

            @endif
             </div>
             <div class="col-6 col-md-3 col-lg-3">

            @if(isset($dogecoin))
            <div class="card  custom-card" style="background-color:#046a2f;">
                <h4 class="">{{ $dogecoin->product }}</h4>
                <div class="p-2 d-flex justify-content-end">
                    <h6>invested: </h6>
                    <h6>${{ $dogecoin->amount }}</h6>
                    <div class="icon"> <i class="fas fa-coins"></i></div>
                </div>
                <div class="p-2 d-flex justify-content-end">
                    <h6>Profit: </h6>
                    <h6>${{ $dogecoin->profit }}</h6>
                    
                </div>
            </div>

            @endif
             </div>
             <div class="col-6 col-md-3 col-lg-3">

            @if(isset($stl))
            <div class="card custom-card" style="background-color:#04526a;">
                <h4 class="">{{ $stl->product }}</h4>
                <div class="p-2 d-flex justify-content-end">
                    <h6>invested: </h6>
                    <h6>${{ $stl->amount }}</h6>
                    <div class="icon"> <i class="fas fa-coins"></i></div>
                </div>
                <div class="p-2 d-flex justify-content-end">
                    <h6>Profit: </h6>
                    <h6>${{ $stl->profit }}</h6>
                    
                </div>
            </div>
            
            @endif
             </div>
             <div class="col-6 col-md-3 col-lg-3">

            @if(isset($pkd))
            <div class="card custom-card" style="background-color:#6a3204;">
                <h4 class="">{{ $pkd->product }}</h4>
                <div class="p-2  d-flex justify-content-end">
                    <h6>invested: </h6>
                    <h6>${{ $pkd->amount }}</h6>
                    <div class="icon"> <i class="fas fa-coins"></i></div>
                </div>
                <div class="p-2  d-flex justify-content-end">
                    <h6>Profit: </h6>
                    <h6>${{ $pkd->profit }}</h6>
                    
                </div>
            </div>
           
            @endif
             </div>
             <div class="col-6 col-md-3 col-lg-3">

            @if(isset($tron))
            <div class="card custom-card" style="background-color:#466a04;">
                <h4 class="">{{ $tron->product }}</h4>
                <div class="p-2 d-flex justify-content-end">
                    <h6>invested: </h6>
                    <h6>${{ $tron->amount }}</h6>
                    <div class="icon"> <i class="fas fa-coins"></i></div>
                </div>
                <div class="p-2 d-flex justify-content-end">
                    <h6>Profit: </h6>
                    <h6>${{ $tron->profit }}</h6>
                    
                </div>
            </div>
            
            @endif
             </div>
        </div>
       
        <div class="row">
            <div class="col-6">
                <a href="{{ route('fund-account') }}" class="btn btn-danger w-100 py-3 text-light  fw-bolder">Deposite</a>
            </div>
            <div class="col-6">
                <a href="{{ route('withdraw') }}" class="btn btn-success w-100 py-3 text-light fw-bolder">Withdrawal</a>
            </div>
        </div>
    </div>
    
</div>
<div class="my-2" style="height:300px;">
    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
    {
    "width": "100%",
    "height": "100%",
    "currencies": [
      "EUR",
      "USD",
      "JPY",
      "GBP",
      "CHF",
      "AUD",
      "CAD",
      "NZD",
      "CNY",
      "SGD",
      "THB",
      "MXN",
      "IDR",
      "KRW",
      "PLN",
      "MYR",
      "INR",
      "TWD"
    ],
    "isTransparent": false,
    "colorTheme": "light",
    "locale": "en"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
</div>
@endsection