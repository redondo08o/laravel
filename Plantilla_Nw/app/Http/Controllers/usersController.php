<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    public function pacientes(){
        
        return view('pages.user.pacientes');
    }

    public function frm_register(){
        return view('pages.home.register');
    }
}
