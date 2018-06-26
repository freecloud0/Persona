<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use Carbon\Carbon;
class DepartamentoController extends Controller
{
    public function index(){
        $departamentos=Departamento::all();
        return view('formulario/configuracion.modi',compact('departamentos'));
    }
    

    public function create()
    {
        return view('formulario/configuracion/departamento.create');
    }
    public function store(Request $request)
    {
        
        $id=Departamento::max('MASTDEPT_ID');
        $idmas=$id+1;
        $departamento = new Departamento;
        $departamento->MASTDEPT_ID=$idmas;
        $departamento->MASTDEPT_DESCRIP=request()->MASTDEPT_DESCRIP;
        $departamento->MASTDEPT_DATE_REG=Carbon::now()->toDateTimeString();
            // dd($departamento);
        $departamento->save();
        
        return redirect('departamento/create');
    }
}
