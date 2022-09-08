@extends('layout.admin')

@section('content')

<div class="">

    <div class="m-0">
      
       
        <div class="p-2 my-2 bg-primary text-light">
            <h3>Payment awaiting verification</h3>
         
        </div>
        <div class="row">

            
            @if($payment->count())
            @foreach($payment as $payment)
            <div class="col-12 col-md-6 col-lg-6">
                    <form action="{{ route('approve',$payment->user_id) }}" method="post">
                        @csrf
                        <div class="card custom-card py-2 ">
                            <div class="p-2 my-2 d-flex justify-content-between">
                                <h6>Name</h6>
                                <h6 class="">{{ $payment->user->name }}</h6>
                                
                            </div>
                            <div class="p-2 my-2 d-flex justify-content-between">
                                <h6>Email</h6>
                                <h6 class="">{{ $payment->user->email }}</h6>
                                
                            </div>
                            <div class="p-2 my-2 d-flex justify-content-between">
                                <h6>Username</h6>
                                <h6 class="">{{ $payment->user->username }}</h6>
                                
                            </div>
                            <div class="p-2 my-2 d-flex justify-content-between">
                                    <h6>Amount</h6>
                                    <h6 class="">${{ $payment->amount }}</h6>
                                    
                            </div>
                            <div class="form-group text-end p-1">
                                <button type="submit" class="btn btn-light fw-bolder  text-dark py-2">Approve</button>
                            </div>
                        </div>
                        
                    </form>
            </div>
            
           
            @endforeach
            
            @else
            <h4 class="text-center text-secondary">Nothing to verify Yet</h4>

            @endif
        </div>
    </div>
</div>
@endsection