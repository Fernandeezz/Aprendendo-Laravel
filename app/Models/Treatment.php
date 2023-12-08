<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\MoneyCast;

class Treatment extends Model
{
    protected $casts = [
        'price' => MoneyCast::class,
    ];
 
    use HasFactory;
}
