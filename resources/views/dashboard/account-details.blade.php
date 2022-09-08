@extends('layout.dashboard')

@section('content')
<div class="container">
    <div class="my-3 text-center">
        {{-- <img src="{{ asset('img/avater.jpg') }}" class="rounded-circle" alt="" style="height:200px;width:200px;"> --}}
        <h2 class="fw-bolder text-primary">{{ auth()->user()->name }}</h2>
    </div>

    <div class="card text-secondary">
        <h4 class="bg-primary text-light w-100 p-3"></h4>
        
        
        <div class="p-2 my-2 d-flex justify-content-between bg-primary text-light">
            <h6>Email</h6>
            <h6>{{ $data['email'] }}</h6>
        </div>
        <div class="p-2 my-2 d-flex justify-content-between">
            <h6>Country</h6>
            <h6>{{ $data['country'] }}</h6>
        </div>
        <div class="p-2 my-2 d-flex justify-content-between bg-primary text-light">
            <h6>Phone</h6>
            <h6>{{ $data['phone'] }}</h6>
        </div>
        <div class="p-2 my-2 d-flex justify-content-between">
            <h6>Trade Currency</h6>
            <h6>USD</h6>
        </div>
        <div class="p-2 my-2 d-flex justify-content-between bg-primary text-light">
            <h6>Current Balance</h6>
            <h6>
                @if($balance != null)
                ${{ $balance['amount'] }}
                @else
                    $0.00
                @endif
            </h6>
        </div>
        
        <div class="p-2 my-2 d-flex justify-content-between">
            <h6>date Joined</h6>
            <h6>{{ $data['created_at']->isoFormat('Do MMM YYYY') }}</h6>
        </div>
        <div class="p-2 my-2 d-flex justify-content-between bg-primary text-light">
            <h6>Account Status</h6>
            <h6>@if($verified['verified'] != 0)
                    Verified
                @else
                    Unverified
                @endif
            </h6>
        </div>
        
    </div>
    
</div>
@endsection