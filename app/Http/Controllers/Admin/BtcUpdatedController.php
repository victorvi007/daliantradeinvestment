<?php

namespace App\Http\Controllers\Admin;

use App\Models\bitcoin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\dailyProfitDistribution;
use App\Http\Controllers\Admin\BtcUpdatedController;

class BtcUpdatedController extends Controller
{
    public function btc_updated($user_id, Request $request){

        $this->validate($request, [
            'BtcNewProfit'=>'required|max:255'
        ]);  
        $btc = bitcoin::find($user_id);
        $btc->profit += $request->BtcNewProfit;
        $btc -> save();
        $name = $btc->user->name;
        $amount = $request->BtcNewProfit;
        $asset = $btc->product;
        Mail::to($btc->user->email)->send(new dailyProfitDistribution($name,$amount,$asset));
        return back()->with('success', 'Profit Updated');
        return redirect()->route('profit-update');
        
      }
}
