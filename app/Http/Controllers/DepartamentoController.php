<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
class DepartamentoController extends Controller
{
    public function index(){
        $departamentos=Departamento::all();
        return view('formulario/configuracion.modi',compact('departamentos'));
    }
    

    public function create()
    {
        return view('departamentos.create');
    }
}
