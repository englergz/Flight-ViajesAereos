<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrador\RutasController;
use App\Http\Controllers\Administrador\ClientesController;
use App\Http\Controllers\Administrador\VuelosController;
use App\Http\Controllers\Administrador\PasajesController;
use App\Http\Controllers\Administrador\DashboardController;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/contacto', [ClientesController::class, 'contacto'])->name('contacto');

//RUTA
Route::get('rutas', [RutasController::class, 'index'])
->name('rutas');
Route::get('rutas/registro', [RutasController::class, 'form'])->middleware(['auth'])
->name('formRuta');
Route::post('rutas/registro', [RutasController::class, 'crear'])->middleware(['auth'])
->name('crearRuta');
Route::get('rutas/actualizar/{id}', [RutasController::class, 'editar'])->middleware(['auth'])
->name('form_actualizaRuta');
Route::post('rutas/actualizar/{id}', [RutasController::class, 'actualizar'])->middleware(['auth'])
->name('actualizarRuta');
Route::post('rutas/buscar', [rutasController::class, 'buscar'])
->name('buscarRuta');

//CLIENTE
Route::get('clientes', [ClientesController::class, 'index'])
->name('clientes');
Route::get('clientes/registro/{cc}/{vuelo}', [ClientesController::class, 'form'])
->name('formCliente');
Route::post('clientes/registro/{cc}/{vuelo}', [ClientesController::class, 'crear'])
->name('crearCliente');

Route::get('clientes/r', [ClientesController::class, 'form_cliente'])->name('fcliente');
Route::post('clientes/r', [ClientesController::class, 'crear_cliente'])->name('ccliente');

Route::get('clientes/actualizar/{id}', [ClientesController::class, 'editar'])->middleware(['auth'])
->name('form_actualizaCliente');
Route::post('clientes/actualizar/{id}', [ClientesController::class, 'actualizar'])->middleware(['auth'])
->name('actualizarCliente');
Route::post('clientes/buscar', [ClientesController::class, 'buscar'])
->name('buscarCliente');
Route::get('clientes/eliminar/{id}', [clientesController::class, 'eliminar'])
->name('eliminarCliente');

//VUELO
Route::get('vuelos', [VuelosController::class, 'index'])
->name('vuelos');
Route::get('vuelos/registro', [VuelosController::class, 'form'])->middleware(['auth'])
->name('formVuelo');
Route::post('vuelos/registro', [VuelosController::class, 'crear'])->middleware(['auth'])
->name('crearVuelo');
Route::get('vuelos/actualizar/{id}', [VuelosController::class, 'editar'])->middleware(['auth'])
->name('form_actualizaVuelo');
Route::post('vuelos/actualizar/{id}', [VuelosController::class, 'actualizar'])->middleware(['auth'])
->name('actualizarVuelo');
Route::get('vuelos/consulta', [VuelosController::class, 'consulta'])->name('consultaVuelo');
Route::post('vuelos/consulta', [VuelosController::class, 'buscar'])->name('buscarVuelo');

//PASAJE
Route::get('pasajes', [PasajesController::class, 'index'])->middleware(['auth'])
->name('pasajes');
Route::get('pasajes/comprar/{id}', [PasajesController::class, 'form'])
->name('formPasaje');
Route::post('pasajes/comprar', [PasajesController::class, 'comprar'])
->name('comprarPasaje');
Route::get('pasajes/descargarPDF', [PasajesController::class, 'descargarPDF'])->middleware(['auth'])
->name('descargarPDF');
Route::get('pasajes/factura/{id}', [PasajesController::class, 'factura'])
->name('factura');