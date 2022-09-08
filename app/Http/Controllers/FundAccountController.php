<?php

namespace App\Http\Controllers;

use App\Models\verify_bank;
use Illuminate\Http\Request;
use App\Mail\InvestmentNotice;
use Illuminate\Support\Facades\Mail;
// use App\Models\account_balance;

class FundAccountController extends Controller
{
    public function fund_account(){
       
        return view('dashboard.deposit');
        
    }
    public function store_fund_account(Request $request){
       
        $this->validate($request, [
            'amount'=>'required|max:255',
            ]); 

            $id = auth()->id(); 
            $account = verify_bank::find($id);

            $amount = $request->amount;
            if($account === null ){

                $account_balance = new verify_bank;
                $account_balance ->user_id = auth()->id();
                $account_balance -> amount = $request->amount;
                $account_balance -> verified = 0;
                $account_balance -> save();
    
                
                Mail::to('admin@daliantradeinvestment.com')->send(new InvestmentNotice($amount));
                return back()->with('status', 'Transaction will be verified and your account would instantly be credited');

            }else{
                $account -> amount = $request->amount + $account->amount;
                $account -> verified = 0;
                $account -> save();
                Mail::to('admin@daliantradeinvestment.com')->send(new InvestmentNotice($amount));
                return back()->with('status', 'Transaction will be verified and your account would instantly be credited');

            };
            
        
        
    }
 
  
}
