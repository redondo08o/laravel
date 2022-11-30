<?php $act="pacientes";?>

@extends('layouts.admin')

@section('content')

<div class="card mb-4">
            <div class="card-header pb-0">
              <h6 class="md-4">Pacientes</h6>
              <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo paciente</button>

            </div>

      
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



            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                            <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Executive</p>
                        <p class="text-xs text-secondary mb-0">Projects</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Michael Levi</h6>
                            <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user5">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Richard Gran</h6>
                            <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Executive</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Miriam Eric</h6>
                            <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programtor</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

@endsection