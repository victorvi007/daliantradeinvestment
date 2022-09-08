@extends('layout.index')

@section('content')

<div class="banner bg-primary">
    <div class="container">


        <div class="logo">
            <a href="/">
                <img src="{{asset('img/logo.svg')}}" alt="dalian" class="logo">
            </a>
            
        </div>
        <nav class="d-none d-md-flex d-lg-flex">
            <a href="/investment" class="btn">Investments</a>
            <a href="/about" class="btn">About</a>
            <a href="#" class="btn">History</a>
            <a href="#" class="btn">Contacts</a>
            <a href="{{ route('register') }}" class="btn border">Register</a>
            <a href="login" class="btn btn-secondary text-light">Login</a>
        </nav>
        <div class="harmbugger  d-block d-md-none d-lg-none text-light my-auto" id="harmbugger">
            <h1>
                <i class="fas fa-bars"></i>

            </h1>

        </div>
    </div>




</div>

<h2 class="text-center text-primary fw-bolder m-3 display-5">Investment Products</h2>
<section class="product my-5  p-3">
    <div class="container">
        
        <div class="row">
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
                    <a href="{{ route('register') }}" class="btn btn-primary fw-bolder w-100 my-2">Open a CSI Account</a>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 my-3">
                <div class="card text-left p-2">
                    <h4 class="card-title text-center fw-bold text-primary">Health Savings Investment</h4>
                  <div class="card-body">
                    <p class="card-text fs-5">Your contributions to an HSA are tax deductible, and you can use the money tax-free. Any increase is also tax-free.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary fw-bolder w-100 my-2">Open a HSI Account</a>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 my-3">
                <div class="card text-left p-2">
                    <h4 class="card-title text-center fw-bold text-primary">Stock Trading Investment</h4>
                  <div class="card-body">
                    <p class="card-text fs-5">Take advantage of our comprehensive and cutting edge trading bots and low online commission rates to buy and sell shares of publicly traded companies in both domestic and international markets.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary fw-bolder w-100 my-2">Open a STI Account</a>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 my-3">
                <div class="card text-left p-2">
                    <h4 class="card-title text-center fw-bold text-primary">Cryptocurrency Investment</h4>
                  <div class="card-body">
                    <p class="card-text fs-5">Take advantage of our comprehensive and cutting edge trading bots and low online commission rates to buy and sell crypto with minimal loss.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary fw-bolder w-100 my-2">Open a CCI Account</a>
                  </div>
                </div>
            </div>
        </div>
    </div>

</section>








@endsection