<?php

namespace App\Http\Controllers\Admin;

use App\Models\bitcoin_cash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\dailyProfitDistribution;

class BtcCashUpdatedController extends Controller
{
    public function btc_cash_updated($user_id, Request $request){

        $this->validate($request, [
            'BtcCashNewProfit'=>'required|max:255'
        ]);  
        $btc_cash = bitcoin_cash::find($user_id);
        $btc_cash->profit += $request->BtcCashNewProfit;
        $btc_cash -> save();
        $name = $btc_cash->user->name;
        $amount = $request->BtcCashNewProfit;
        $asset = $btc_cash->product;
        Mail::to($btc_cash->user->email)->send(new dailyProfitDistribution($name,$amount,$asset));
        return back()->with('success', 'Profit Updated');
        return redirect()->route('profit-update');
        
    }
}
