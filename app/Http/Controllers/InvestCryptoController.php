<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\Models\tron;
use App\Models\tether;
use App\Models\bitcoin;
use App\Models\etherum;
use App\Models\stellar;
use App\Models\dogecoin;
use App\Models\litecoin;
use App\Models\polkadot;
use App\Models\bitcoin_cash;
use Illuminate\Http\Request;
use App\Models\crypto_invest;
use App\Models\account_balance;


class InvestCryptoController extends Controller
{
    public function crypto_invest(){
        $id = auth()->id(); 
        // $user = User::find($id);
        $balance = account_balance::find($id);

        return view('dashboard.invest_crypto',['amount'=>$balance]);
    }


    public function store_crypto_invest(Request $request){

        $this->validate($request, [
            
            'amount'=>'required',
            'crypto'=>'required',
            ]); 

        $id = auth()->id(); 
        $totalAmount = account_balance::find($id);

        if($totalAmount === null|| $totalAmount->amount == 0){
            //if balance doesnt exist
            return back()->with('failed', ' Please Fund your account First');
        }else{
           
            if($totalAmount->amount >= $request->amount){
                //if balance is greater
                $id = auth()->id(); 
           
                $investment_id = bitcoin::find($id);
                if($request->crypto == "Bitcoin"){
                    if($investment_id == null){
                    // if id doesnt exist
                        $investment = new bitcoin;
                        $investment->user_id = auth()->id();
                        $investment-> product = $request->crypto;
                        $investment-> amount = $request->amount;
                        $investment-> profit = 0;
                        $investment-> bot = 0;
                        $investment-> save();

                        $totalAmount -> amount =  $totalAmount->amount - $request->amount;
                        $totalAmount -> save();
                        return back()->with('success', $request->amount.' has been invested');
                        // return redirect()->route('crypto-invest');

                }else{
                    //if id exist

                        $db_data = bitcoin::find($id);
                        $db_data = bitcoin::find($id)->update([
                            'amount'=>$db_data->amount + $request->amount
                        ]);
                    
                        
                   
                        $totalAmount -> amount = $totalAmount->amount - $request->amount ;
                        $totalAmount -> save();
                        // dd($totalAmount);
                        // return redirect()->route('crypto-invest'); 
                        return back()->with('success', $request->amount.' has been invested');
                   
                }
             
            }
            $investment_id = etherum::find($id);
            if($request->crypto == "Etherum"){
                if($investment_id == null){
                    // if id doesnt exist
                        $investment = new etherum;
                        $investment->user_id = $id;
                        $investment-> product = $request->crypto;
                        $investment-> amount = $request->amount;
                        $investment-> profit = 0;
                        $investment-> bot = 0;
                        $investment-> save();

                        $totalAmount -> amount =  $totalAmount->amount - $request->amount;
                        $totalAmount -> save();
                        // return redirect()->route('crypto-invest');
                        return back()->with('success', $request->amount.' has been invested');

                }else{
                    //if id exist
                        $db_data = etherum::find($id);
                        $db_data = etherum::find($id)->update([
                            'amount'=>$db_data->amount + $request->amount
                        ]);
                    
                        
                   
                        $totalAmount -> amount = $totalAmount->amount - $request->amount ;
                        $totalAmount -> save();
                        // dd($totalAmount);
                        // return redirect()->route('crypto-invest'); 
                        return back()->with('success', $request->amount.' has been invested');
                   
                }
             
            }
            $investment_id = litecoin::find($id);
            if($request->crypto == "Litecoin"){
                if($investment_id == null){
                    // if id doesnt exist
                        $investment = new litecoin;
                        $investment->user_id = auth()->id();
                        $investment-> product = $request->crypto;
                        $investment-> amount = $request->amount;
                        $investment-> profit = 0;
                        $investment-> bot = 0;
                        $investment-> save();

                        $totalAmount -> amount =  $totalAmount->amount - $request->amount;
                        $totalAmount -> save();
                        // return redirect()->route('crypto-invest');
                        return back()->with('success', $request->amount.' has been invested');

                }else{
                    //if id exist
                        $db_data = litecoin::find($id);
                        $db_data = litecoin::find($id)->update([
                            'amount'=>$db_data->amount + $request->amount
                        ]);
                    
                        
                   
                        $totalAmount -> amount = $totalAmount->amount - $request->amount ;
                        $totalAmount -> save();
                        // dd($totalAmount);
                        // return redirect()->route('crypto-invest'); 
                        return back()->with('success', $request->amount.' has been invested');
                   
                }
             
            }
            $investment_id = tether::find($id);
            if($request->crypto == "Tether"){
                if($investment_id == null){
                    // if id doesnt exist
                        $investment = new tether;
                        $investment->user_id = auth()->id();
                        $investment-> product = $request->crypto;
                        $investment-> amount = $request->amount;
                        $investment-> profit = 0;
                        $investment-> bot = 0;
                        $investment-> save();

                        $totalAmount -> amount =  $totalAmount->amount - $request->amount;
                        $totalAmount -> save();
                        // return redirect()->route('crypto-invest');
                        return back()->with('success', $request->amount.' has been invested');

                }else{
                    //if id exist
                        $db_data = tether::find($id);
                        $db_data = tether::find($id)->update([
                            'amount'=>$db_data->amount + $request->amount
                        ]);
                    
                        
                   
                        $totalAmount -> amount = $totalAmount->amount - $request->amount ;
                        $totalAmount -> save();
                        // dd($totalAmount);
                        // return redirect()->route('crypto-invest'); 
                        return back()->with('success', $request->amount.' has been invested');
                   
                }
             
            }
            $investment_id = bitcoin_cash::find($id);
            if($request->crypto == "Bitcoin Cash"){
                if($investment_id == null){
                    // if id doesnt exist
                        $investment = new bitcoin_cash;
                        $investment->user_id = auth()->id();
                        $investment-> product = $request->crypto;
                        $investment-> amount = $request->amount;
                        $investment-> profit = 0;
                        $investment-> bot = 0;
                        $investment-> save();

                        $totalAmount -> amount =  $totalAmount->amount - $request->amount;
                        $totalAmount -> save();
                        // return redirect()->route('crypto-invest');
                        return back()->with('success', $request->amount.' has been invested');

                }else{
                    //if id exist
                        $db_data = bitcoin_cash::find($id);
                        $db_data = bitcoin_cash::find($id)->update([
                            'amount'=>$db_data->amount + $request->amount
                        ]);
                    
                        
                   
                        $totalAmount -> amount = $totalAmount->amount - $request->amount ;
                        $totalAmount -> save();
                        // dd($totalAmount);
                        // return redirect()->route('crypto-invest'); 
                        return back()->with('success', $request->amount.' has been invested');
                   
                }
             
            }

            // /////
            $investment_id = dogecoin::find($id);
            if($request->crypto == "Dogecoin"){
                if($investment_id == null){
                    // if id doesnt exist
                        $investment = new dogecoin;
                        $investment->user_id = auth()->id();
                        $investment-> product = $request->crypto;
                        $investment-> amount = $request->amount;
                        $investment-> profit = 0;
                        $investment-> bot = 0;
                        $investment-> save();

                        $totalAmount -> amount =  $totalAmount->amount - $request->amount;
                        $totalAmount -> save();
                        // return redirect()->route('crypto-invest');
                        return back()->with('success', $request->amount.' has been invested');

                }else{
                    //if id existdogecoin
                        $db_data = dogecoin::find($id);
                        $db_data = dogecoin::find($id)->update([
                            'amount'=>$db_data->amount + $request->amount
                        ]);
                    
                        
                   
                        $totalAmount -> amount = $totalAmount->amount - $request->amount ;
                        $totalAmount -> save();
                        // dd($totalAmount);
                        // return redirect()->route('crypto-invest'); 
                        return back()->with('success', $request->amount.' has been invested');
                   
                }
             
            }
            $investment_id = stellar::find($id);
            if($request->crypto == "Stellar"){
                if($investment_id == null){
                    // if id doesnt exist
                        $investment = new stellar;
                        $investment->user_id = auth()->id();
                        $investment-> product = $request->crypto;
                        $investment-> amount = $request->amount;
                        $investment-> profit = 0;
                        $investment-> bot = 0;
                        $investment-> save();

                        $totalAmount -> amount =  $totalAmount->amount - $request->amount;
                        $totalAmount -> save();
                        // return redirect()->route('crypto-invest');
                        return back()->with('success', $request->amount.' has been invested');

                }else{
                    //if id exist
                        $db_data = stellar::find($id);
                        $db_data = stellar::find($id)->update([
                            'amount'=>$db_data->amount + $request->amount
                        ]);
                    
                        
                   
                        $totalAmount -> amount = $totalAmount->amount - $request->amount ;
                        $totalAmount -> save();
                        // dd($totalAmount);
                        // return redirect()->route('crypto-invest'); 
                        return back()->with('success', $request->amount.' has been invested');
                   
                }
             
            }
            $investment_id = polkadot::find($id);
            if($request->crypto == "Polkadot"){
                if($investment_id == null){
                    // if id doesnt exist
                        $investment = new polkadot;
                        $investment->user_id = auth()->id();
                        $investment-> product = $request->crypto;
                        $investment-> amount = $request->amount;
                        $investment-> profit = 0;
                        $investment-> bot = 0;
                        $investment-> save();

                        $totalAmount -> amount =  $totalAmount->amount - $request->amount;
                        $totalAmount -> save();
                        // return redirect()->route('crypto-invest');
                        return back()->with('success', $request->amount.' has been invested');

                }else{
                    //if id exist
                        $db_data = polkadot::find($id);
                        $db_data = polkadot::find($id)->update([
                            'amount'=>$db_data->amount + $request->amount
                        ]);
                    
                        
                   
                        $totalAmount -> amount = $totalAmount->amount - $request->amount ;
                        $totalAmount -> save();
                        // dd($totalAmount);
                        // return redirect()->route('crypto-invest'); 
                        return back()->with('success', $request->amount.' has been invested');
                   
                }
             
            }
            $investment_id = tron::find($id);
            if($request->crypto == "Tron"){
                if($investment_id == null){
                    // if id doesnt exist
                        $investment = new tron;
                        $investment->user_id = auth()->id();
                        $investment-> product = $request->crypto;
                        $investment-> amount = $request->amount;
                        $investment-> profit = 0;
                        $investment-> bot = 0;
                        $investment-> save();

                        $totalAmount -> amount =  $totalAmount->amount - $request->amount;
                        $totalAmount -> save();
                        // return redirect()->route('crypto-invest');
                        return back()->with('success', $request->amount.' has been invested');

                }else{
                    //if id exist
                        $db_data = tron::find($id);
                        $db_data = tron::find($id)->update([
                            'amount'=>$db_data->amount + $request->amount
                        ]);
                    
                        
                   
                        $totalAmount -> amount = $totalAmount->amount - $request->amount ;
                        $totalAmount -> save();
                        // dd($totalAmount);
                        // return redirect()->route('crypto-invest'); 
                        return back()->with('success', $request->amount.' has been invested');
                   
                }
             
            }

    }else{
        return back()->with('failed', 'Balance is insufficient for this transaction');
    }

        }
        
    }
 


   
}
