<?php

namespace App\Http\Controllers\Admin;

use App\Models\tron;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\dailyProfitDistribution;

class TronUpdatedController extends Controller
{
    public function tron_updated($user_id, Request $request){

        $this->validate($request, [
            'tronNewProfit'=>'required|max:255'
        ]);  
        $tron = tron::find($user_id);
        $tron->profit += $request->tronNewProfit;
        $tron -> save();
        $name = $tron->user->name;
        $amount = $request->tronNewProfit;
        $asset = $tron->product;
        Mail::to($tron->user->email)->send(new dailyProfitDistribution($name,$amount,$asset));
        return back()->with('success', 'Profit Updated');
        return redirect()->route('profit-update');
        
    }
}
