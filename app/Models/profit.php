<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profit extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'profit',
        'user_id',
        'investment_name',
    ];
    protected  $primaryKey = 'user_id';
   
}
