<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_grup_alim extends Model
{
    use HasFactory;

    protected $t_grup_alim = [
        'alim_grup_uid',
        'alim_grup_tp',
        'alim_grup_cho',
        'alim_grup_lipi2',
        'alim_grup_proteinas',
    ];
}
