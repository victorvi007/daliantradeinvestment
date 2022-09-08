<?php

namespace App\Http\Controllers\Admin;

use App\Models\verify_bank;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApprovePaymentController extends Controller
{
    public function approve_payment(){
        
        $payment = verify_bank::get();
        return view('admin.admin_approve_payment',['payment'=>$payment]);
    }

    // public function approve($user_id){
        
    //   dd($user_id);
    // }
}
