@extends('layout.dashboard')

@section('content')
<form action="{{ route('address-update') }}" method="post">
    @csrf
    <h5 class="text-primary my-4">Please provide a bitcoin network wallet address</h5>
    <div class="row">
        <div class="col-12 mb-3">
            <label for="" class="fw-bolder">Bitcoin wallet address</label>
            <div class="form-group">
                <input type="text" name="address" value="{{ $address['address'] }}"  id="address" class="form-control">
            </div>
            @error('address')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="w-100 btn btn-primary fw-bolder py-3">Submit</button>
        </div>

        
    </div>
   
    
</form>

@endsection