@extends('componentes/nav')
@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<div class="container">
    <div class="col-lg-4">

    <form action="/departamento" method="post" name="formdist">
    {{csrf_field()}}
        
        <div class="">
                        <label for="text"> Ingrese Departamento:</label>
                        <input name="MASTDEPT_DESCRIP" type="text" class="form-control" /> 
                        
                        <label for="text">Fecha Registro:</label>
                        <input name="MASTDEPT_DATE_REG" type="datetime" value={{date("d-m-Y H:i:s")}} disabled class="form-control" />
                        
                        <label for="text">Fecha de Actividad:</label>
                        <input name="MASTDEPT_DATE_REG" type="datetime" value={{date("d-m-Y H:i:s")}} disabled class="form-control" />

                        <label for="text"> Usuario:</label>
                        <input name="user" type="text" class="form-control" disabled /> 
        </div>
        <input type="submit" value="Guardar" class = "btn btn-primary btn-xs pull-right" />
                    
        
       
    </form>               
    </div>
</div>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    
  
@endsection