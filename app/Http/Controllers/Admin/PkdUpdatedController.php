<?php

namespace App\Http\Controllers\Admin;

use App\Models\polkadot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\dailyProfitDistribution;

class PkdUpdatedController extends Controller
{
    public function pkd_updated($user_id, Request $request){

        $this->validate($request, [
            'pkdNewProfit'=>'required|max:255'
        ]);  
        $pkd = polkadot::find($user_id);
        $pkd->profit += $request->pkdNewProfit;
        $pkd -> save();
        $name = $pkd->user->name;
        $amount = $request->pkdNewProfit;
        $asset = $pkd->product;
        Mail::to($pkd->user->email)->send(new dailyProfitDistribution($name,$amount,$asset));
        return back()->with('success', 'Profit Updated');
        return redirect()->route('profit-update');
        
    }
}
