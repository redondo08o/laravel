<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_alimentos extends Model
{
    use HasFactory;

    protected $t_alimento = [
        'nom_alimento',
        'id_grup'
    ];
}
