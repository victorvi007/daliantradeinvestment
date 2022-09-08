<?php

namespace App\Http\Controllers\Admin;

use App\Models\csi_profit;
use App\Models\hfi_profit;
use App\Models\hsi_profit;
use App\Models\iri_profit;
use App\Models\sti_profit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use App\Http\Controllers\Admin\StockProfitUpdateController;


class StockProfitUpdateController extends Controller
{
    public function stock_profit_update(){

                $users = User::get();
                //stocks
                $hfi = hfi_profit::get();
                $iri = iri_profit::get();
                $csi = csi_profit::get();
                $hsi = hsi_profit::get();
                $sti = sti_profit::get();
              
        

        return view('admin.admin_stock_update_profit',[
            //stocks
            'hfi'=>$hfi,
            'iri'=>$iri,
            'csi'=>$csi,
            'hsi'=>$hsi,
            'sti'=>$sti
            ]);
    }
}
