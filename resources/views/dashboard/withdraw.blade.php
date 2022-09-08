@extends('layout.dashboard')

@section('content')
<form action="{{ route('withdraw') }}" method="post">
    @if(session('success'))
        <div class="alert alert-success p-2 my-2 text-center">${{ session('success') }}</div>
    @endif
    @if(session('failed'))
        <div class="alert alert-danger p-2 my-2 text-center">{{ session('failed') }}</div>
    @endif
    @csrf
    <h5 class="text-primary my-4">Dear valid customer, Funds will be sent to your wallet provided</h5>
    
    <div class="row">
        <div class="col-12 my-1">
            <label for="network" class="fw-bolder">Balance</label>
            <div class="form-control p-0 d-flex ">
                <i class=" btn fas fa-dollar-sign my-auto"></i>
                <h5 class="my-auto">@if( $amount != null ) {{ $amount['amount']+$totalProfit }}

                            @elseif($amount == null )
                    0.00 <span class="alert-danger p-1">Please Fund Account first</span>
                    
                    @elseif($amount != null )
                        0.00 <span class="alert-danger p-1">Transaction is yet to be verifed. it might take a few minute </span>
                    @endif
                </h5>
            
            </div>
</div>
        @if($amount != null)
                    @if($verify != null)
                        @if($verify['verified'] != 0)
                        <div class="col-12 mb-3">
                            <label for="" class="fw-bolder">Amount to withdraw</label>
                            <div class="form-group">
                                <input type="number" name="amount" value=""  id="amount" class="form-control">
                            </div>
                            @error('amount')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="w-100 btn btn-primary fw-bolder py-3">Submit</button>
                        </div>
                        @else
                        <h4 class="alert-danger text-center">Documents submitted are yet to be verified. Might take a few hours</h4>
                        @endif
                    @else
                        <h4 class="alert-danger text-center">Please Verify your account</h4>
                    @endif
        @else
                        <h4 class="alert-danger text-center">Please Fund your Account First</h4>
        @endif

        
    </div>
   
    
</form>

@endsection