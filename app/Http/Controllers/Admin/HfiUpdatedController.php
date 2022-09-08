<?php

namespace App\Http\Controllers\Admin;

use App\Models\hfi_profit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\dailyProfitDistribution;
use App\Http\Controllers\Admin\HfiUpdatedController;

class HfiUpdatedController extends Controller
{

    public function hfi_updated($user_id, Request $request){
      $this->validate($request, [
        'hfiNewProfit'=>'required|max:255'
    ]); 

        $hfi = hfi_profit::find($user_id);
        $hfi->profit += $request->hfiNewProfit;
        $hfi -> save();
        $name = $hfi->user->name;
        $amount = $request->hfiNewProfit;
        $asset = $hfi->product;
        Mail::to($hfi->user->email)->send(new dailyProfitDistribution($name,$amount,$asset));
        return back()->with('success', 'Profit Updated');
        return redirect()->route('profit-update');
        
      }
}
