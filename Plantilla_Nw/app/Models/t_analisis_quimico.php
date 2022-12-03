<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_analisis_quimico extends Model
{
    use HasFactory;

    protected $t_analisis_quimico = [
        'factor_act',
        'per_id',
        'lipi2_id',
        'proteinas_id',
        'cho_id'
    ];
}
