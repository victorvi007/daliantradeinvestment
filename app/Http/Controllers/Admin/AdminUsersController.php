<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminUsersController;

class AdminUsersController extends Controller
{
    public function users(){

        $users = User::get();
        // dd($users);
        return view('admin.users',['users'=>$users]);
    }
}
