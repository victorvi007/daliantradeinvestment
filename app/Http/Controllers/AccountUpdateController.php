<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AccountUpdateController extends Controller
{
 

    public function store_account_update(Request $request){
        $this->validate($request, [
        'password'=>'required|confirmed|min:6',
        
        ]);  
        
            $id = auth()->id(); 
        $user = User::find($id);
        $user -> password = Hash::make($request->password);
        $user -> save();
        return redirect()->route('account-update');
    }

    public function account_update(){
        $id = auth()->id(); 
        $user = User::find($id);
        return view('dashboard.account-update',['data'=>$user]);
    }
}
