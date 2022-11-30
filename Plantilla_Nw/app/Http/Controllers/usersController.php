<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    public function My_user(){
        
        return view('pages.user.users');
    }

    public function frm_register(){
        return view('pages.home.register');
    }
}
