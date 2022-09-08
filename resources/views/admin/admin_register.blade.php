@extends('layout.app')

@section('content')

<div class="container my-5">
            
    <div class="row">
        <div class="col-md-6 d-none d-md-block m-auto">
            <div class="logo">
                <img src="{{asset('img/logo3.png')}}" alt="logo" class="img-fluid w-50">
            </div>
        </div>
        <div class="col-12 col-md-6 m-auto">
            <h1 class="text-center text-primary fw-bolder text-uppercase">Sign Up</h1>
            <form action="{{ route('admin-register') }}" method="post">
                @csrf
                <div class="row">
                
                    <div class="col-12 col-md-12 col-lg-12 my-3">
                        <div class="form-group">
                            <input type="text" class="form-control text-secondary" name="username" id="username" placeholder="Username" value="{{ old('username') }}">
                        </div>
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                 
                    <div class="col-12 col-md-12 col-lg-12 my-3">
                        <div class="form-group">
                            <input type="password" class="form-control text-secondary" name="password" id="password" placeholder="Password">
                        </div>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 my-3">
                        <div class="form-group">
                            <input type="password" class="form-control text-secondary" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                        </div>
                    </div>
               
                    {{-- <p> 
                        Already have an Account? <a href="{{ route('admin-login') }}" class="text-primary fw-bolder">Sign in</a>
                    </p> --}}
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary fw-bolder p-3 w-100">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection