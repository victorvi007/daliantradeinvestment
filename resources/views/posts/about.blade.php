@extends('layout.index')

@section('content')

<div class="banner bg-primary" style="">
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
            <a href="#" class="btn border">Register</a>
            <a href="login" class="btn btn-secondary text-light">Login</a>
        </nav>
        <div class="harmbugger  d-block d-md-none d-lg-none text-light my-auto" id="harmbugger">
            <h1>
                <i class="fas fa-bars"></i>

            </h1>

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


@endsection