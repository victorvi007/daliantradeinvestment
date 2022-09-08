<?php

namespace App\Http\Controllers\Auth;

use App\Models\wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\WalletController;

class WalletController extends Controller
{
    public function wallet(){
        return view('auth.wallet');
    }

    public function store_wallet(Request $request){
        $this->validate($request, [
        'wallet_address'=>'required',
        ]);  

            auth()->attempt($request->only('email','password'));
      
        $wallet = new wallet;
        $wallet ->user_id = auth()->id();
        $wallet ->address = $request->wallet_address;
        $wallet -> save();

        return redirect()->route('dashboard');

        
    }
}
