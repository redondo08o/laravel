<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_actividad_fisica extends Model
{
    use HasFactory;
    protected $table_t_actividad_fisica = [
        'actf_uid',
        'actf_tiempo',
        'actf_va_gym_o_ deporte',
        'actf_frecuencia_actfisica',
        'actf_per_id',
    ];
}
