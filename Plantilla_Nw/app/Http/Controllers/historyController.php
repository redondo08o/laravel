<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class historyController extends Controller
{
    public function index(){
        return view('pages.history.index');
    }

    public function frm_register(){
        return view('pages.home.register');
    }
}
