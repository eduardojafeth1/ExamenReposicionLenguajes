<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;

class ProveedoresController extends Controller
{
    
    public function ver(){
        $proveedores = Proveedores::all();

        return view('ProveedoresMostrar',compact('proveedores'));
    }


    public function crear(){
        return view('ProveedoresCrear');
    }
    
    
    public function guardar(){
        $nuevoProveedor= new Proveedores();
        $nuevoProveedor->nombre = request('nombre');
        $nuevoProveedor->fechaDeRegistro = request('fechaDeRegistro');
        $nuevoProveedor->telefono = request('telefono');
        $nuevoProveedor->correo = request('correo');
        $nuevoProveedor->save();

        return redirect('/proveedores');
    }

}
