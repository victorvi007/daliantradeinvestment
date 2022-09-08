<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/fontawesome-pro-5.13.0-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style2.min.css')}}">
    <title>Dashboard</title>
</head>

<body>
   
    <div class="wrapper" >

        <div class="">
            <div class="dashboard">
                <div class="bg-primary top-bar d-flex align-items-center">
                    <h3 class="my-auto text-light p-1 d-flex d-md-none d-lg-none  m-1" id="harmbugger"><i
                            class="fas fa-bars"></i></h3>
                </div>
               
                <div class="row">
                    <div class="col-12 p-0  w-100" id="mobileMenu">
                       <div class="sidebar">
                        <div class="text-center">
                            <div class="my-4 d-flex justify-content-center">
                                <a href="{{ route('support') }}" class="btn btn-primary"><i class="fas fa-envelope"></i></a>

                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary mx-1"><i class="fas fa-power-off"></i></button>
                                </form>
                                {{-- <a href="#" class="btn btn-primary"><i class="fas fa-power-off"></i></a> --}}

                            </div>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('dashboard') }}"
                                class="d-block py-4 text-center text-light text-decoration-none">Dashboard</a>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('fund-account') }}" class="d-block py-4 text-center text-light text-decoration-none">Fund
                                Account</a>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('invest') }}" class="d-block py-4 text-center text-light text-decoration-none">Stock & Savings Investment</a>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('crypto-invest') }}" class="d-block py-4 text-center text-light text-decoration-none">Crypto Investment</a>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('withdraw') }}" class="d-block py-4 text-center text-light text-decoration-none">Withdrawal</a>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('account-details') }}" class="d-block py-4 text-center text-light text-decoration-none">Account
                                Details</a>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('account-verify') }}" class="d-block py-4 text-center text-light text-decoration-none">Account
                                Verify</a>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('address-update') }}" class="d-block py-4 text-center text-light text-decoration-none">Update Wallet Address</a>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('support') }}" class="d-block py-4 text-center text-light text-decoration-none">Support</a>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('account-update') }}" class="d-block py-4 text-center text-light text-decoration-none">Update
                                Profile</a>
                        </div>
                        <div class="side-button">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="w-100 py-4 btn btn-primary text-light text-decoration-none">Logout</button>
                            </form>
                            {{-- <a href="" class="">Logout</a> --}}
                        </div>
                       </div>
                    </div>
                    <div class="col-2 p-0  mx-0 d-none d-md-block d-lg-block sidebar-container" id="" style="height:100vh;">
                        <div class="sidebar ">

                            <div class="text-center">
                                <div class="my-4 d-flex justify-content-center">
                                    <a href="{{ route('support') }}" class="btn btn-primary"><i class="fas fa-envelope"></i></a>

                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary mx-1"><i class="fas fa-power-off"></i></button>
                                    </form>
                                    {{-- <a href="#" class="btn btn-primary"><i class="fas fa-power-off"></i></a> --}}

                                </div>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('dashboard') }}"
                                    class="d-block py-4 text-center text-light text-decoration-none">Dashboard</a>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('fund-account') }}" class="d-block py-4 text-center text-light text-decoration-none">Fund
                                    Account</a>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('invest') }}" class="d-block py-4 text-center text-light text-decoration-none">Stock & Savings Investment</a>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('crypto-invest') }}" class="d-block py-4 text-center text-light text-decoration-none">Crypto Investment</a>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('withdraw') }}" class="d-block py-4 text-center text-light text-decoration-none">Withdrawal</a>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('account-details') }}" class="d-block py-4 text-center text-light text-decoration-none">Account
                                    Details</a>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('account-verify') }}" class="d-block py-4 text-center text-light text-decoration-none">Account
                                    Verify</a>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('address-update') }}" class="d-block py-4 text-center text-light text-decoration-none">Update Wallet Address</a>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('support') }}" class="d-block py-4 text-center text-light text-decoration-none">Support</a>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('account-update') }}" class="d-block py-4 text-center text-light text-decoration-none">Update
                                    Profile</a>
                            </div>
                            <div class="side-button">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="w-100 py-4 btn btn-primary text-light text-decoration-none">Logout</button>
                                </form>
                                {{-- <a href="" class="">Logout</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-10 col-lg-10">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>



    </div>
        <footer class="bg-dark" style=" bottom:0px; width:100vw; overflow:hidden;">
            <div class="container">
                <div class="col-12 text-light my-2 text-center">Copyright &copy; 2021 Daliantradeinvestments</div>
            </div>


        </footer>
   
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
</body>

</html>



