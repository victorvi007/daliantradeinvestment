@extends('layout.dashboard')

@section('content')
<form action="{{ route('account-update') }}" method="post">
    @csrf
    <h5 class="text-primary my-4">Please note you can only change your password</h5>
    <div class="row">
        <div class="col-12 mb-3">
            <label for="" class="fw-bolder">Account ID</label>
            <div class="form-group">
                <input type="email" name="email" disabled id="email" class="form-control" value="{{ $data['name'] }}">
            </div>
        </div>
        
        <div class="col-12 mb-3">
            <label for="subject" class="fw-bolder">Email</label>
            <div class="form-group">
                <input type="email" name="email" disabled id="email" class="form-control" value="{{ $data['email'] }}">
            </div>
        </div>
        <div class="col-12 mb-3">
            
            <div class="form-group">
                <input type="password" name="password"  id="password" class="form-control" placeholder="New password" >
               
            </div>
            @error('password')
            <div class="alert-danger p-2">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-12 mb-3">
            <div class="form-group">
                <input type="password" name="password_confirmation"  id="password_confirmation" class="form-control" placeholder="Confirm password">
            </div>
        </div>
       
        <div class="col-12">
            <button type="submit" class="w-100 btn btn-primary fw-bolder py-3">Update</button>
        </div>
    </div>
</form>
@endsection