<?php

namespace App\Http\Controllers\Admin;

use App\Models\tether;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\dailyProfitDistribution;

class TetherUpdatedController extends Controller
{
    public function tether_update($user_id,Request $request){
    $this->validate($request, [
        'tetherNewProfit'=>'required|max:255'
    ]);  
    $tether = tether::find($user_id);
    $tether->profit += $request->tetherNewProfit;
    $tether -> save();
    $name = $tether->user->name;
    $amount = $request->tetherNewProfit;
    $asset = $tether->product;
    Mail::to($tether->user->email)->send(new dailyProfitDistribution($name,$amount,$asset));
    return back()->with('success', 'Profit Updated');
    return redirect()->route('profit-update');
    
}
}
