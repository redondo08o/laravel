<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seguimientos extends Model
{
    use HasFactory;

    protected $seguimientos = [
        'seg_fch_valoracion',
        'seg_peso_usu',
        'seg_peso_act',
        'seg_talla',
        'seg_edad',
        'seg_pli_tricipital',
        'seg_pli_abdominal',
        'seg_pli_subescapular',
        'seg_pli_suprailiaco',
        'seg_circ_branquial',
        'seg_circ_abdominal',
        'seg_circ_muslo',
        'seg_circ_cuello',
        'seg_circ_cintura',
        'seg_circ_cadera_max',
        'seg_pre_id'
    ];
}
