<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_repart_nutri extends Model
{
    use HasFactory;
    protected $table_repart_nutri = [
        'trepar_uid',
        'desayuno_repar_nutri',
        'mm_repar_nutricol',
        'almuerzo_repar_nutricol',
        'mn_repar_nutricol',
        'id_ana_quim',
        't_grup_alim_id_grup_alim',

    ];
}
