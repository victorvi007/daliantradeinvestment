<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class account_balance extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'user_id',


    ];
    protected  $primaryKey = 'user_id';

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
