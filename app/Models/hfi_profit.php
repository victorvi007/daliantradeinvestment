<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hfi_profit extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product',
        'amount',
        'profit',
        'bot',
    ];
    protected  $primaryKey = 'user_id';
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
