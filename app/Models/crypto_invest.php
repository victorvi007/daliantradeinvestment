<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crypto_invest extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'coin',
        'amount',
        'profit',
        'verified',

        
    ];
    protected  $primaryKey = 'user_id';
    // public function user(){
    //     return $this->belongsTo(User::class,'user_id');
    // }
}
