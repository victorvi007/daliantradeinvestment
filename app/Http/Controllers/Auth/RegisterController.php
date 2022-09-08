<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\DalianTradeInvestment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        $this->validate($request, [
        'fullname'=>'required|max:255',
        'username'=>'required|max:255',
        'phone'=>'required',
        'email'=>'required|email|max:255',
        'password'=>'required|confirmed|min:6',
        'country'=>'required|max:255',
        'state'=>'required|max:255',
        'investment_plan'=>'required'
        ]);  

       $checker = User::whereEmail($request->email)->first();
        if($checker == true){
            return back()->with('status', $request->email.' is already registered');
        }else{        
            $user = new User;
            $user -> name = $request->fullname;
            $user -> username = $request->username;
            $user -> phone = $request->phone;
            $user -> email = $request->email;
            $user -> password = Hash::make($request->password);
            $user -> country = $request->country;
            $user -> state = $request->state;
            $user -> investment_plan = $request->investment_plan;
            $user -> save();
           
            $name = $request->fullname;
            $username = $request->username;
            $email = $request->email;
            
            Mail::to($request->email)->send(new DalianTradeInvestment($name,$username,$email));
            auth()->attempt($request->only('email','password'));
            return redirect()->route('welcome');


        };


       
    }
}
