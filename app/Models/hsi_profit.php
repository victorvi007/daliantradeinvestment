<?php

namespace App\Models;

use App\Models\invest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hsi_profit extends Model
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
