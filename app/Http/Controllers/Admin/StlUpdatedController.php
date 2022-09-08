<?php

namespace App\Http\Controllers\Admin;

use App\Models\stellar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\dailyProfitDistribution;

class StlUpdatedController extends Controller
{
    public function stl_updated($user_id, Request $request){

        $this->validate($request, [
            'stlNewProfit'=>'required|max:255'
        ]);  
        $stl = stellar::find($user_id);
        $stl->profit += $request->stlNewProfit;
        $stl -> save();
        $name = $stl->user->name;
        $amount = $request->stlNewProfit;
        $asset = $stl->product;
        Mail::to($stl->user->email)->send(new dailyProfitDistribution($name,$amount,$asset));
        return back()->with('success', 'Profit Updated');
        return redirect()->route('profit-update');
        
    }
}
