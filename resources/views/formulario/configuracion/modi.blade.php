
@extends('componentes/nav')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<div class="container10 blue p-4">
        <div class="ui-widget container">
                <label class="white-text" >Busqueda </label>
                <input  class="form-control w-100 redondear" id="filtrar"  placeholder="Escribe">
        </div>
</div>
<div class="container10 p-4">
        <div class="row">
            <div class="col-md-4 bg-gris visiblew">

                <div class="busca-trabajo  white mt-4 mb-4 p-2">
                        <p class="color-p360 f-360 sise-t-25 ml-4 ">Nivel de Estudio</p>
                        <label class="container-checkbox ml-4">Formación Profesional grado superior <span class="badge badge-pill blue ml-2">7</span>
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                        </label>
                        <label class="container-checkbox ml-4">Formación Profesional grado medio<span class="badge badge-pill blue ml-2">7</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                        </label>
                        <label class="container-checkbox ml-4">Graduado Escolar/Primarios<span class="badge badge-pill blue ml-2">7</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                        </label>
           
                </div>
                    
            </div>
            <div class="col-md-8">
                <div class="busca-trabajo   mt-4 mb-4 p-2">
                        
                        <div class="row mt-2 visiblew">
                                <div class="col-md-4">
                                        <p>Ofertas de empleo</p>
                                </div>
                                <div class="col-md-4 visiblew"></div>
                                <div class="col-md-4 text-center sm-02 ">
                                       selecione:
                                <a href="" class="btn btn-primary">Create</a>
                                      
                                </div>
                        </div>
                       
                </div>
                
                    <div class="row buscar">
                         @foreach ( $departamentos as $departamento )
                            <div class="col-md-4 mb-4" id="busca-tra">
                                <div class="panel panel-default  text-center busca-trabajo">
                                        <div class="overlay-card">
                                                <img src="https://images.unsplash.com/photo-1500397822960-47532107e0e4?auto=format&fit=crop&w=1310&q=80"
                                                class="img-rounded center-block">
                                                <div class="text-center white-text">
                                                <h6 class="mb-2 text-trabajo mn-t-02 ml-2">{{$departamento->MASTDEPT_DESCRIP}} </h6>
                                                <hr class=" bg-trabajo ml-4  mr-4">
                                                </div>

                                                
                                                <div class="share-buttons-row ">                                               
                                                        <!--agrega Button -->
                                                        <div class=" text-center" id="bt-flot-01" data-toggle="tooltip" title="Agregar Provincia" data-placement="bottom">
                                                             <a href="">
                                                                <div class="view">
                                                                        <i class="fas fa-marker white-text mt-3"></i>
                                                                        <div class="mask pattern-1 flex-center">     
                                                                        </div>
                                                                </div>
                                                              </a> 
                                                        </div>
                                                        <!--delete Button -->
                                                        <div class=" text-center" id="bt-flot-02" data-toggle="tooltip" title="Eliminar" data-placement="bottom"><i class="far fa-trash-alt white-text mt-3"></i></div>
                                                        <!--update Button -->
                                                        <div class=" text-center" id="bt-flot-03" data-toggle="tooltip" title="Actualizar" data-placement="bottom"><i class="fas fa-upload white-text mt-3"></i></i></div>
                                                </div> 
                                        </div>
                                </div>          
                            </div>
                         @endforeach




                    </div>
                    
    

            </div>
        </div>
    </div>




        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    
  








@endsection