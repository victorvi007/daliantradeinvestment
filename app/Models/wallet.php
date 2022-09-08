<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'user_id',
    ];
    protected  $primaryKey = 'user_id';
    // public function user(){
    //     return $this->belongsTo(User::class,'user_id');
    // }
}
