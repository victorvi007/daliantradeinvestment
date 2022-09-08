<?php

namespace App\Models;

use App\Models\invest;
use App\Models\hsi_profit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class invest extends Model
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
    
    public function hsi_profit(){
        return $this->hasOne(hsi_profit::class,'user_id');
    }
}
