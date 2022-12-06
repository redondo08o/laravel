<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_ant_personales extends Model
{
    use HasFactory;

    protected $table_t_ant_personales = [
        'antp_uid',
        'antper_opera_si_no',
        'antper_medi_si_no',
        'antper_sustancia_descp',
        'antper_diarrea',
        'antper_alerg_med',
        'antper_estreñimiento',
        'antper_gastritis',
        'antper_ulcera_mauseas',
        'antper_est_emba',
        'antper_vomitos',
        'antper_dolor_abd',
        'antper_dolor_abd',
        'antper_meses_gestion',
        'antper_per_id',
    ];
}
