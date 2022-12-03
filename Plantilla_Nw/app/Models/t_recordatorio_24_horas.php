<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_recordatorio_24_horas extends Model
{
    use HasFactory;
    protected $table_t_recordatorio_24_horas = [
            're_desayuno',
            're_merienda',
            're_almuerzo',
            're_meriendam',
            're_re_cena',
            're_otros',
            're_per_id',
    ];
}
