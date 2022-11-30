<?php $act="profile";?>

@extends('layouts.admin')

@section('content')
<div class="card shadow-lg mx-4 card-profile">
    <div class="card-body p-3">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="{{ asset('assets/img/ivana-square.jpg')}}" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        Gera paola
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        Nutricionista dietista
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Editar Perfil</p>
                        <button class="btn btn-info btn-sm ms-auto">configuracion</button>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-uppercase text-sm">Informacion de Usuario</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nombre de Usuario</label>
                                <input class="form-control" type="text" value="gera.andrea">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Direccion de Correo</label>
                                <input class="form-control" type="email" value="gera@example.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Primer Nombre</label>
                                <input class="form-control" type="text" value="geraldin">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Segundo Nombre</label>
                                <input class="form-control" type="text" value="andrea">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Informacion de contacto</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Direccion</label>
                                <input class="form-control" type="text" value="el muvdy">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">ciudad</label>
                                <input class="form-control" type="text" value="Soledad City">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Pais</label>
                                <input class="form-control" type="text" value="Colombia">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">codigo postal</label>
                                <input class="form-control" type="text" value="437300">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Sobre mi</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Sobre mi</label>
                                <input class="form-control" type="text"
                                    value="Nutricionista Dietista Egresada de la Universidad del Atlántico Educadora en Diabetes...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-profile">
                <img src="https://img.freepik.com/fotos-premium/comida-sana-nutricionista-borrosa_23-2148256178.jpg?w=2000"
                    alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-4 col-lg-4 order-lg-2">
                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                            <a href="javascript:;">
                                <img src="{{ asset('assets/img/ivana-square.jpg')}}"
                                    class="rounded-circle img-fluid border border-2 border-white">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <h5>
                        Geraldin redondo<span class="font-weight-light">, 24</span>
                    </h5>
                    <div class="h6 font-weight-300">
                        <i class="ni location_pin mr-2"></i>dubai, pero estamos en quilla
                    </div>
                    <div class="h6 mt-4">
                        <i class="ni business_briefcase-24 mr-2"></i>Administradora - Nutritional Wellnes
                    </div>
                    <div>
                        <i class="ni education_hat mr-2"></i>Universidad del atlantico donde no soplan casi
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection