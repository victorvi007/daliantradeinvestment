<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class support extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'email',
        'subject',
        'msg',

    ];
    protected  $primaryKey = 'user_id';
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
