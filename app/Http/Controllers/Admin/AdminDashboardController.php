<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\account_balance;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function admin_dashboard(){
        // $balance;
        $users = account_balance::get();
       
    //    dd($users[0]->amount);
        return view('admin.admin_landing_page',['users'=>$users]);
    }
}
