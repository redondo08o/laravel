<?php $act = "usuarios"; ?>

@extends('layouts.admin')

@section('content')
<div class="card mb-4">
    <div class="card-header pb-0">
        <h6 class="md-4">Usuarios</h6>
        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo Usuario</button>

    </div>

    <div class="modal fade" id="exampleModal_e" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuario </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form autocomplete="off" action="{{route('editar_usuario')}}" id="formulario_e_usuarios" method="POST">
                        @CSRF
                        

                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form autocomplete="off" action="{{ route('registrar_usuario')}}" id="formulario_usuarios" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-floating mb-3">
                                        <select name="tp_doc" id="tp_doc" class="form-control">
                                            <option value="cc">cc</option>
                                            <option value="ti">ti</option>
                                        </select>
                                        <label id="tp_doc">Tipo de documento</label>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-floating mb-3">
                                        <input type="number" name="n_doc" class="form-control" id="n_doc">
                                        <label for="n_doc">N° documento</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" name="alias" class="form-control" id="alias">
                                    <label for="alias">Nombre de usuario</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="password" name="contraseña" class="form-control" id="contraseña">
                                    <label for="contraseña">Contraseña</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-floating mb-3">
                                    <input type="email" name="correo" class="form-control" id="correo">
                                    <label for="correo">Correo</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-floating mb-3">
                                    <select name="rol" id="" class="form-control" id="rol">
                                        <option value="Administrador">Administador</option>
                                        <option value="Nutricionista">Nutricionista</option>
                                    </select>
                                    <label for="rol">Rol</label>
                                </div>
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>



    <div class="card-body px-0 pt-0 pb-2">
        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example  p-3 rounded-2 " tabindex="0">

            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Rol
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Tipo doc
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                N° documento</th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody  id="list_u">

                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .bd-example>:last-child {
        margin-bottom: 0;
    }

    .scrollspy-example {
        height:300px;
        margin-top: 0.5rem;
        overflow: auto ;
        scrollbar-width: none;
    }

    .rounded-2 {
        border-radius: var(--bs-border-radius) !important;
    }

    .bg-light {
        --bs-bg-opacity: 1;
        background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
    }

    .p-3 {
        padding: 1rem !important;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }
    .scrollspy-example::-webkit-scrollbar {
display: none;
}

    .bd-example {
        --bd-example-padding: 1rem;
        position: relative;
        padding: var(--bd-example-padding);
        margin: 0 -1.5rem;
        border: solid #dee2e6;
        border-width: 1px 0;
    }

    .bd-gutter {
        --bs-gutter-x: 3rem;
    }

    
</style>


@endsection