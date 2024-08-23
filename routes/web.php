<?php

use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
     return view('welcome');
 })->name('home');

Route::get('/productos',[ProductosController::class,'ver'])->name('productos.ver');

Route::get('/productos/crear',[ProductosController::class,'crear'])->name('productos.crear');

Route::post('/productos/guardar',[ProductosController::class,'guardar'])->name('productos.guardar');



Route::get('/empleados',[EmpleadosController::class,'ver'])->name('empleado.ver');

Route::get('/empleados/crear',[EmpleadosController::class,'crear'])->name('empleado.crear');

Route::post('/empleados/guardar',[EmpleadosController::class,'guardar'])->name('empleado.guardar');




Route::get('/proveedores',[ProveedoresController::class,'ver'])->name('proveedor.ver');

Route::get('/proveedores/crear',[ProveedoresController::class,'crear'])->name('proveedor.crear');

Route::post('/proveedores/guardar',[ProveedoresController::class,'guardar'])->name('proveedor.guardar');
