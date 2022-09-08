<?php

namespace App\Http\Controllers\Admin;

use App\Models\dogecoin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\dailyProfitDistribution;

class DogecoinUpdatedController extends Controller
{
    public function dogecoin_updated($user_id, Request $request){

        $this->validate($request, [
            'dogecoinNewProfit'=>'required|max:255'
        ]);  
        $dogecoin = dogecoin::find($user_id);
        $dogecoin->profit += $request->dogecoinNewProfit;
        $dogecoin -> save();
        
        $name = $dogecoin->user->name;
        $amount = $request->dogecoinNewProfit;
        $asset = $dogecoin->product;
        Mail::to($dogecoin->user->email)->send(new dailyProfitDistribution($name,$amount,$asset));
        return back()->with('success', 'Profit Updated');
        return redirect()->route('profit-update');
        
    }
}
