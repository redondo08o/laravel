<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datos_alimenticios extends Model
{
    use HasFactory;

    protected $datos_alimenticios = [
        'ali_frutas_pre',
        'ali_verduras_pre',
        'ali_cereales_pre',
        'ali_lacteos_pre',
        'ali_leguminozas_pre',
        'ali_frutas_npre',
        'ali_verduras_npre',
        'ali_cereales_npre',
        'ali_lacteos_npre',
        'ali_leguminozas_npre',
        'ali_donde_consume_comida',
        'ali_elabora_comida',
        'ali_elabora_comida_desc',
        'ali_consume_chatarra',
        'ali_pre_id'
    ];
}
