@extends('layout.app')

@section('content')

<div class="login container my-5" >

    <div class="row ">
        <div class="col-md-3 col-lg-3"></div>
        <div class="col-12 col-md-6 col-lg-6">
            <h1 class="text-center text-primary fw-bolder text-uppercase">Login</h1>
            <form action="{{ route('admin-login') }}" method="post">
                
                @csrf
                @if(session('status'))
                <div class="alert alert-danger p-2 text-center">{{ session('status') }}</div>
                @endif
                <div class="col-12">
                    <div class="form-group my-3 mb-0">
                        <input type="text" name="username" id="username" class="form-control text-secondary" placeholder="Username">
                    </div>
                    @error('username')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-12">
                    <div class="form-group my-3 mb-0">
                        <input type="password" name="password" id="password" class="form-control text-secondary" placeholder="Password">
                    </div>
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-12">
                    <div class="form-group my-3">
                        <input type="checkbox" name="remember" id="remember"> <label for="remember">Remember Me</label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary fw-bolder p-3 w-100">Login</button>
                   
                </div>

            </form>
        </div>
        <div class="col-md-3 col-lg-3"></div>
    </div>
</div>

@endsection