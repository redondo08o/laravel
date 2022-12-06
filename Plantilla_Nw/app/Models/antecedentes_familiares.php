<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antecedentes_familiares extends Model
{
    use HasFactory;

    protected $tabla_antecedentes_familiares = [
        'antfami_uid',
        'antfami_enfer_res_alerg',
        'antfami_canceres',
        'antfami_obesidad',
        'antfami_enfer_cardio',
        'antfami_diabetes',
        'antfami_otros',
        'antfami_per_id',

    ];
}
