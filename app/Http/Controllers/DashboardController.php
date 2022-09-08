<?php

namespace App\Http\Controllers;
use App\Models\tron;
use App\Models\User;
use App\Models\invest;
use App\Models\profit;
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
use App\Models\crypto_invest;
use App\Models\account_balance;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

   
    public function dashboard(){
      
        
        $id = auth()->id(); 
        $user = User::find($id);
        $amount = account_balance::find($id);
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
        return view('dashboard.landing-page',['data'=>$user],
        [
            //stocks
            'amount'=>$amount,
            'hfi'=>$hfi,
            'iri'=>$iri,
            'csi'=>$csi,
            'hsi'=>$hsi,
            'sti'=>$sti,
            // coins
            'btc'=>$btc,
            'eth'=>$eth,
            'ltc'=>$ltc,
            'tether'=>$tether,
            'btc_cash'=>$btc_cash,
            'dogecoin'=>$dogecoin,
            'stl'=>$stl,
            'pkd'=>$pkd,
            'tron'=>$tron,
            //total Profit
            'totalProfit'=>$totalProfit
        ]);
    }
    
    
}
