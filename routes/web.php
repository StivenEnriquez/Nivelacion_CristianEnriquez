<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutasController;
use App\Http\Controllers\ViajesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\TicketsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/auth.php';
Auth::routes();

/****** index's */
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('viajes', [ViajesController::class, 'index'])->middleware(['auth'])->name('viajes');
Route::get('tickets', [TicketsController::class, 'index'])->middleware(['auth'])->name('tickets');
Route::get('rutas', [RutasController::class, 'index'])->middleware(['auth'])->name('rutas');
Route::get('clientes', [ClientesController::class, 'index'])->middleware(['auth'])->name('clientes');

/****** Registrar */
Route::post('viajes/registrar', [viajesController::class, 'registrar'])->middleware(['auth'])->name('registro_viaje');
Route::post('tickets/comprar', [ticketsController::class, 'registrar'])->name('registro_ticket');
Route::post('rutas/registrar', [RutasController::class, 'registrar'])->middleware(['auth'])->name('registro_ruta');
Route::post('clientes/registro', [ClientesController::class, 'registrar'])->name('registro_cliente');

/****** formulario's de actualizar */
Route::get('viajes/actualizar/{id}', [viajesController::class, 'form_actualizar'])->middleware(['auth'])->name('form_actualizar_viaje');
Route::get('rutas/actualizar/{id}', [RutasController::class, 'form_actualizar'])->middleware(['auth'])->name('form_actualizar_ruta');
Route::get('clientes/actualizar/{id}', [ClientesController::class, 'form_actualizar'])->middleware(['auth'])->name('form_actualizar_cliente');

/****** Actualizar */
Route::post('viajes/actualizar/{id}', [viajesController::class, 'actualizar'])->middleware(['auth'])->name('actualizar_viaje');
Route::post('rutas/actualizar/{id}', [RutasController::class, 'actualizar'])->middleware(['auth'])->name('actualizar_ruta');
Route::post('clientes/actualizar/{id}', [ClientesController::class, 'actualizar'])->middleware(['auth'])->name('actualizar_cliente');

/****** Compra de ticket */
Route::get('tickets/comprado', [ticketsController::class, 'comprado'])->name('comprado');
Route::get('tickets/no-registrado', [ticketsController::class, 'no_registrado'])->name('no_registrado');
Route::get('tickets/facturar/{id}', [ticketsController::class, 'facturar'])->name('facturar');

/****** Consultar */
Route::post('rutas/consultar', [RutasController::class, 'consultar'])->name('consulta_ruta');
Route::post('clientes/consultar', [ClientesController::class, 'consultar'])->name('consulta_cliente');