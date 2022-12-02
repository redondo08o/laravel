<?php

namespace App\Http\Livewire;
use App\Models\Usuarios;
use Livewire\Component;

class UsuariosList extends Component
{
    public function render()
    {
        return view('livewire.usuarios-list', [
            'usuarios' => Usuarios::all()->where('usu_est', '=', 1)
        ]);
    }
}
