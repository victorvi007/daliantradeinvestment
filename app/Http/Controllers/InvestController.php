<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\Models\invest;
use App\Models\csi_profit;
use App\Models\hfi_profit;
use App\Models\hsi_profit;
use App\Models\iri_profit;
use App\Models\sti_profit;
use Illuminate\Http\Request;
use App\Models\account_balance;


class InvestController extends Controller
{
  public function invest(){
        $id = auth()->id(); 
        // $user = User::find($id);
        $totalAmount = account_balance::find($id);
       
        return view('dashboard.invest',['amount'=>$totalAmount]);
    }
    
    public function store_invest(Request $request){

        

        $this->validate($request, [
            'investment_product'=>'required',
            'amount'=>'required|max:255',
            ]); 
           
            $id = auth()->id(); 
        $totalAmount = account_balance::find($id);

        if($totalAmount === null|| $totalAmount->amount == 0){
            //if balance doesnt exist
            return back()->with('failed', ' Please Fund your account First');

        }else{
                //if balance  exists
            if($totalAmount->amount >= $request->amount){
                        //if balance is greater
                    $id = auth()->id(); 
                   
                    $investment_id = hfi_profit::find($id);
                    if($request->investment_product == "Hedge Fund Investment"){
                        if($investment_id == null){
                            // if id doesnt exist
                                $investment = new hfi_profit;
                                $investment->user_id = auth()->id();
                                $investment-> product = $request->investment_product;
                                $investment-> amount = $request->amount;
                                $investment-> profit = 0;
                                $investment-> bot = 0;
                                $investment-> save();
    
                                $totalAmount -> amount =  $totalAmount->amount - $request->amount;
                                $totalAmount -> save();
                                // return redirect()->route('invest');
                                return back()->with('success', $request->amount.' has been invested');
    
                        }else{
                            //if id exist
                      
                            
                               
                                $db_data = hfi_profit::find($id);
                                $db_data = hfi_profit::find($id)->update([
                                    'amount'=>$db_data->amount + $request->amount
                                ]);
                            
                                
                           
                                $totalAmount -> amount = $totalAmount->amount - $request->amount ;
                                $totalAmount -> save();
                                // return redirect()->route('invest'); 
                                return back()->with('success', $request->amount.' has been invested');
                           
                        }
                     
                    }
                    $investment_id = iri_profit::find($id);
                    if($request->investment_product == "Individual Retirement Investment"){
                        if($investment_id == null){
                            // if id doesnt exist
                                $investment = new iri_profit;
                                $investment->user_id = auth()->id();
                                $investment-> product = $request->investment_product;
                                $investment-> amount = $request->amount;
                                $investment-> profit = 0;
                                $investment-> bot = 0;
                                $investment-> save();
    
                                $totalAmount -> amount =  $totalAmount->amount - $request->amount;
                                $totalAmount -> save();
                       
                                return back()->with('success', $request->amount.' has been invested');
    
                        }else{
                            //if id exist
                                $db_data = iri_profit::find($id);
                                $db_data = iri_profit::find($id)->update([
                                    'amount'=>$db_data->amount + $request->amount
                                ]);
                            
                                
                           
                                $totalAmount -> amount = $totalAmount->amount - $request->amount ;
                                $totalAmount -> save();
                          
                                return back()->with('success', $request->amount.' has been invested');
                           
                        }
                     
                    }
                    $investment_id = csi_profit::find($id);
                    if($request->investment_product == "Child Savings Investment"){
                        if($investment_id == null){
                            // if id doesnt exist
                                $investment = new csi_profit;
                                $investment->user_id = auth()->id();
                                $investment-> product = $request->investment_product;
                                $investment-> amount = $request->amount;
                                $investment-> profit = 0;
                                $investment-> bot = 0;
                                $investment-> save();
    
                                $totalAmount -> amount =  $totalAmount->amount - $request->amount;
                                $totalAmount -> save();
                            return back()->with('success', $request->amount.' has been invested');
    
                        }else{
                            //if id exist
                                $db_data = csi_profit::find($id);
                                $db_data = csi_profit::find($id)->update([
                                    'amount'=>$db_data->amount + $request->amount
                                ]);
                            
                                
                           
                                $totalAmount -> amount = $totalAmount->amount - $request->amount ;
                                $totalAmount -> save();
                                // dd($totalAmount);
                                return back()->with('success', $request->amount.' has been invested');
                           
                        }
                     
                    }
                    $investment_id = hsi_profit::find($id);
                    if($request->investment_product == "Health Savings Investment"){
                        if($investment_id == null){
                            // if id doesnt exist
                                $investment = new hsi_profit;
                                $investment->user_id = auth()->id();
                                $investment-> product = $request->investment_product;
                                $investment-> amount = $request->amount;
                                $investment-> profit = 0;
                                $investment-> bot = 0;
                                $investment-> save();
    
                                $totalAmount -> amount =  $totalAmount->amount - $request->amount;
                                $totalAmount -> save();
                                return back()->with('success', $request->amount.' has been invested');
    
                        }else{
                            //if id exist
                                $db_data = hsi_profit::find($id);
                                $db_data = hsi_profit::find($id)->update([
                                    'amount'=>$db_data->amount + $request->amount
                                ]);
                            
                                
                           
                                $totalAmount -> amount = $totalAmount->amount - $request->amount ;
                                $totalAmount -> save();
                                // dd($totalAmount);
                                return back()->with('success', $request->amount.' has been invested');
                           
                        }
                     
                    }
                    $investment_id = sti_profit::find($id);
                    if($request->investment_product == "Stock Trading Investment"){
                        if($investment_id == null){
                            // if id doesnt exist
                                $investment = new sti_profit;
                                $investment->user_id = auth()->id();
                                $investment-> product = $request->investment_product;
                                $investment-> amount = $request->amount;
                                $investment-> profit = 0;
                                $investment-> bot = 0;
                                $investment-> save();
    
                                $totalAmount -> amount =  $totalAmount->amount - $request->amount;
                                $totalAmount -> save();
                                return back()->with('success', $request->amount.' has been invested');
    
                        }else{
                            //if id exist
                                $db_data = sti_profit::find($id);
                                $db_data = sti_profit::find($id)->update([
                                    'amount'=>$db_data->amount + $request->amount
                                ]);
                            
                                
                           
                                $totalAmount -> amount = $totalAmount->amount - $request->amount ;
                                $totalAmount -> save();
                           
                                return back()->with('success', $request->amount.' has been invested'); 
                           
                        }
                     
                    }

            }else{
                return back()->with('failed', 'Balance is insufficient for this transaction');
            }

        }
        
    }

}
