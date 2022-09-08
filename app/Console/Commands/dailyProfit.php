<?php

namespace App\Console\Commands;

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
use App\Models\verify_account;
use App\Models\account_balance;
use Illuminate\Console\Command;

class dailyProfit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:profit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gives users there daily profit';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */

        //php artisan schedule:work
        //php artisan schedule:work
        //php artisan schedule:work
        //php artisan schedule:work
        //php artisan schedule:work


    public function handle()
    {
        //account verification
        $verify_account =  verify_account::get();
        foreach($verify_account as $verify){
                $verify->verified = 1;
                $verify->save();
                print_r(' success- verified..... ');
        };
        //account verification
     
      
        //stocks
        $hfi = hfi_profit::get();
        $iri = iri_profit::get();
        $csi = csi_profit::get();
        $hsi = hsi_profit::get();
        $sti = sti_profit::get();
      
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


        foreach($hfi as $hfi){
            $hfi->profit = $hfi->profit + ($hfi->amount/0.05)/12;
            $hfi->save();
            print_r(' hfi->'.$hfi->profit);
        }
        foreach($iri as $iri){
            $iri->profit = $iri->profit + ($iri->amount/0.05)/12;
            $iri->save();
            print_r(' iri ->'.$iri->profit);
        }
        foreach($csi as $csi){
            $csi->profit = $csi->profit + ($csi->amount/0.05)/12;
            $csi->save();
            print_r(' success- csi ');
        }
        foreach($hsi as $hsi){
            $hsi->profit = $hsi->profit + ($hsi->amount/0.05)/12;
            $hsi->save();
            print_r(' success- hsi ');
        }
        foreach($sti as $sti){
            $sti->profit = $sti->profit + ($sti->amount/0.05)/12;
            $sti->save();
            print_r(' success- sti ');
        }



     foreach($btc as $btc){
             $btc->profit = $btc->profit + ($btc->amount/0.05)/12;
             $btc->save();
             print_r(' success- btc');
        
     }
     foreach($eth as $eth){
             $eth->profit = $eth->profit + ($eth->amount/0.05)/12;
             $eth->save();
             print_r(' success- eth');
        
     }
     foreach($ltc as $ltc){
             $ltc->profit = $ltc->profit + ($ltc->amount/0.05)/12;
             $ltc->save();
             print_r(' success-ltc');
        
     }
     foreach($tether as $tether){
             $tether->profit = $tether->profit + ($tether->amount/0.05)/12;
             $tether->save();
             print_r(' success- tether');
        
     }
     foreach($btc_cash as $btc_cash){
             $btc_cash->profit = $btc_cash->profit + ($btc_cash->amount/0.05)/12;
             $btc_cash->save();
             print_r(' success-btc_cash');
        
     }
     foreach($dogecoin as $dogecoin){
             $dogecoin->profit = $dogecoin->profit + ($dogecoin->amount/0.05)/12;
             $dogecoin->save();
             print_r('success-dogecoin');
        
     }
     foreach($stl as $stl){
             $stl->profit = $stl->profit + ($stl->amount/0.05)/12;
             $stl->save();
             print_r(' success-stellar');
        
     }
     foreach($pkd as $pkd){
             $pkd->profit = $pkd->profit + ($pkd->amount/0.05)/12;
             $pkd->save();
             print_r(' success-pkd');
        
     }
     foreach($tron as $tron){
             $tron->profit = $tron->profit + ($tron->amount/0.05)/12;
             $tron->save();
             print_r(' success-tron');
        
     }

    }
}
