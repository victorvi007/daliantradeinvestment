<?php

namespace App\Http\Controllers\Admin;

use App\Models\support;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminSupportController extends Controller
{
    public function admin_support(){
        $mail = support::get();

        return view('admin.admin_support',['mail'=>$mail]);
    }
}
