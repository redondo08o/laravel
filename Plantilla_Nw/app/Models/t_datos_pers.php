<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_datos_pers extends Model
{
    use HasFactory;

    protected $t_datos_per = [
        'per_uid',
        'per_fecha_nacimiento',
        'per_nombre',
        'per_apellido',
        'per_edad'
    ];
}
