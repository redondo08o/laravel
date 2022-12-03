<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_lipi2 extends Model
{
    use HasFactory;

    protected $lipi2 = [
        'lipi2_gramos',
        'lipi2_kcal',
        'lipi2_%',
        'lipi2_g_kg'
    ];
}
