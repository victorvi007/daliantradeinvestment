<?php

namespace App\Http\Controllers\Admin;

use App\Models\verify_bank;
use Illuminate\Http\Request;
use App\Mail\CreditTransaction;
use App\Models\account_balance;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ApproveController extends Controller
{
    public function approve($user_id){


        $balance = account_balance::find($user_id);
        $toApprove = verify_bank::find($user_id);

        $email = $toApprove->user->email;
        $name = $toApprove->user->name;
        $amount = $toApprove->amount;

            if($balance != null){
                $balance -> amount = $balance->amount + $toApprove->amount;
                $balance -> save();
                Mail::to($email)->send(new CreditTransaction($name,$amount));
                $toApprove->delete();




                return redirect()->route('approve-payment');
            }else{
                $balance = new account_balance;
                $balance ->user_id = $user_id;
                $balance -> amount = $toApprove->amount;
                $balance -> save();
                Mail::to($email)->send(new CreditTransaction($name,$amount));
                $toApprove->delete();
                return redirect()->route('approve-payment');
            };


          
       
    }
}
