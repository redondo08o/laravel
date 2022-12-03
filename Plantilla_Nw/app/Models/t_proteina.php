<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_proteina extends Model
{
    use HasFactory;

    protected $t_proteina = [
        'pro_gramos',
        'pro_kcal',
        'pro_%',
        'pro_g_kg'
    ];
}
