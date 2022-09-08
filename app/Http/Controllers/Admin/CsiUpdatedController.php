<?php

namespace App\Http\Controllers\Admin;

use App\Models\csi_profit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\dailyProfitDistribution;
use App\Http\Controllers\Admin\CsiUpdatedController;

class CsiUpdatedController extends Controller
{
    public function csi_updated($user_id, Request $request){
      $this->validate($request, [
        'CsiNewProfit'=>'required|max:255'
    ]);  

        $csi = csi_profit::find($user_id);
        $csi->profit += $request->CsiNewProfit;
        $csi -> save();
        $name = $csi->user->name;
        $amount = $request->CsiNewProfit;
        $asset = $csi->product;
        Mail::to($csi->user->email)->send(new dailyProfitDistribution($name,$amount,$asset));
        return back()->with('success', 'Profit Updated');
        return redirect()->route('profit-update');
        
      }
}
