<?php

namespace App\Http\Controllers\Admin;

use App\Models\hsi_profit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\dailyProfitDistribution;
use App\Http\Controllers\Admin\HsiUpdatedController;

class HsiUpdatedController extends Controller
{
    public function hsi_updated($user_id, Request $request){

      $this->validate($request, [
        'HsiNewProfit'=>'required|max:255'
    ]);
        $hsi = hsi_profit::find($user_id);
        $hsi->profit += $request->HsiNewProfit;
        $hsi -> save();
        $name = $hsi->user->name;
        $amount = $request->HsiNewProfit;
        $asset = $hsi->product;
        Mail::to($hsi->user->email)->send(new dailyProfitDistribution($name,$amount,$asset));
        return back()->with('success', 'Profit Updated');
        return redirect()->route('profit-update');
        
      }
}
