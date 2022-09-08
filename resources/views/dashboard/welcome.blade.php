@extends('layout.sensor')

@section('content')
<form action="{{ route('logout') }}" method="post">
    @csrf
    <div class="container mt-5" style="min-height:90vh;">
        <h3 class="text-center text-primary">Notice</h3>
        <h4 class="text-dark m-4">
            <span class="d-block fw-bolder">Dear Valued Investor</span>
            DaliantradeInvestment is pleased to greet you. Because of the wide range of investors from across the world and the mismatch in transaction rates, Daliantradeinvestment has chosen to pay and receive payments from investors using bitcoin.
        </h4>
        <div class="row">
            <div class="col-6 mb-3 text-start">
               
                <button type="submit" class="btn btn-default h3 w-50"> <i class="fad fa-arrow-back"></i> Go Back</button>
            </div>
            <div class="col-6 mb-3 text-end">
                <a href="{{ route('wallet') }}" class="btn btn-success text-light h3 w-50">Proceed</a>
            </div>
            
    
         
        </div>
    </div>
   
</form>
@endsection