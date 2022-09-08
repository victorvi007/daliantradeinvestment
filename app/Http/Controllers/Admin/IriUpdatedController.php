<?php

namespace App\Http\Controllers\Admin;

use App\Models\iri_profit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\dailyProfitDistribution;
use App\Http\Controllers\Admin\IriUpdatedController;

class IriUpdatedController extends Controller
{
    public function iri_updated($user_id, Request $request){

      $this->validate($request, [
        'IriNewProfit'=>'required|max:255'
    ]);
        $iri = iri_profit::find($user_id);
        $iri->profit += $request->IriNewProfit;
        $iri -> save();
        $name = $iri->user->name;
        $amount = $request->IriNewProfit;
        $asset = $iri->product;
        Mail::to($iri->user->email)->send(new dailyProfitDistribution($name,$amount,$asset));
        return back()->with('success', 'Profit Updated');
        return redirect()->route('profit-update');
        
      }
}
