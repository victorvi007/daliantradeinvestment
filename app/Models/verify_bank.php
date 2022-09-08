<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verify_bank extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'amount',
        'verified',
        
    ];
    protected  $primaryKey = 'user_id';
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
