<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\FiltrosController;
use App\Http\Controllers\AgregarSubscriptorController;

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
/* Página Principal 
Route::get('/', function () {
    return view('páginas.principal');
});
*/
Route::get('/' , [LibrosController::class, 'mostrarResultados']);
/* Login */
Route::get('/login', function () {
    return view('páginas.login');
});
Route::get('/libro/{categoria_id}', [FiltrosController::class, 'filtro']);

Route::get('/libro', [FiltrosController::class,'busqueda'])->name('libro');

Route::get('/detalleLibro/{id}', [FiltrosController::class, 'detalle'])->name('detalleLibro');

Route::post('/', [AgregarSubscriptorController::class,'agregarSub'])->name('/'); /* llamar a la funcion creada en controller */ 

Route::get('/prestamo', function () {
    return view('páginas.prestamo');
});