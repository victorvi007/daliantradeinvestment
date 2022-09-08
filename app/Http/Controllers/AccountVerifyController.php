<?php

namespace App\Http\Controllers;

use App\Models\verify_account;
use Illuminate\Http\Request;


class AccountVerifyController extends Controller
{
   public function account_verify(){
    return view('dashboard.verify-account');
   }

   
   public function store_account_verify(Request $request){
      $this->validate($request, [
      'account_email'=>'max:255',
      'document_type'=>'required',
      'front'=>'required',
      'back'=>'required',
      ]);

      $verify_account = new verify_account;
      $verify_account ->user_id = auth()->id();
      $verify_account -> email = $request->account_email;
      $verify_account -> document_type = $request->document_type;
      $verify_account -> front = $request->front;
      $verify_account -> back = $request->back;
      $verify_account -> verified = 0;
      $verify_account -> save();
     
      return back()->with('success',' Document Submitted will be verified within 24hrs'); 
  }
}
