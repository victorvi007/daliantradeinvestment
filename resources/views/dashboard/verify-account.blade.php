@extends('layout.dashboard')

@section('content')
<form action="{{ route('account-verify') }}" method="post" class="container">
    @if(session('success'))
    <div class="alert alert-success p-2 my-1 text-center">{{ session('success') }}</div>
    @endif
    @csrf
    <h6 class="text-primary my-4">Provide us with a valid document to verify your account (ID card). Driver's licenses, valid work ID cards, passports, and other forms of 
        identification are accepted. Please do not attempt to upload a forged document, as our support staff examines each one. If fraudulent papers 
        are discovered, your account will be suspended immediately! Our support staff evaluates your material after it has been uploaded and 
        responds within three business days. The documents that have been posted are strictly for verification purposes and will be removed after they 
        have been validated. Once your document has been confirmed, you will receive an email notification.
        Select your document and press the "Verify" button.</h6>
    <div class="row">
        <div class="col-12 mb-3">
            <label for="" class="fw-bolder text-primary">Account Email</label>
            <div class="form-group">
                <input type="email" name="account_email"  id="account_email" class="form-control">
            </div>
            @error('account_email')
                <div class="alert-danger p-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mb-3">
           
            <div class="form-group">
                <select name="document_type" class="form-select" id="document_type">
                    <option value="">Select</option>
                    <option value="ID CARD">ID CARD</option>
                    <option value="Drivers Licence">Drivers licence</option>
                </select>
            </div>
            @error('document_type')
            <div class="alert-danger p-2">{{ $message }}</div>
            @enderror
            <div class="col-12 mb-3">
                
                <label for="front" class="fw-bolder text-primary">Front</label>
                    <input type="file" name="front"  id="front" class="form-control">
                    @error('front')
                        <div class="alert-danger p-2">{{ $message }}</div>
                    @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="back" class="fw-bolder text-primary">Back</label>
                    <input type="file" name="back"  id="back" class="form-control">
                    @error('back')
                        <div class="alert-danger p-2">{{ $message }}</div>
                    @enderror
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="w-100 btn btn-primary fw-bolder py-3">Verify Account</button>
        </div>

     
    </div>
</form>
@endsection