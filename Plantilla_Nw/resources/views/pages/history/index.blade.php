<?php $act = 'history'; ?>
@extends('layouts.admin');
@section('content')
    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

  

    <div class="modal fade position-relative w-1000 "  style="overflow-y:hidden" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
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
                                        <h3>Usuario</h3>
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
                                        <h3>Datos alimenticios</h3>
                                        <p>LLenar y continuar</p>
                                    </div>
                                    <div class="title__name">
                                        <h3>Actividad fisica</h3>
                                        <p>LLenar y continuar</p>
                                    </div>
                                    <div class="title__name">
                                        <h3>Seguimiento</h3>
                                        <p>LLenar y continuar</p>
                                    </div>
                                    <div class="title__name">
                                        <h3>Recordatorio 24 horas</h3>
                                        <p>LLenar y continuar</p>
                                    </div>
                                </div>
                                <div class="progress__bar__container">
                                    <ul>
                                        <li class="active" id="icon1">
                                            <ion-icon name="person-outline"></ion-icon>
                                        </li>
                                        <li id="icon2">
                                            <ion-icon name="book-outline"></ion-icon>
                                        </li>
                                        <li id="icon3">
                                            <ion-icon name="layers-outline"></ion-icon>
                                        </li>
                                        <li id="icon4">
                                            <ion-icon name="pricetag-outline"></ion-icon>
                                        </li>
                                        <li id="icon5">
                                            <ion-icon name="mail-outline"></ion-icon>
                                        </li>
                                        <li id="icon6">
                                            <ion-icon name="layers-outline"></ion-icon>
                                        </li>
                                        <li id="icon7">
                                            <ion-icon name="pricetag-outline"></ion-icon>
                                        </li>
                                        <li id="icon8">
                                            <ion-icon name="mail-outline"></ion-icon>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right__container">
                                <fieldset id="form1">
                                    <div class="sub__title__container">
                                        <p>Step 1/5</p>
                                        <h3 class="title_view">Creacion de Usuario</h3>
                                    </div>
                                    <div class="input__container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label text-dark">N.o
                                                        Documento</label>
                                                    <input class="form-control" type="number" placeholder="4354">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label text-dark">Tpo
                                                        de Documento</label>
                                                    <select class="form-control" style="height: 49px">
                                                        <option>Eliga el tipo</option>
                                                        <option>CC</option>
                                                        <option>Ti</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">rol</label>
                                                    <select class="form-control" style="height: 49px">
                                                        <option>Escoja rol</option>
                                                        <option>administrador</option>
                                                        <option>Paciente</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Nombre de usuario</label>
                                                    <input class="form-control" type="text" placeholder="jesus@">
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label text-dark">Contraseña</label>
                                                    <input class="form-control" type="password">
                                                </div>
                                            </div>
                                            <a class="nxt__btn" onclick="nextForm();"> Next</a>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="active__form" id="form2">
                                    <div class="sub__title__container">
                                        <p>Step 2/5</p>
                                        <h2>What best describes you ?</h2>
                                        <p>Please let us know what type of business best describes you as entreprenuer or
                                            businessman.</p>
                                    </div>

                                    <div class="input__container">
                                        <div class="selection newB">
                                            <div class="imoji">
                                                <ion-icon name="happy"></ion-icon>

                                            </div>
                                            <div class="descriptionTitle">
                                                <h3>New Business</h3>
                                                <p>Started trading in last 12 months</p>
                                            </div>
                                        </div>
                                        <div class="selection exitB">
                                            <div class="imoji">
                                                <ion-icon name="business"></ion-icon>
                                            </div>
                                            <div class="descriptionTitle">
                                                <h3>Existing Business</h3>
                                                <p>Have been operating beyond 12 months</p>
                                            </div>
                                        </div>

                                        <div class="buttons">
                                            <a class="prev__btn" onclick="prevForm();">Back</a>
                                            <a class="nxt__btn" onclick="nextForm();">Next</a>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="active__form" id="form3">
                                    <div class="sub__title__container">
                                        <p>Step 3/5</p>
                                        <h2>What service are looking for ?</h2>
                                        <p>Please let us know what type of business best describes you as entreprenuer or
                                            businessman.</p>
                                    </div>

                                    <div class="input__container">
                                        <div class="selection newB">
                                            <div class="imoji">
                                                <ion-icon name="desktop"></ion-icon>

                                            </div>
                                            <div class="descriptionTitle">
                                                <h3>Website Development</h3>
                                                <p>Development of online websites</p>
                                            </div>
                                        </div>
                                        <div class="selection exitB">
                                            <div class="imoji">
                                                <ion-icon name="phone-portrait"></ion-icon>
                                            </div>
                                            <div class="descriptionTitle">
                                                <h3>Development of Mobile App</h3>
                                                <p>Development of android and IOS mobile app</p>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <a class="prev__btn" onclick="prevForm();">Back</a>
                                            <a class="nxt__btn" onclick="nextForm();">Next</a>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="active__form" id="form4">
                                    <div class="sub__title__container">
                                        <p>Step 4/5</p>
                                        <h2>Please select your budget</h2>
                                        <p>Please let us know budget for your project so yes are great that we can give the
                                            right quote thanks</p>
                                    </div>

                                    <div class="input__container">


                                        <input type="range" min="10000" max="500000" value="250000"
                                            class="slider">
                                        <div class="output__value">

                                        </div>

                                        <div class="buttons">
                                            <a class="prev__btn" onclick="prevForm();">Back</a>
                                            <a class="nxt__btn" onclick="nextForm();">Next</a>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="active__form" id="form5">
                                    <div class="sub__title__container">
                                        <p>Step 5/5</p>
                                        <h2>Complete Submission</h2>
                                        <p>Thanks for completing the form and for your time.Plss enter your email below and
                                            submit the form</p>
                                    </div>

                                    <div class="input__container">
                                        <label for="Email">Enter your email</label>
                                        <input type="text">
                                        <div class="buttons">
                                            <a class="prev__btn" onclick="prevForm();">Back</a>
                                            <a class="nxt__btn" id="submitBtn" onclick="nextForm();">Next</a>
                                        </div>

                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-gradient-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
