@extends('layout.admin')

@section('content')

<div class="">
    <h2 class="user my-2">Welcome  <span class="text-secondary text-lowercase">{{ auth()->user()->username }}</span> </h2>

    <div class="card ">
        {{-- <h4 class="bg-primary text-light w-100 p-3">Users</h4> --}}
       
        <div class="p-2 my-2 d-flex justify-content-between bg-primary text-light">
            <h5>Active Users</h5>
            <h5>Details</h5>
        </div>
        <div class="row">

           
            @if($users->count())
            @foreach($users as $user)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card custom-card py-2 m-2" >
                        <div class="p-2 d-flex justify-content-between">
                            <h6>Name: </h6>
                            <h6 class=""> {{$user->user->name}} </h6>
                        </div>
                        <div class="p-2 d-flex justify-content-between">
                            <h6>Amount invested: </h6>
                            <h6 class="">${{ $user->amount}}</h6>
                            
                         
                        </div>
                        
                        <div class="p-2 d-flex justify-content-between" style="overflow:hidden;">
                            <h6>Email: </h6>
                            <h6 class="">{{$user->user->email}} </h6>
                            
                        </div>
                        <div class="p-2 d-flex justify-content-between">
                            <h6>Country: </h6>
                            <h6 class="">{{$user->user->country}} </h6>
                            
                        </div>
                        <div class="p-2 d-flex justify-content-between">
                            <h6>State:</h6>
                            <h6 class="">{{$user->user->state}} </h6>
                            
                        </div>
                        <div class="icon"><i class="fas fa-users"></i></div>
                       
                </div>
            </div>
            @endforeach
            
            @else
            <h4 class="text-center text-secondary">No investment Yet</h4>

            @endif
        
     
        </div>


    </div>
    
</div>
@endsection