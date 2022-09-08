<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Mail\MailController;

class MailController extends Controller
{
   public function mail(){
       return view('mail.creditTransaction');
   }
}
