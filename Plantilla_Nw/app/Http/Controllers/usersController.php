<?php

namespace App\Http\Controllers;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function pacientes(){
        
        return view('pages.user.pacientes');
    }

    public function frm_register(){
        return view('pages.home.register');
    }

    public function users(){
        return view('pages.user.users');
    }

    public function registrar(Request $request){

        $usuario = new usuarios();

        $usuario->usu_tp_doc = $request->tp_doc;
        $usuario->usu_num_doc = $request->n_doc;
        $usuario->usu_alias = $request->alias;
        $usuario->usu_contraseña = $request->contraseña;
        $usuario->usu_correo = $request->correo;
        $usuario->usu_rol = $request->rol; 
        $usuario->usu_uid = uniqid();
        $usuario->usu_img = '../assets/img/team-2.jpg';
        $usuario->usu_est = 1;

       
        if ( $usuario->save()) {
           return response()->json([
            'mensaje'=> 'El registro a sido creado con exito',
            'icono'=> 'success'
           ]);
        }
        else{
            return response()->json([
                'mensaje'=> 'erro'
             ]);
        }
    }

    public function frm_editar($usu_uid){
        $usuario= Usuarios::findOrFail($usu_uid);
        return response()->json([
            'mensaje'=> $usuario
           ]);
    }
   
    
}