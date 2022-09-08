<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required',
           
            ]);  

           
            if(!auth()->attempt($request->only('email','password'),$request->remember)){
                return back()->with('status','Invalid login details');
            };
            $id = auth()->id(); 
        
            $wallet = wallet::find($id);
            $admin = User::find($id);
    
            if(['wallet'=>$wallet]['wallet'] == null){
                if($admin->username == 'administrator'){
                    return redirect()->route('admin-dashboard');
                }else{
                    return redirect()->route('welcome');
                };
                
            }else{
                return redirect()->route('dashboard');
            }
            
    }
}


