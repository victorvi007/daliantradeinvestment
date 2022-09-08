<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('img/logo.png')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-pro-5.13.0-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
 
    <title>Daliantradeinvestments</title>
</head>

<body>
    <div class="hang">
        
    </div>
         
    <div class="wrapper">
        <div class="mobileMenu" id="mobileMenu">
            <a href="/investment" class="btn">Investments</a>
            <a href="/about" class="btn">About</a>
            <a href="#" class="btn">History</a>
            <a href="#" class="btn">Contacts</a>
            <a href="{{ route('register') }}" class="btn">Register</a>
            <a href="{{ route('login') }}" class="btn btn-secondary text-light">Login</a>

        </div>
        


        @yield('content')

        
        <footer class="bg-dark">
            <div class="contact p-2 bg-secondary">
                <div class="container">
                    <div class="mail text-light">
                        <a href="mailto:Support@Daliantradeinvestments.com"
                            class="text-light text-decoration-none fs-4"> <i class="far fa-envelope"></i>
                            Support@Daliantradeinvestments</a>
                    </div>
                </div>

            </div>
            <div class="container">

                <div class="row my-4">
                    <div class="col-12 col-md-4 ">
                        <div class="logo text-center">
                            <a href="/">
                                <img src="{{asset('img/logo3.png')}}" alt="" class="img-fluid w-50 m-auto">
                            </a>
                            
                        </div>

                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <h5>Company</h5>
                        <p> <a href="/about" class="text-light text-decoration-none">About us</a></p>
                        <p> <a href="{{ route('register') }}" class="text-light text-decoration-none">Register</a> </p>
                        <p> <a href="/terms" class="text-light text-decoration-none">Terms & Conditions</a> </p>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5>Web Security</h5>
                        <div class="row text-center">
                            <div class="col-6"><img src="{{asset('img/Securitylogo1.png')}}" alt=""></div>
                            <div class="col-6"><img src="{{asset('img/Securitylogo2.png')}}" alt=""></div>
                            <div class="col-6"><img src="{{asset('img/Securitylogo3.png')}}" alt=""></div>
                            <div class="col-6"><img src="{{asset('img/Securitylogo3.png')}}" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-light mt-4 text-center">Copyright &copy; 2021 Daliantradeinvestments</div>
            </div>


        </footer>
    </div>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/61c7adbd80b2296cfdd3ccea/1fnpvtbgp';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/api.js') }}"></script>
</body>

</html>