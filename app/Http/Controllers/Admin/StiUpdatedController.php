<?php

namespace App\Http\Controllers\Admin;

use App\Models\sti_profit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\dailyProfitDistribution;
use App\Http\Controllers\Admin\StiUpdatedController;

class StiUpdatedController extends Controller
{
    public function sti_updated($user_id, Request $request){

      $this->validate($request, [
        'StiNewProfit'=>'required|max:255'
    ]);
        $sti = sti_profit::find($user_id);
        $sti->profit += $request->StiNewProfit;
        $sti -> save();
        $name = $sti->user->name;
        $amount = $request->StiNewProfit;
        $asset = $sti->product;
        Mail::to($sti->user->email)->send(new dailyProfitDistribution($name,$amount,$asset));
        return back()->with('success', 'Profit Updated');
        return redirect()->route('profit-update');
        
      }
}
