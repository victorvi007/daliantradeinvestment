<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verify_account extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'email',
        'document_type',
        'front',
        'back',
        'verified',
    ];
    protected  $primaryKey = 'user_id';
    // public function user(){
    //     return $this->belongsTo(User::class,'user_id');
    // }
}
