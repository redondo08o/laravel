<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $tabla_usuarios = [

        'usu_num_doc',
        'usu_tp_doc',
        'usu_rol',
        'usu_contraseña',
        'usu_alias',
        'usu_correo',
        'usu_uid',
        'usu_est'
    ];
}
