<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'password',
    ];
    // public function user(){
    //     return $this->belongsTo(User::class,'user_id');
    // }
}
