@extends('layout.admin')

@section('content')

<div class="">
    <h2 class="user my-2">Welcome  <span class="text-secondary text-lowercase">{{ auth()->user()->username }}</span> </h2>

    <div class="card ">
        {{-- <h4 class="bg-primary text-light w-100 p-3">Users</h4> --}}
       
        <div class="p-2 my-2 d-flex justify-content-between bg-primary text-light">
            <h5>All users</h5>
            <h5>Details</h5>
        </div>
        <div class="row">

           
            @if($users->count())
            @foreach($users as $user)
            @if($user->username != 'administrator')
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card custom-card py-2 m-2" style="background-color:#920c97;">
                        <div class="p-2 d-flex justify-content-between">
                            <h6>Name: </h6>
                            <h6 class=""> {{$user->name}} </h6>
                        </div>
                        <div class="p-2 d-flex justify-content-between">
                            <h6>Username: </h6>
                            <h6 class="">{{ $user->username}}</h6>
                            
                         
                        </div>
                        <div class="p-2 d-flex justify-content-between">
                            <h6>Investment:</h6>
                            <h6 class="">{{ $user->investment_plan}}</h6>
                            
                         
                        </div>
                        <div class="p-2 d-flex justify-content-between">
                            <h6>Number:</h6>
                            <h6 class="">{{ $user->phone}}</h6>
                            
                         
                        </div>
                        
                        <div class="p-2 d-flex justify-content-between">
                            <h6>Email:</h6>
                            <h6 class="">{{$user->email}} </h6>
                            
                        </div>
                        <div class="p-2 d-flex justify-content-between">
                            <h6>Country:</h6>
                            <h6 class="">{{$user->country}} </h6>
                            
                        </div>
                        <div class="p-2 d-flex justify-content-between">
                            <h6>State:</h6>
                            <h6 class="">{{$user->state}} </h6>
                            
                        </div>
                        <div class="p-2 d-flex justify-content-between">
                            <h6>Time-Date:</h6>
                            <h6 class="">
                                {{$user->created_at->diffForHumans()}} -
                                {{$user->created_at->isoFormat('Do MMM YYYY')}} 
                                {{-- {{$user->created_at->isoFormat('H:M:s')}}  --}}
                                {{-- {{$user->created_at->toTimeString('H:i:s')}}  --}}
                            </h6>
                            
                        </div>
                        <div class="icon"><i class="fas fa-users"></i></div>
                       
                </div>
            </div>
            @endif
            @endforeach
            
            @else
            <h4 class="text-center text-secondary">No Users Yet</h4>

            @endif
        
     
        </div>


    </div>
    
</div>
@endsection