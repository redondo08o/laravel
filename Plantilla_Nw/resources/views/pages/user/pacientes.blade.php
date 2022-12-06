<?php $act = 'pacientes'; ?>

@extends('layouts.admin')

@section('content')
    <div class="card mb-4">
        <div class="card-header pb-0">
            <h6 class="md-4">Pacientes</h6>
            <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Nuevo paciente</button>

        </div>


        <div class="modal fade position-relative w-1000" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="overflow-y: scroll;" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form__container">
                            <div class="title__container">
                                <h1 class="t"> Crear Historia Clinica</h1>
                                <p class="sec">En esta sesion podra crear la historia clinica</p>
                            </div>
                            <div class="body__container">
                                <div class="left__container">
                                    <div class="side__titles">
                                        <div class="title__name">
                                            <h3>Paciente</h3>
                                            <p>LLenar y continuar</p>
                                        </div>
                                        <div class="title__name">
                                            <h3>Datos personales</h3>
                                            <p>LLenar y continuar</p>
                                        </div>
                                        <div class="title__name">
                                            <h3>Antecedes personales</h3>
                                            <p>selecionar y continuar</p>
                                        </div>
                                        <div class="title__name">
                                            <h3>Antecedes familiares</h3>
                                            <p>selecionar y continuar</p>
                                        </div>
                                        <div class="title__name">
                                            <h3>Actividad fisica</h3>
                                            <p>LLenar y continuar</p>
                                        </div>
                                        <div class="title__name">
                                            <h3>Datos alimenticios</h3>
                                            <p>LLenar y continuar</p>
                                        </div>
                                        <div class="title__name">
                                            <h3>Alimentos Preferidos</h3>
                                            <p>LLenar y continuar</p>
                                        </div>
                                        <div class="title__name">
                                            <h3>Alimentos no Preferidos</h3>
                                            <p>LLenar y continuar</p>
                                        </div>
                                        <div class="title__name">
                                            <h3>Recordatorio 24 horas</h3>
                                            <p>LLenar y continuar</p>
                                        </div>
                                        <div class="title__name">
                                            <h3>Seguimiento</h3>
                                            <p>LLenar y continuar</p>
                                        </div>
                                    </div>
                                    <div class="progress__bar__container">
                                        <ul>
                                            <li class="active" id="icon1">
                                                <i class="bi bi-people-fill"></i>
                                            </li>
                                            <li id="icon2">
                                                <i class="bi bi-clipboard-data-fill"></i>
                                            </li>
                                            <li id="icon3">
                                                <i class="bi bi-clipboard-check"></i>
                                            </li>
                                            <li id="icon4">
                                                <i class="bi bi-clipboard2-check"></i>
                                            </li>
                                            <li id="icon5">
                                                <ion-icon name="basketball-outline"></ion-icon>
                                            </li>
                                            <li id="icon6">
                                                <ion-icon name="nutrition-outline"></ion-icon>
                                            </li>
                                            <li id="icon7">
                                                <ion-icon name="pizza-outline"></ion-icon>
                                            </li>
                                            <li id="icon8">
                                                <ion-icon name="pint-outline"></ion-icon>
                                            </li>
                                            <li id="icon9">
                                                <ion-icon name="notifications-outline"></ion-icon>
                                            </li>
                                            <li id="icon10">
                                                <i class="bi bi-rulers"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right__container">
                                    <fieldset id="form1">
                                        <form autocomplete="off" action="{{ route('registrar_paciente')}}" id="formulario_paciente" method="POST">
                                            @csrf
                                        <div class="sub__title__container">
                                            <h4>Pagina 1/10</h4>
                                            <h3 class="title_view">Registrar Paciente</h3>
                                        </div>
                                        <div class="input__container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3">
                                                        <select name="tp_doc" id="tp_doc" class="form-control">
                                                            <option value="cc">cc</option>
                                                            <option value="ti">ti</option>
                                                        </select>
                                                        <label class="text-dark" id="tp_doc">Tipo de documento</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" name="n_doc" class="form-control"
                                                            id="n_doc">
                                                        <label class="text-dark" for="n_doc">N° documento</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="alias" class="form-control" 
                                                            id="alias">
                                                        <label class="text-dark" for="alias">Nombre de usuario</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="password" name="contraseña" class="form-control" 
                                                            id="contraseña">
                                                        <label class="text-dark" for="contraseña">Contraseña</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" name="correo" class="form-control"
                                                            id="correo">
                                                        <label class="text-dark" for="correo">Correo</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3">
                                                        <select name="rol" id="" class="form-control" id="rol" >
                                                            <option  value="paciente">Paciente</option>
                                                        </select>
                                                        <label class="text-dark" for="rol">Rol</label>
                                                    </div>
                                                </div>
                                                <div class="buttons">
                                                <a class="btn bg-gradient-info text-white" onclick="nextForm();"> Siguiente</a>
                                                <button type="submit" class="btn bg-gradient-primary" >Enviar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </fieldset>
                                    <fieldset class="active__form" id="form2">
                                        <form action="" method="post">
                                        <div class="sub__title__container">
                                            <h4>Pagina 2/10</h4>
                                            <h3 class="title_view">Datos personales</h3>
                                        </div>
                                        <div class="input__container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Fecha de
                                                            nacimiento</label>
                                                        <input class="form-control" type="date" style="color: black">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Nombres</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Apellidos</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Sexo</label><br>
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Masculino</label>
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Femenino</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Edad</label>
                                                        <input class="form-control" type="number">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Ocupacion</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Telefono</label>
                                                        <input class="form-control" type="number">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Direccion</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="buttons">
                                                <a class="btn bg-gradient-info text-white" onclick="prevForm();">Atras</a>
                                                <button type="submit" class="btn bg-gradient-primary" >Enviar</button>
                                                <a class="btn bg-gradient-info text-white" id="submitBtn" onclick="nextForm();
                                                ">Siguiente</a>
                                            </div>
                                        </div>
                                    </form>
                                    </fieldset>
                                    <fieldset class="active__form" id="form3">
                                        <div class="sub__title__container">
                                            <h4>Pagina 3/10</h4>
                                            <h3 class="title_view">Antecedentes personales</h3>
                                        </div>
                                        <div class="input__container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">¿ha sido
                                                            operado?</label><br>
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input"
                                                            class="ml-2">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Si</label>
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">No</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">¿Toma algun
                                                            medicamento?</label><br>
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input"
                                                            class="ml-2">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Si</label>
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">No</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">¿ha consumido algun
                                                                tipo de sustancias alucinogeneas?</label><br>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input"
                                                                class="ml-2">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">Si</label>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">No</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">¿ha presentado
                                                                sintomas de diarrea?</label><br>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input"
                                                                class="ml-2">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">Si</label>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">No</label>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">¿Alergico algun
                                                                medicamento?</label><br>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input"
                                                                class="ml-2">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">Si</label>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">No</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">¿ha presentado
                                                                sintomas de estreñimiento?</label><br>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input"
                                                                class="ml-2">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">Si</label>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">¿Complemento o
                                                                suplemento nutricional?</label><br>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input"
                                                                class="ml-2">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">Si</label>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">No</label>
                                                            <input type="text" name="" id=""
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">¿ha presenado sintomas
                                                                de gastritis?</label><br>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input"
                                                                class="ml-2">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">Si</label>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">¿Ulceras
                                                                Nauseas?</label><br>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input"
                                                                class="ml-2">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">Si</label>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">No</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">¿Vomitos?</label><br>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input"
                                                                class="ml-2">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">Si</label>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">¿Dolor
                                                                Abdominal?</label><br>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input"
                                                                class="ml-2">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">Si</label>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">No</label>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">¿Estado de
                                                                embarazo?</label><br>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input"
                                                                class="ml-2">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">Si</label>
                                                            <input type="radio"
                                                                aria-label="Radio button for following text input">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="example-text-input"
                                                                class="form-control-label text-dark">¿Meses de
                                                                gestacion?</label><br>
                                                            <input type="text" name="" id=""
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a class="btn bg-gradient-info text-white" onclick="prevForm();">Atras</a>
                                                <button type="submit" class="btn bg-gradient-primary" >Enviar</button>
                                                <a class="btn bg-gradient-info text-white" id="submitBtn" onclick="nextForm();
                                                ">Siguiente</a>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="active__form" id="form4">
                                        <div class="sub__title__container">
                                            <h4>Pagina 4/10</h4>
                                            <h3 class="title_view">Antecedentes familiares</h3>
                                        </div>
                                        <div class="input__container">
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-8">
                                                        <label for="exampleFormControlTextarea1"
                                                            class="text-dark">Enfermedades
                                                            respiratorias o alergicas</label>
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input"
                                                            class="ml-2">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Si</label>
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-8">
                                                        <label for="exampleFormControlTextarea1"
                                                            class="text-dark">Enfermedades
                                                            Cardio vasculares</label>
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input"
                                                            class="ml-2">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Si</label>
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Diabetes</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Obesidad</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Canceres</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1"
                                                            class="text-dark">Otros</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a class="btn bg-gradient-info text-white" onclick="prevForm();">Atras</a>
                                                <button type="submit" class="btn bg-gradient-primary" >Enviar</button>
                                                <a class="btn bg-gradient-info text-white" id="submitBtn" onclick="nextForm();
                                                ">Siguiente</a>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="active__form" id="form5">
                                        <div class="sub__title__container">
                                            <h4>Pagina 5/10</h4>
                                            <h3 class="title_view">Datos de actividad fisica</h3>
                                            <p> Del 1 A 4 es Actividad Alta y 1 Es Sedentarismo, Tener en Cuenta Si camina
                                                Hasta Su lugar de Residencia o Trabajo, Dias que entrena A la Semana, si su
                                                Trabajo es de oficina o un Trabajo de Campo</p>
                                        </div>
                                        <div class="input__container">
                                            <h5 class="title_view">Frecuencia de actividad fisica</h5>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input"
                                                            class="ml-2">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">
                                                            1 Sedentarismo Poco O nada de Ejercicio
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input"
                                                            class="ml-2">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">
                                                            2 Leve/ Ejercicio de 1 A 3 Veces Por Semana
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input"
                                                            class="ml-2">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">
                                                            3 Moderado/ Ejercicio de 3 A 5 Dias A la Semana
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input"
                                                            class="ml-2">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">
                                                            4 Actividad Alta/ Ejericio de 6 A 7 Dias A la Semana
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input"
                                                            class="ml-2">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">5 Ejercicio Muy Fuerte/
                                                            Dos Veces al Dia
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">¿Va al Gimnasio, Practica
                                                            algun Deporte O Realia Sesiones de Cardio?
                                                        </label><br>
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input"
                                                            class="ml-2">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Si</label>
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">No</label>
                                                        <label for="exampleFormControlTextarea1"
                                                            class="text-dark">¿Cuales?</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a class="btn bg-gradient-info text-white" onclick="prevForm();">Atras</a>
                                                <button type="submit" class="btn bg-gradient-primary" >Enviar</button>
                                                <a class="btn bg-gradient-info text-white" id="submitBtn" onclick="nextForm();
                                                ">Siguiente</a>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="active__form" id="form6">
                                        <div class="sub__title__container">
                                            <div class="sub__title__container">
                                                <h4>Pagina 6/10</h4>
                                                <h3 class="title_view">Datos Sobre la Alimentacion</h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">¿Dedica Tiempo a la
                                                            Elaboracion de comidas?
                                                        </label><br>
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input"
                                                            class="ml-2">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Si</label>
                                                        <input type="radio"
                                                            aria-label="Radio button for following text input">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">No</label>
                                                        <label for="exampleFormControlTextarea1"
                                                            class="text-dark">¿Porque?</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">¿ # De Veces que Consume
                                                            Comida Chatarra?
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Diario</label>
                                                        <input class="form-control" type="number">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Semanal</label>
                                                        <input class="form-control" type="number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Quincenal</label>
                                                        <input class="form-control" type="number">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">Mensual</label>
                                                        <input class="form-control" type="number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-text-input"
                                                            class="form-control-label text-dark">¿En que sitio suele
                                                            consumir sus Comidas(Trabajo o Universidad)?
                                                        </label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <a class="btn bg-gradient-primary text-white" onclick="prevForm();">Atras</a>
                                            <a class="btn bg-gradient-info text-white" id="submitBtn" onclick="nextForm();
                                            ">Siguiente</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="active__form" id="form7">
                                        <div class="sub__title__container">
                                            <h4>Pagina 7/10</h4>
                                            <h3 class="title_view">Alimentos Preferidos</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Cereales</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Lacteos</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Leguminosas</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Frutas</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Verduras</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="buttons">
                                                <a class="btn bg-gradient-primary text-white" onclick="prevForm();">Atras</a>
                                                
                                                <a class="btn bg-gradient-info text-white" id="submitBtn" onclick="nextForm();
                                                ">Siguiente</a>
                                            </div>
                                    </fieldset>
                                    <fieldset class="active__form" id="form8">
                                        <div class="sub__title__container">
                                            <h4>Pagina 8/10</h4>
                                            <h3 class="title_view">Alimentos no Preferidos</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Cereales</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Lacteos</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Leguminosas</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Frutas</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Verduras</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <a class="btn bg-gradient-primary text-white" onclick="prevForm();">Atras</a>
                                            <button type="submit" class="btn bg-gradient-primary" >Enviar</button>
                                            <a class="btn bg-gradient-info text-white" id="submitBtn" onclick="nextForm();
                                            ">Siguiente</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="active__form" id="form9">
                                        <div class="sub__title__container">
                                            <h4>Pagina 9/10</h4>
                                            <h3 class="title_view">Recordatorio 24 Horas</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Merienda</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">¿Alimentos que
                                                        consumes?</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Almuerzo</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">¿Alimentos que
                                                        consumes?</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Merienda</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">¿Alimentos que
                                                        consumes?</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Cena</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">¿Alimentos que
                                                        consumes?</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Otros</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <a class="btn bg-gradient-info text-white" onclick="prevForm();">Atras</a>
                                            <button type="submit" class="btn bg-gradient-primary" >Enviar</button>
                                            <a class="btn bg-gradient-info text-white" id="submitBtn" onclick="nextForm();
                                            ">Siguiente</a>
                                        </div>
                                    </fieldset>
                                    <fieldset class="active__form" id="form10">
                                        <div class="sub__title__container">
                                            <h4>Pagina 10/10</h4>
                                            <h3 class="title_view">Medidas Antropometricas </h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">¿peso actual?</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">¿peso Usual?</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Talla</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">C.Braquial</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">C.Abdominal</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">C.Muslo</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">C.Cuello</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">C.Cadera maxima</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">C.cintura</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">P.Tricital</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">P.Abdominal</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">P.Subescapular</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">P.Suprailiaco</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Notas</label>

                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <a class="btn bg-gradient-info text-white" onclick="prevForm();">Atras</a>
                                            <button type="submit" class="btn bg-gradient-primary" >Enviar</button>
                                            <a class="btn bg-gradient-info text-white" id="submitBtn" onclick="nextForm();
                                            ">Siguiente</a>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-primary" data-bs-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>



        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Status</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Employed</th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        .modal-dialog {
            overflow-y: initial !important
        }

        .modal-body {
            height: 550px;
            overflow-y: auto;
        }
    </style>
@endsection
