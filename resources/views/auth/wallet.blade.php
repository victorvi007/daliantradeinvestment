@extends('layout.app')

@section('content')

<div class="row ">
    <div class="col-md-3 col-lg-3"></div>
    <div class="col-12 col-md-6 col-lg-6">
        
        
        <form action="{{ route('wallet') }}" method="post" style="min-height:80vh;" class="d-flex align-items-center">
            @csrf
            <div class="row">
                <div class="col-12 ">
                    <h4 class="text-center text-primary fw-bolder">Add Wallect Address</h4>
                    <div class="form-group">
                        <input type="text" name="wallet_address" id="wallet_address" class="form-control text-secondary" placeholder="Input your Bitcoin Wallet Address" value="">
                     
                    </div>
                    @error('wallet_address')
                    <div class="alert-danger p-2">{{ $message }}</div>
                @enderror
                </div>
             
                <p class="text-secondary">Note: Your ROI will be sent to the wallet Address Submitted above </p>
                <div class="row">
                    <div class="col-6"></div>
                <div class="col-6"> <button class="btn btn-primary w-100">Submit</button> </div>
                </div>
            </div>
            
            
        </form>
    </div>
    <div class="col-md-3 col-lg-3"></div>
</div>

@endsection