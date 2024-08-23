<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function ver(){
        $productos = Productos::all();

        return view('ProductosVerView',compact('productos'));
    }


    public function crear(){
        return view('ProductosCrearView');
    }
    
    
    public function guardar(){
        $nuevoProducto= new Productos();
        $nuevoProducto->descripcion = request('descripcion');
        $nuevoProducto->precio = request('precio');
        $nuevoProducto->stock = request('stock');
        $nuevoProducto->pagaisv = request('pagaisv') === 'true' ? 1 : 0;
        $nuevoProducto->save();

        return redirect('/productos');
    }
}
