<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\verify_account;
use App\Models\account_balance;

class AccountDetailsController extends Controller
{
    public function account_details(){

        $id = auth()->id(); 
        $user = User::find($id);
        $balance = account_balance::find($id);
        $verified = verify_account::find($id);
        // dd($user);
        return view('dashboard.account-details',['data'=>$user,'balance'=>$balance,'verified'=>$verified]);
    }
    
   
    
}
