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


    public function listar(){
        $usuarios=Usuarios::all()->where('usu_est', '=', 1);
        $res="";
        foreach ($usuarios as $usuario) {
           
           $res.="
           <tr>
        <td>
            <div class='d-flex px-2 py-1'>
                <div>
                    <img src='../assets/img/team-2.jpg' class='avatar avatar-sm me-3' alt='user1'>
                </div>
                <div class='d-flex flex-column justify-content-center'>
                    <h6 class='mb-0 text-sm'>$usuario->usu_alias</h6>
                    <p class='text-xs text-secondary mb-0'> $usuario->usu_correo</p>
                </div>
            </div>
        </td>
        <td>
            <p class='text-xs font-weight-bold mb-0'> $usuario->usu_rol</p>
            
        </td>
        <td class='align-middle text-center text-sm'>
            <span class='badge badge-sm bg-gradient-success'> $usuario->usu_tp_doc</span>
        </td>
        <td class='align-middle text-center'>
            <span class='text-secondary text-xs font-weight-bold'> $usuario->usu_num_doc</span>
        </td>
        <td class='align-middle'>
            <a href='/frm_editar?usu_uid=$usuario->usu_uid'  class='badge badge-sm bg-gradient-info edit_u' data-toggle='tooltip' data-original-title='Edit user' data-bs-toggle='modal' data-bs-target='#exampleModal_e'>
                Editar
            </a>
            <a href='javascript:;'' class='badge badge-sm bg-gradient-danger' data-toggle='tooltip' data-original-title='Edit user'>
                Eliminar
            </a>
        </td>
    </tr>
           ";
          

        }


      
            
           

        return response()->json([
            'mensaje'=> $res
           ]);
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

    public function editar(Request $request){
        
var_dump($request);
       
    }

    public function frm_editar(){
        
        $uid=$_GET["usu_uid"];
        $u= Usuarios::where('usu_uid','=',$uid)->first();
        $num_doc=$u->usu_num_doc;
        $tp_doc=$u->usu_tp_doc;
        $alias=$u->usu_alias;
        $correo=$u->usu_correo;
        $uid=$u->usu_uid;
       $res="
       <div class='mb-3'>
                            <div class='row'>
                                <div class='col-md-5'>
                                    <div class='form-floating mb-3'>
                                        <select name='tp_doc' id='tp_doc' class='form-control'>
                                            <option value='cc'>cc</option>
                                            <option value='ti'>ti</option>
                                        </select>
                                        <label id='tp_doc'>Tipo de documento</label>
                                    </div>
                                </div>
                                <div class='col-md-7'>
                                    <div class='form-floating mb-3'>
                                        <input type='number' name='n_doc' class='form-control' id='n_doc' value='$num_doc'>
                                        <label for='n_doc'>N° documento</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='form-floating mb-3'>
                                    <input type='text' name='alias' class='form-control' value='$alias' id='alias'>
                                    <label for='alias'>Nombre de usuario</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class='row'>
                            <div class='col-md-7'>
                                <div class='form-floating mb-3'>
                                    <input type='email' name='correo' class='form-control' id='correo' value='$correo'>
                                    <label for='correo'>Correo</label>
                                </div>
                            </div>
                            <div class='col-md-5'>
                                <div class='form-floating mb-3'>
                                    <select name='rol' class='form-control' id='rol'>
                                        <option value='Administrador'>Administador</option>
                                        <option value='Nutricionista'>Nutricionista</option>
                                    </select>
                                    <label for='rol'>Rol</label>
                                </div>
                            </div>
                        </div>
       ";
        return response()->json([
            'mensaje'=> $res
           ]);
    }
   
    
}