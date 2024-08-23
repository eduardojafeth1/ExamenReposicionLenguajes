<?php

namespace App\Http\Controllers;

use App\Models\Empleados;

class EmpleadosController extends Controller
{
    
    public function ver(){
        $empleados = Empleados::all();

        return view('EmpleadosMostrar',compact('empleados'));
    }


    public function crear(){
        return view('EmpleadoCrear');
    }
    
    
    public function guardar(){
        $nuevoEmpleado= new Empleados();
        $nuevoEmpleado->nombre = request('nombre');
        $nuevoEmpleado->apellido = request('apellido');
        $nuevoEmpleado->fechaIngreso = request('fechaIngreso');
        $nuevoEmpleado->salario = request('salario');
        $nuevoEmpleado->save();

        return redirect('/empleados');
    }
}
