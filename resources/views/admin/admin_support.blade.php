@extends('layout.admin')

@section('content')

<div class="">

    <div class="card ">
      
       
        <div class="p-2 my-2  bg-primary text-light">
            <h3>Support Email</h3>
         
        </div>
            @if($mail->count())
            @foreach($mail as $mail)
                <div class="card py-2 m-2">
                    <div class="p-2 my-2 fw-bolder">
                       Name
                        {{ $mail->user->name }}

                    </div>
                    <h4 class="p-2 fw-bolder text-primary text-capitalise">
                      Reply email:{{ $mail->email }}
                    </h4>
                    <h4 class="p-2 fw-bolder text-primary text-capitalise">
                      Subject:{{ $mail->subject }}
                    </h4>

                    <p class="p-2 my-2">
                        {{ $mail->msg }}
                    </p>

 
            </div>
           
            @endforeach
            
            @else
            <h4 class="text-center text-secondary">No mail yet</h4>

            @endif
        
     



  


    </div>
    
</div>
@endsection