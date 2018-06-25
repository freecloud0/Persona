

@extends('componentes/nav')

@section('content')


<div class="p-4">
        <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-justified">
              <li class="nav-item">
                  <p>Tipo de Persona</p>
              </li>
              <li class="nav-item " >
                  <a class="nav-link active" id="t-persona" data-toggle="tab" href="#panel2" role="tab">Natural</a>
              </li>
              <li class="nav-item" >
                  <a class="nav-link" id="t-persona" data-toggle="tab" href="#panel3" role="tab">Jurídico</a>
              </li>
          </ul>
          <!-- Tab panels -->
          <div class="tab-content card">
  
              <!--Panel 2-->
              <div class="tab-pane fade in show active p-4" id="panel2" role="tabpanel">
                  <br>
                  
                  <div class="form-group">
  
                          <div class="row">
                              <div class="col-md-5">
                                      <p class="b-01">Datos de la Persona</p>
                                      <div class="float-left">
                                              <label for="formGroupExampleInput">Apellido Paterno</label>
                                              <input type="text" class="form-control " id="formGroupExampleInput" placeholder="Example input">
                                      </div>
                                      <div class="float-right">
                                              <label for="formGroupExampleInput">Apellido Materno</label>
                                              <input type="text" class="form-control " id="formGroupExampleInput" placeholder="Example input">
                                      </div>
                                      
                                      <div class="float-none">
  
  
                                          <label for="formGroupExampleInput">Nombres Completos</label>
                                          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                          <label for="formGroupExampleInput">Alias Completo</label>
                                          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  
                                          <label for="formGroupExampleInput">Numero de Documento</label>
                                          <input type="text" class="form-control w-5" id="formGroupExampleInput" placeholder="Example input">
                                      </div>
                                      
                              </div>
                              
                              <div class="col-md-7">
                                      <div class="float-right w-25 ml-4 mn-t-01">
                                              <label for="formGroupExampleInput">Fecha de Registro</label>
                                              <input type="text" class="form-control  " id="formGroupExampleInput" placeholder="15/05/2019">
                                      </div>
                                      <div class="float-right w-25 ml-4 mn-t-01">
                                              <label for="formGroupExampleInput">Fecha de Actividad</label>
                                              <input type="text" class="form-control " id="formGroupExampleInput" placeholder="15/05/2019">
                                      </div>
                                      <p class="b-01">Datos Personales</p>
                                      
                                      <div class="">
                                              <label for="formGroupExampleInput">Lugar de Nacimiento</label>
                                          <input type="text" class="form-control w-5" id="formGroupExampleInput" placeholder="Example input">
                                      </div>
                                      <div class="float-left w-25 mr-4">
                                              <label for="formGroupExampleInput ">Departamento </label> 
                                              <select class="form-control " id="exampleFormControlSelect1">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              </select>
                                      </div>
                                      <div class="float-left w-25 mr-4">
                                              <label for="formGroupExampleInput ">Provincia </label> 
                                              <select class="form-control " id="exampleFormControlSelect1">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              </select>
                                      </div>
                                      <div class="float-left w-25 mr-4">
                                              <label for="formGroupExampleInput ">Distrito </label> 
                                              <select class="form-control " id="exampleFormControlSelect1">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                              </select>
                                      </div>
                                      <div class="float-lg-left w-50 pr-4">
                                          <label for="formGroupExampleInput">Fecha de Nacimiento</label>
                                          <input type="text" class="form-control " id="formGroupExampleInput" placeholder="Example input">
                                      </div>
                                      <div class="float-lg-right w-50">
                                              <label for="formGroupExampleInput">Nacionalidad</label>
                                              <select class="form-control " id="exampleFormControlSelect1">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                  </select>
                                      </div>
                                      <div class="float-lg-left ">
                                                      <p>sexo</p>
                                                  <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                      <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                      <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                                                      <label class="form-check-label" for="inlineRadio3">Sin Definir</label>
                                                  </div>
                                      </div>   
                                          
                              </div>
                          </div>
                  </div>
              </div>
              <!--/.Panel 2-->
              <!--Panel 3-->
              <div class="tab-pane fade p-4" id="panel3" role="tabpanel">
                      <div class="float-right w-25 ml-4 mn-t-01">
                              <label for="formGroupExampleInput">Fecha de Registro</label>
                              <input type="text" class="form-control  " id="formGroupExampleInput" placeholder="15/05/2019">
                      </div>
                      <div class="float-right w-25 ml-4 mn-t-01">
                              <label for="formGroupExampleInput">Fecha de Actividad</label>
                              <input type="text" class="form-control " id="formGroupExampleInput" placeholder="15/05/2019">
                      </div>
                      <p class="b-01">Datos Personales</p>
                      <div class="float-none">
  
  
                      <label for="formGroupExampleInput">Nombres Completos</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                      
  
                      <label for="formGroupExampleInput">Numero de Documento</label>
                      <input type="text" class="form-control w-50" id="formGroupExampleInput" placeholder="Example input">
                  </div>
                      
              </div>
              <!--/.Panel 3-->
                  <div class="form-group pl-4 pr-4 -pb-4">
                          <div class="row">
                                  <div class="col-md-4 mt-4">
                                          <p class="b-01">Correos Electrónico</p>
                                          <!-- Button trigger modal -->
                                          <button type="button" class="btn red" data-toggle="modal" data-target="#ModalEmail">
                                                  <i class="far fa-envelope-open mr-2"></i> Agregar E-mail
                                          </button>
                                              
                                          <!-- Modal -->
                                          <div class="modal fade" id="ModalEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-lg " role="document">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <p>Correos Electrónico</p>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                              </button>
                                                          </div>
                                                          <div class="modal-body">
                                                              <div class="row">
                                                                  <div class="col-6">
                                                                      <label for="formGroupExampleInput">E-mail</label>    
                                                                      <input type="text" class="form-control  " id="formGroupExampleInput" placeholder="Example-jean@gmail.com">
                                                                      
                                                                  </div>
                                                                  <div class="col-6">
                                                                          <label for="formGroupExampleInput ">Tipo De E-mail </label> 
                                                                          <select class="form-control " id="exampleFormControlSelect1">
                                                                          <option>Personal</option>
                                                                          <option>Institucional</option>
                                                                          </select>
                                                                  </div>
                                                              </div>
                                                                  <label for="formGroupExampleInput">Estado</label>    
                                                                          <select class="form-control w-25" id="exampleFormControlSelect1">
                                                                          <option>Activo</option>
                                                                          <option>Desactivo</option>
                                                                          </select>
                                                          </div>
                                                          <div class="modal-footer">  
                                                              <button type="button" class="btn green">Registrar</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                          </div>
                                  </div>
                                  <div class="col-md-4  mt-4" >
                                          <p class="b-01">Dirección</p>
                                          <!-- Button trigger modal -->
                                          <button type="button" class="btn red" data-toggle="modal" data-target="#ModalDire">
                                                  <i class="fas fa-map-signs mr-2"></i> Agregar Dirección
                                          </button>
                                              
                                          <!-- Modal -->
                                          <div class="modal fade" id="ModalDire" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-lg " role="document">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <p>Dirección </p>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                              </button>
                                                          </div>
                                                          <div class="modal-body">
                                                              <div class="row">
                                                                  <div class="col-2">
                                                                              <label for="formGroupExampleInput ">Tipo De Calle</label> 
                                                                              <select class="form-control " id="exampleFormControlSelect1">
                                                                              <option>Jr</option>
                                                                              <option>Calle</option>
                                                                              </select>
                                                                  </div>
                                                                  <div class="col-8">
                                                                      <label for="formGroupExampleInput">Descripción</label>    
                                                                      <input type="text" class="form-control  " id="formGroupExampleInput" placeholder="Calle 4 los Olvidados de Dios">
                                                                      
                                                                  </div>
                                                                  <div class="col-2">
                                                                          <label for="formGroupExampleInput ">Número </label> 
                                                                          <input type="text" class="form-control  " id="formGroupExampleInput" placeholder="####">
                                                                      
                                                                  </div>
                                                              
                                                              </div>
                                                                  <label for="formGroupExampleInput">Referencia</label>    
                                                                  <input type="text" class="form-control  " id="formGroupExampleInput" placeholder="A tres cuadras del hotel Miraflores">
                                                                  <label for="formGroupExampleInput">Descripción</label>    
                                                                  <input type="text" class="form-control " id="formGroupExampleInput" placeholder="Cuatro paredes y una puerta">
                                                                  <div class="row ">
                                                                      <div class="col-10">
                                                                              <div class="float-left w-25 mr-4">
                                                                                      <label for="formGroupExampleInput ">Departamento </label> 
                                                                                      <select class="form-control " id="exampleFormControlSelect1">
                                                                                      <option>1</option>
                                                                                      <option>2</option>
                                                                                      <option>3</option>
                                                                                      <option>4</option>
                                                                                      <option>5</option>
                                                                                      </select>
                                                                              </div>
                                                                              <div class="float-left w-25 mr-4">
                                                                                      <label for="formGroupExampleInput ">Provincia </label> 
                                                                                      <select class="form-control " id="exampleFormControlSelect1">
                                                                                      <option>1</option>
                                                                                      <option>2</option>
                                                                                      <option>3</option>
                                                                                      <option>4</option>
                                                                                      <option>5</option>
                                                                                      </select>
                                                                              </div>
                                                                              <div class="float-left w-25 mr-4">
                                                                                      <label for="formGroupExampleInput ">Distrito </label> 
                                                                                      <select class="form-control " id="exampleFormControlSelect1">
                                                                                      <option>Huancayo</option>
                                                                                      <option>2</option>
                                                                                      <option>3</option>
                                                                                      <option>4</option>
                                                                                      <option>5</option>
                                                                                      </select>
                                                                              </div>
                                                                              
                                                                      </div>
                                                                      <div class=" col-2">
                                                                              <label for="formGroupExampleInput ">Secuencia </label> 
                                                                              <input type="text" class="form-control  " id="formGroupExampleInput" placeholder="####">
                                                                          
                                                                      </div>
                                                                  </div>     
                                                          </div>
                                                          <div class="modal-footer">  
                                                              <button type="button" class="btn green">Registrar</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                          </div>
                                  </div>
                                  <div class="col-md-4  mt-4">
                                          <p class="b-01">Teléfono</p>
                                          <!-- Button trigger modal -->
                                          <button type="button" class="btn red" data-toggle="modal" data-target="#exampleModal">
                                                  <i class="fas fa-mobile-alt mr-2"></i>Agregar Teléfono
                                          </button>
                                              
                                          <!-- Modal -->
                                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-lg " role="document">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <p>Teléfono </p>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                              </button>
                                                          </div>
                                                          <div class="modal-body">
                                                              <div class="row">
                                                                  <div class="col-3">
                                                                              <label for="formGroupExampleInput ">Operador</label> 
                                                                              <select class="form-control " id="exampleFormControlSelect1">
                                                                              <option>Bitel</option>
                                                                              <option>Claro</option>
                                                                              </select>
                                                                  </div>
                                                                  <div class="col-3">
                                                                          <label for="formGroupExampleInput ">Tipo de Teléfono</label> 
                                                                          <select class="form-control " id="exampleFormControlSelect1">
                                                                          <option>Movil</option>
                                                                          <option>Fijo</option>
                                                                          </select>
                                                                  </div>
                                                                  <div class="col-6">
                                                                      <label for="formGroupExampleInput">Número</label>    
                                                                      <input type="text" class="form-control  " id="formGroupExampleInput" placeholder="#########">
                                                                      
                                                                  </div>
                                                                  
                                                              
                                                              </div>
                                                                  <label for="formGroupExampleInput">Comentario</label>    
                                                                  <input type="text" class="form-control  " id="formGroupExampleInput" placeholder="A tres cuadras del hotel Miraflores">
                                                                  
                                                                  <div class="row ">
                                                                      <div class="col">
                                                                              <label for="formGroupExampleInput">Estado</label>    
                                                                              <select class="form-control " id="exampleFormControlSelect1">
                                                                              <option>Activo</option>
                                                                              <option>Desactivo</option>
                                                                              </select>
                                                                              
                                                                      </div>
                                                                      <div class=" col">
                                                                              <label for="formGroupExampleInput ">Secuencia </label> 
                                                                              <input type="text" class="form-control w-25 " id="formGroupExampleInput" placeholder="####">
                                                                          
                                                                      </div>
                                                                  </div>     
                                                          </div>
                                                          <div class="modal-footer">  
                                                              <button type="button" class="btn green">Registrar</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                          </div>
                                  </div>
                              </div>
                  </div>
                  
          </div>
  
      </div>


@endsection