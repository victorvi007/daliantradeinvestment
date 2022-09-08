<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletAddressUpdateController extends Controller
{
   

    public function store_wallet_addresss_update(Request $request){
        $this->validate($request,[
            'address'=>'required'
        ]);
      
                $id = auth()->id();
        $user =  wallet::find($id);
        $user -> user_id = $id;
        $user -> address = $request->address;
        $user -> save();
        return redirect()->route('address-update');


       
    } 
    public function wallet_addresss_update(){
        $id = auth()->id();
        $user =  wallet::find($id);
        $address = $user;
        return view('dashboard.update_address',['address'=>$address]);
    }
}
