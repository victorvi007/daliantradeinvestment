<?php

namespace App\Http\Controllers\Admin;

use App\Models\etherum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\dailyProfitDistribution;

class EthUpdatedController extends Controller
{
    public function eth_updated($user_id, Request $request){

        $this->validate($request, [
            'EthNewProfit'=>'required|max:255'
        ]);  
        $eth = etherum::find($user_id);
        $eth->profit += $request->EthNewProfit;
        $eth -> save();
        $name = $eth->user->name;
        $amount = $request->EthNewProfit;
        $asset = $eth->product;
        Mail::to($eth->user->email)->send(new dailyProfitDistribution($name,$amount,$asset));
        return back()->with('success', 'Profit Updated');
        return redirect()->route('profit-update');
        
      }
}
