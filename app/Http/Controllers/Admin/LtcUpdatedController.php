<?php

namespace App\Http\Controllers\Admin;

use App\Models\litecoin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\dailyProfitDistribution;

class LtcUpdatedController extends Controller
{
    public function ltc_updated($user_id, Request $request){

        $this->validate($request, [
            'LtcNewProfit'=>'required|max:255'
        ]);  
        $ltc = litecoin::find($user_id);
        $ltc->profit += $request->LtcNewProfit;
        $ltc -> save();
        $amount = $request->LtcNewProfit;
        $asset = $ltc->product;
        Mail::to($ltc->user->email)->send(new dailyProfitDistribution($$name,$amount,$asset));
        return back()->with('success', 'Profit Updated');
        return redirect()->route('profit-update');
        
    }
}
