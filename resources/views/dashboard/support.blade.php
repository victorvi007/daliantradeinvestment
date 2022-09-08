@extends('layout.dashboard')

@section('content')
<form action="{{ route('support') }}" method="post">
    @csrf
    @if(session('success'))
    <h5 class="alert alert-success p-2 text-center m-2">{{ session('success') }}</h5>
    @endif
    <h5 class="text-primary my-4">Please contact us immediately when you need assistance</h5>
    <div class="row">
        <div class="col-12 mb-3">
            <label for="" class="fw-bolder">Account Email</label>
            <div class="form-group">
                <input type="text"  value="{{ $user['email'] }}" disabled name="account_email" id="account_email" class="form-control">
            </div>
                @error('account_email')
                    <div class="alert-danger p-2">{{ $message }}</div>
                @enderror
        </div>
        <div class="col-12 mb-3">
            <label for="subject" class="fw-bolder">Subject</label>
            <div class="form-group">
                <input type="text" name="subject" id="subject" class="form-control">
            </div>
                @error('subject')
                    <div class="alert-danger p-2">{{ $message }}</div>
                @enderror
        </div>
        <label for="msg" class="fw-bolder">Message</label>
        <div class="col-12 mb-3">
            <textarea name="msg" class="form-control" id="msg" cols="30" rows="10"></textarea>
            @error('msg')
                <div class="alert-danger p-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="w-100 btn btn-primary fw-bolder">Send Message</button>
        </div>
    </div>
</form>
@endsection