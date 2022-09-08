@extends('layout.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12 my-4">
        <h2 class="bg-primary text-light my-2 text-center">STOCKS & SAVINGS</h2>
        <form action="{{ route('invest') }}" method="post" class="text-center p-3">
                 @csrf
            <div class="row text-start">
               
                    <div class="col-12 my-1">
                        @if(session('success'))
                        <div class="alert alert-success p-2 text-center">${{ session('success') }}</div>
                        @endif
                        @if(session('failed'))
                        <div class="alert alert-danger p-2 text-center">{{ session('failed') }}</div>
                        @endif
                                <label for="network" class="fw-bolder">Balance</label>
                                <div class="form-control p-0 d-flex ">
                                    <i class=" btn fas fa-dollar-sign my-auto"></i>
                                    <h5 class="my-auto">
                                        @if( $amount != null ) 
                                                {{ $amount['amount'] }}
                                            @elseif($amount == null)
                                                0.00 <span class="alert-danger p-1">Please Fund Account first</span>
                                        {{-- @elseif($amount != null )
                                            0.00 <span class="alert-danger p-1">Transaction is yet to be verifed. it might take a few minute </span> --}}
                                        @endif
                                    </h5>
                                
                                </div>
                    </div>
                 <div class="col-12 my-1">
                     <div class="form-group my-1">
                        <select name="investment_product" id="investment_product" class="form-select @error('stock_product') border-danger @enderror">
                            <option value="">Select investment</option>
                            <option value="Hedge Fund Investment" id="">Hedge Fund Investment</option>
                            <option value="Individual Retirement Investment" id="">Individual Retirement Investment</option>
                            <option value="Child Savings Investment" id="">Child Savings Investment</option>
                            <option value="Health Savings Investment" id="">Health Savings Investment</option>
                            <option value="Stock Trading Investment" id="">Stock Trading Investment</option>
                        </select>
                      
                     </div>
                         @error('investment_product')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                     <div class="form-group my-2">
                         <input type="number" name="amount" id="" class="form-control" placeholder="amount" value="{{ old('amount') }}">
                     </div>
                     @error('amount')
                     <div class="text-danger">{{ $message }}</div>
                    @enderror
                 </div>
                 <div class="col-12 my-1">
                     <button type="submit" class="btn btn-primary w-100 fw-bolder py-2 fs-4">Deposited</button>
                 </div>
            </div>

         </form>
    </div>
    {{-- <div class="col-md-6 my-4">
        <h2 class="bg-primary text-light my-2 text-center">CRYPTO</h2>
        <form action="{{ route('invest') }}" method="post" class="text-center p-3">
            @csrf
             <div class="row text-start">
               
                 <div class="col-12 my-1">
                            <label for="network" class="fw-bolder">Balance</label>
                            <div class="form-control p-0 d-flex ">
                                <i class=" btn fas fa-dollar-sign my-auto"></i><h5 class="my-auto">@if( $amount != null) {{ $amount['amount'] }}@else 
                             0.00
                          @endif</h5>
                             
                            </div>
                 </div>
                 <div class="col-12 my-1">
                     <div class="form-group my-1">
                        <select name="crypto_coin" id="" class="form-select">
                            <option value="">Select crypto investment</option>
                            <option value="Bitcoin">Bitcoin</option>
                            <option value="Etherum">Etherum</option>
                            <option value="Litecoin">Litecoin</option>
                            <option value="Tether">Tether</option>
                            <option value="Bitcoin Cash">Bitcoin Cash</option>
                            <option value="Dogecoin">Dogecoin</option>
                            <option value="Stellar">Stellar</option>
                            <option value="Polkadot">Polkadot</option>
                            <option value="Tron">Tron</option>
                        </select>
                         @error('crypto_coin')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                     </div>
                     <div class="form-group my-2">
                        <input type="number" name="crypto_amount" id="" class="form-control" placeholder="amount">
                    </div>
                    @error('crypto_amount')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                 </div>
                 <div class="col-12 my-1">
                     <button type="submit" class="btn btn-primary w-100 fw-bolder py-2 fs-4">Deposited</button>
                 </div>
             </div>
         
         
         
         
         
         </form>
    </div> --}}
</div>

@endsection