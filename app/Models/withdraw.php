<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class withdraw extends Model
{
    protected  $primaryKey = 'user_id';
    use HasFactory;
    protected $fillable = [
        
        'amount',
        'user_id',
    ];
    // public function user(){
    //     return $this->belongsTo(User::class,'user_id');
    // }
}
