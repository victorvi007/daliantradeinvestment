<?php

namespace App\Http\Controllers;


use App\Models\tron;
use App\Models\tether;
use App\Models\bitcoin;
use App\Models\etherum;
use App\Models\stellar;
use App\Models\dogecoin;
use App\Models\litecoin;
use App\Models\polkadot;
use App\Models\withdraw;
use App\Models\csi_profit;
use App\Models\hfi_profit;
use App\Models\hsi_profit;
use App\Models\iri_profit;
use App\Models\sti_profit;
use App\Models\bitcoin_cash;
use Illuminate\Http\Request;
use App\Models\verify_account;
use App\Models\account_balance;

class WithdrawController extends Controller
{
    public function withdraw(){
        $id = auth()->id(); 
        $totalAmount = account_balance::find($id);
        $verify_account = verify_account::find($id);

           //stocks
   $hfi = hfi_profit::find($id);
   $iri = iri_profit::find($id);
   $csi = csi_profit::find($id);
   $hsi = hsi_profit::find($id);
   $sti = sti_profit::find($id);
 
   //crypto
   $btc = bitcoin::find($id);
   $eth = etherum::find($id);
   $ltc = litecoin::find($id);
   $tether = tether::find($id);
   $btc_cash = bitcoin_cash::find($id);
   $dogecoin = dogecoin::find($id);
   $stl = stellar::find($id);
   $pkd = polkadot::find($id);
   $tron = tron::find($id);

        $stockProfitSum ;
        $stockProfit =  [ (isset($hfi->profit))?$hfi->profit: 0, (isset($iri->profit))?$iri->profit:0,(isset($csi->profit))?$csi->profit:0,(isset($hsi->profit))?$hsi->profit:0,(isset($sti->profit))?$sti->profit:0];
        
   
        $stockProfitSum = array_sum($stockProfit);
       
        $coinProfit = [(isset($btc->profit))?$btc->profit:0,
                       (isset($eth->profit))?$eth->profit:0,
                       (isset($ltc->profit))?$ltc->profit:0,
                       (isset($tether->profit))?$tether->profit:0,
                       (isset($btc_cash->profit))?$btc_cash->profit:0,
                       (isset($dogecoin->profit))?$dogecoin->profit:0,
                       (isset($stl->profit))?$stl->profit:0,
                       (isset($pkd->profit))?$pkd->profit:0,
                       (isset($tron->profit))?$tron->profit:0];
   
        $coinProfitSum = array_sum($coinProfit);
        $totalProfit = $stockProfitSum + $coinProfitSum;
        
        // dd($verify_account);
        return view('dashboard.withdraw',['amount'=>$totalAmount,
        'verify'=>$verify_account,'totalProfit'=>$totalProfit]
    );
    }
   

  
    public function store_withdraw(Request $request){
        $this->validate($request,[
            'amount'=>'required'
        ]);
        
        $id = auth()->id(); 
        $totalAmount = account_balance::find($id);
        $withdrwal_table = withdraw::find($id);
        $verify_account = verify_account::find($id);

                   //stocks
   $hfi = hfi_profit::find($id);
   $iri = iri_profit::find($id);
   $csi = csi_profit::find($id);
   $hsi = hsi_profit::find($id);
   $sti = sti_profit::find($id);
 
   //crypto
   $btc = bitcoin::find($id);
   $eth = etherum::find($id);
   $ltc = litecoin::find($id);
   $tether = tether::find($id);
   $btc_cash = bitcoin_cash::find($id);
   $dogecoin = dogecoin::find($id);
   $stl = stellar::find($id);
   $pkd = polkadot::find($id);
   $tron = tron::find($id);

        $stockProfitSum ;
        $stockProfit =  [ (isset($hfi->profit))?$hfi->profit: 0, (isset($iri->profit))?$iri->profit:0,(isset($csi->profit))?$csi->profit:0,(isset($hsi->profit))?$hsi->profit:0,(isset($sti->profit))?$sti->profit:0];
        
   
        $stockProfitSum = array_sum($stockProfit);
       
        $coinProfit = [(isset($btc->profit))?$btc->profit:0,
                       (isset($eth->profit))?$eth->profit:0,
                       (isset($ltc->profit))?$ltc->profit:0,
                       (isset($tether->profit))?$tether->profit:0,
                       (isset($btc_cash->profit))?$btc_cash->profit:0,
                       (isset($dogecoin->profit))?$dogecoin->profit:0,
                       (isset($stl->profit))?$stl->profit:0,
                       (isset($pkd->profit))?$pkd->profit:0,
                       (isset($tron->profit))?$tron->profit:0];
   
        $coinProfitSum = array_sum($coinProfit);
        $totalProfit = ceil($stockProfitSum + $coinProfitSum);
        // dd($totalAmount->amount.'   '.$totalProfit);


               if($totalAmount->amount+$totalProfit >= $request->amount){
                    //if balance is greater
                    if($withdrwal_table == null){
                        //if  user does not exist
                        
                        $withdraw = new withdraw;
                        $withdraw ->user_id = $id;
                        $withdraw -> amount = $request->amount;
                        $withdraw -> save();
                        
                   
                        return back()->with('success', $request->amount.' will be processed and paid to the address you specified as your bitcoin wallet. This would take 24 hours. On rare occasions, this could take up to 48 hours. Your funds will not be deducted until they are paid.');

                    }else{
                        // if  user does  exist
                        $withdraw =  withdraw::find($id);
                        $withdraw -> user_id = $id;
                        $withdraw -> amount = $withdrwal_table->amount + $request->amount;
                        $withdraw -> save();

                      
                        return back()->with('success', $request->amount.' will be processed and paid to the address you specified as your bitcoin wallet. This would take 24 hours. On rare occasions, this could take up to 48 hours. Your funds will not be deducted until they are paid.');

                    }
                   

               }else{
                return back()->with('failed','Insufficient balance');

               
            
               };


        


       
    }
}
