<?php


use App\Http\Controllers\usersController;
use App\Http\Controllers\pacienteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts/homepage',);
});

Route::get('/index_admin', function () {
    return view('pages/home/profile');
})->name('index_admin');

Route::get('/login', function () {
    return view('pages/home/login');
})->name('login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('/pacientes',[usersController::class,'pacientes'])->name('pacientes');

route::get('/frm_registe',[usersController::class,'frm_register'])->name('frm_register');

route::get('/home_history',[historyController::class, 'index'])->name('history');

route::get('/users', [usersController::class, 'users'])->name('users');

route::post('/user/registar', [usersController::class,'registrar'])->name('registrar_usuario');

route::get('/frm_editar',[usersController::class,'frm_editar'])->name('frm_editar');

route::post('/editar_usuario',[usersController::class,'editar'])->name('editar_usuario');

route::get('/listado_usuarios', [usersController::class, 'listar'])->name('listado_usuarios');

route::post('/paciente/registar', [pacienteController::class,'registrar'])->name('registrar_paciente');