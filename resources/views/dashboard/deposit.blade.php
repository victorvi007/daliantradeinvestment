@extends('layout.dashboard')

@section('content')
<form action="{{ route('fund-account') }}" method="post" class="text-center p-3">
   @csrf
   @if(session('status'))
   <div class="alert alert-success p-2 text-center">{{ session('status') }}</div>
   @endif
    <h1><i class="fab fa-bitcoin text-warning"></i> Deposit Bitcoin</h1>
    <div class="row">
        <div class="col-12 col-md-4"></div>
        <div class="col-12 col-md-4">
            <div class="address-img">
                <img src="{{ asset('img/wallet-address.jpg') }}" class="img-fluid  border" alt="BTC Address" style="border-width: 5px!important;">
            </div>
        </div>
        <div class="col-12 col-md-4"></div>
    </div>

    <h5 class="m-3">Scan the QR code or copy and paste the payment details into your wallet.
    </h5>
    <div class="row text-start">
        <div class="col-12 my-1">
            <label for="network" class="fw-bolder">Bitcon equivelent in USD</label>
            <div class="form-control p-0 d-flex ">
                <i class=" btn fas fa-dollar-sign text-primary my-auto"></i><input type="number" name="amount" value="" id="amount" class="form-control @error('amount') border-danger @enderror" placeholder="Amount">
                
            </div>
            @error('amount')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-12 my-1">
            <label for="network" class="fw-bolder">Network</label>
            <div class="form-group">
                <input type="text" name="network" value="Bitcoin Network" disabled id="network" class="form-control">
            </div>
        </div>
        <div class="col-12 my-1">
            <label for="network" class="fw-bolder">Bitcoin deposit Address</label>
            <div class="form-control p-0 d-flex ">
                <input type="text" name="address" value="bc1qqqjsvc7jywy8dsemyhyytjhq026fh9ghftrezt" disabled id="address" class="form-control"> <i class=" btn fas fa-copy text-primary my-auto " onclick="copy();"></i>
        
            </div>
        </div>
        <div class="col-12 my-1">
            <button type="submit" class="btn btn-primary w-100 fw-bolder py-2">Deposited</button>
        </div>
    </div>





</form>
@endsection