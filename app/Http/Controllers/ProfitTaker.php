<?php

namespace App\Http\Controllers;

use App\Models\tron;
use App\Models\User;
use App\Models\tether;
use App\Models\bitcoin;
use App\Models\etherum;
use App\Models\stellar;
use App\Models\dogecoin;
use App\Models\litecoin;
use App\Models\polkadot;
use App\Models\csi_profit;
use App\Models\hfi_profit;
use App\Models\hsi_profit;
use App\Models\iri_profit;
use App\Models\sti_profit;
use App\Models\bitcoin_cash;
use Illuminate\Http\Request;

class ProfitTaker extends Controller
{
       
    public function adder(){
info('fgfgfg');

    //     $id = auth()->id(); 
    //     $user = User::find($id);
    //     $amount = account_balance::find($id);
      
    //     //stocks
    //     $hfi = hfi_profit::find($id);
    //     $iri = iri_profit::find($id);
    //     $csi = csi_profit::find($id);
    //     $hsi = hsi_profit::find($id);
    //     $sti = sti_profit::find($id);
      
    //     // crypto
    //     $btc = bitcoin::find($id);
    //     $eth = etherum::find($id);
    //     $ltc = litecoin::find($id);
    //     $tether = tether::find($id);
    //     $btc_cash = bitcoin_cash::find($id);
    //     $dogecoin = dogecoin::find($id);
    //     $stl = stellar::find($id);
    //     $pkd = polkadot::find($id);
    //     $tron = tron::find($id);

    //   $stockArray =  [ $hfi,$iri,$csi,$hsi,$sti];
    //  $coinArray = [$btc,$eth,$ltc,$tether,$btc_cash,$dogecoin,$stl,$pkd,$tron];
    //  foreach($stockArray as $stock){
    //    if(isset($stock)){
    //          $stock->profit = $stock->profit + $stock->amount/100;
    //          $stock->save();
    //          echo'success-1';
    //    }
        
    //  }
    //  foreach($coinArray as $coin){
    //     if(isset($coin)){
    //          $coin->profit = $coin->profit + $coin->amount/100;
    //          $coin->save();
    //          echo'success-2';
    //     }
       
    //  }
    //     echo 'worked';
   


    }
  
}
