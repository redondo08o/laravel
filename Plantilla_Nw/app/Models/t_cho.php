<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_cho extends Model
{
    use HasFactory;
    protected $t_cho = [
        'cho_gramos',
        'cho_kcal',
        'cho_%',
        'cho_g_kg'
    ];
}
