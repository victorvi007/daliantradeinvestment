<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function support(){
        $id = auth()->id();

        $user = User::find($id);
        return view('dashboard.support',['user'=>$user]);
    }

    public function store_support(Request $request){
        $this->validate($request, [
        'subject'=>'required|max:255',
        'msg'=>'required|max:255',
     
        ]);  

        $id = auth()->id();

        $user = User::find($id);

        $support = new Support;
        $support ->user_id = $id;
        $support -> email = $user->email;
        $support -> subject = $request->subject;
        $support -> msg = $request->msg;
        $support -> save();
        
        return back()->with('success', 'Support Mail sent!! We will contact you on '.$user->email); 


    }
}
