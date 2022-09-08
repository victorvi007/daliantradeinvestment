@extends('layout.app')

@section('content')

<div class="login container my-5" >

    <div class="row d-flex justify-content-center ">
        {{-- <div class="col-md-3 col-lg-3"></div> --}}
        <div class="col-12 col-md-10 col-lg-6 d-flex align-items-center  " style="height:60vh; position:relative;">
           
            <form action="{{ route('login') }}" method="post" class="w-100 login-card">
                <h1 class="text-center text-light fw-bolder">Login</h1>
                <h5 class="text-center text-light ">welcome to Daliantradeinvestment</h5>
                @csrf
                @if(session('status'))
                <div class="alert alert-danger p-2 text-center">{{ session('status') }}</div>
                @endif
                <div class="col-12 py-1">
                    <div class="form-group my-3 mb-0">
                        <input type="text" name="email" id="email" class="form-control text-secondary" placeholder="Email">
                    </div>
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-12 py-1">
                    <div class="form-group my-3 mb-0">
                        <input type="password" name="password" id="password" class="form-control text-secondary" placeholder="Password">
                    </div>
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-12">
                    <div class="form-group my-3 text-light">
                        <input type="checkbox" name="remember" id="remember"> <label for="remember">Remember Me</label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn custom-primary-btn btn-primary fw-bolder p-2 w-100">Login</button>
                   
                </div>

            </form>
        </div>
        {{-- <div class="col-md-3 col-lg-3"></div> --}}
    </div>
</div>

@endsection