<?php

namespace App\Http\Controllers\Admin;

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
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use App\Http\Controllers\Admin\CryptoProfitUpdateController;



class CryptoProfitUpdateController extends Controller
{
    public function crypto_profit_update(){

                $users = User::get();
                // crypto
                $btc = bitcoin::get();
                $eth = etherum::get();
                $ltc = litecoin::get();
                $tether = tether::get();
                $btc_cash = bitcoin_cash::get();
                $dogecoin = dogecoin::get();
                $stl = stellar::get();
                $pkd = polkadot::get();
                $tron = tron::get();
        


        return view('admin.admin_crypto_update_profit',[
            // crypto
            'btc'=>$btc,
            'eth'=>$eth,
            'ltc'=>$ltc,
            'tether'=>$tether,
            'btc_cash'=>$btc_cash,
            'dogecoin'=>$dogecoin,
            'stl'=>$stl,
            'pkd'=>$pkd,
            'tron'=>$tron
            ]);
    }
}
