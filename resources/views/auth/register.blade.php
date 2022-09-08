@extends('layout.app')

@section('content')

<div class="container my-5">
            
    <div class="row">
        <div class="col-md-6 d-none d-md-block m-auto">
            <div class="logo">
                <img src="{{asset('img/logo3.png')}}" alt="logo" class="img-fluid w-50">
            </div>
        </div>
        <div class="col-12 col-md-6 m-auto" style="position:relative;">
           
            <form action="{{ route('register') }}" method="post" class="w-100 register-card">
                <h1 class="text-center text-light fw-bolder">SIGN UP</h1>
                @csrf
                 @if(session('status'))
                <div class="alert alert-danger p-2 text-center">{{ session('status') }}</div>
                @endif
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 my-3">
                        <div class="form-group">
                            <input type="text" class="form-control text-secondary" name="fullname" id="fullname" placeholder="Fullname" value="{{ old('fullname') }}">
                        </div>
                        @error('fullname')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="col-12 col-md-6 col-lg-6 my-3">
                        <div class="form-group">
                            <input type="text" class="form-control text-secondary" name="username" id="username" placeholder="Username" value="{{ old('username') }}">
                        </div>
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 my-3">
                        <div class="form-group">
                            <input type="text" class="form-control text-secondary" name="phone" id="phone" placeholder="Phone" value="{{ old('phone') }}">
                        </div>
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 my-3">
                        <div class="form-group">
                            <input type="text" class="form-control text-secondary" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 my-3">
                        <div class="form-group">
                            <input type="password" class="form-control text-secondary" name="password" id="password" placeholder="Password">
                        </div>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 my-3">
                        <div class="form-group">
                            <input type="password" class="form-control text-secondary" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 my-3">
                        <div class="form-group">
                            <input type="text" class="form-control text-secondary" name="country" id="country" placeholder="Country" value="{{ old('country') }}">
                        </div>
                        @error('country')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 my-3">
                        <div class="form-group">
                            <input type="text" class="form-control text-secondary" name="state" id="state" placeholder="state" value="{{ old('state') }}">
                        </div>
                        @error('state')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 my-3">
                            <label for="avater" class="fw-bolder text-primary m-1">Choose Desired Investment Kind</label>
                                <select name="investment_plan" id="investment_plan" class="form-select" aria-label="Default select example" value="{{ old('investment_plan') }}">
                                    <option value="">Select Investment Kind</option>
                                    <option value="Personal Investment">Personal Investment</option>
                                    <option value="Hedge Fund Investment">Hedge Fund Investment</option>
                                    <option value="Child Investment">Child Investment</option>
                                    <option value="Stock Investment">Stock Investment</option>
                                    <option value="Crypto Currency Investment">Crypto Currency Investment</option>
                                    {{-- <option value="Individual Retirement Investment">Individual Retirement Investment</option>
                                    <option value="Individual Retirement Investment">Individual Retirement Investment</option>
                                    <option value="Child Savings Investment">Child Savings Investment</option>
                                    <option value="Health Savings Investment">Health Savings Investment</option>
                                    <option value="Stock Trading Investment">Stock Trading Investment</option>
                                    <option value="Cryptocurrency Investment">Cryptocurrency Investment</option> --}}
                                </select>
                                @error('investment_plan')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                    </div>
                    <p class="text-light"> 
                        Already have an Account? <a href="{{ route('login') }}" class="text-primary fw-bolder">Sign in</a>
                    </p>
                    <div class="col-12">
                        <button type="submit" class="btn custom-primary-btn btn-primary fw-bolder p-3 w-100">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection