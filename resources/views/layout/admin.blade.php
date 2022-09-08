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
    <div class="wrapper">

        <div class="">
            <div class="dashboard">
                <div class="bg-primary top-bar d-flex align-items-center">
                    <h3 class="my-auto text-light p-1 d-flex d-md-none d-lg-none  m-1" id="harmbugger"><i
                            class="fas fa-bars"></i></h3>
                </div>
                <div class="row px-2">
                    <div class="col-12 bg-primary p-0  w-100" id="mobileMenu">
                        <div class="text-center">
                           
                            <div class="my-4 d-flex justify-content-center">
                                <a href="{{ route('support') }}" class="btn btn-primary"><i class="fas fa-envelope"></i></a>
                                
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary mx-1"><i class="fas fa-power-off"></i></button>
                                </form>

                            </div>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('admin-dashboard') }}"
                                class="d-block py-4 text-center text-light text-decoration-none">Dashboard</a>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('approve-payment') }}" class="d-block py-4 text-center text-light text-decoration-none">Approve payment</a>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('stock-profit-update') }}" class="d-block py-4 text-center text-light text-decoration-none">Stock Profit update</a>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('crypto-profit-update') }}" class="d-block py-4 text-center text-light text-decoration-none">Crypto Profit update</a>
                        </div>
                        <div class="side-button">
                            <a href="{{ route('admin-support') }}" class="d-block py-4 text-center text-light text-decoration-none">Support</a>
                        </div>
                  
                        <div class="side-button">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="w-100 py-4 btn btn-primary text-light text-decoration-none">Logout</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-2 p-0  mx-0 d-none d-md-block d-lg-block sidebar-container" id="" style="height:100vh;">
                        <div class="sidebar">
                            <div class=" text-center">
                                <div class="my-4 d-flex justify-content-center">
                                    <a href="{{ route('support') }}" class="btn btn-primary"><i class="fas fa-envelope"></i></a>

                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary mx-1"><i class="fas fa-power-off"></i></button>
                                    </form>

                                </div>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('admin-dashboard') }}"
                                    class="d-block py-4 text-center text-light text-decoration-none">Dashboard</a>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('users') }}"
                                    class="d-block py-4 text-center text-light text-decoration-none">Users</a>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('approve-payment') }}" class="d-block py-4 text-center text-light text-decoration-none">Approve payment</a>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('stock-profit-update') }}" class="d-block py-4 text-center text-light text-decoration-none">Stock Profit update</a>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('crypto-profit-update') }}" class="d-block py-4 text-center text-light text-decoration-none">Crypto Profit update</a>
                            </div>
                            <div class="side-button">
                                <a href="{{ route('admin-support') }}" class="d-block py-4 text-center text-light text-decoration-none">Support</a>
                            </div>
                        
                            <div class="side-button">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="w-100 py-4 btn btn-primary text-light text-decoration-none">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 col-lg-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>


 </div>

        <footer class="bg-dark" style="width:100vw; bottom:0px; overflow:hidden;>

            <div class="container">

               
                <div class="col-12 text-light my-2 text-center">Copyright &copy; 2021 Daliantradeinvestments</div>
            </div>


        </footer>
   

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>



