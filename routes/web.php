<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\FiltrosController;
use App\Http\Controllers\AgregarSubscriptorController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\General;
use App\Http\Controllers\PrestamosController;
use App\Http\Controllers\AdminController;

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

Route::get('/register', function () {
    return view('auth.register');
});

//Rutas para mostrar libros según id.
Route::get('/detalleLibro/{id}', [FiltrosController::class, 'detalle'])->name('detalleLibro');
Route::post('/detalleLibro/{id}', [PrestamosController::class, 'prestamo'])->name('detalleLibro.prestar');

//Ruta para suscribirse con el newsletter
Route::post('/', [AgregarSubscriptorController::class,'agregarSub'])->name('/'); /* llamar a la funcion creada en controller */ 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Ver prestamos
Route::get('/prestamo', [PrestamosController::class, 'verPrestamos'])->name('prestamo');
/* HORARIOS BIBLIOTECA*/
Route::get('/horarios', [General::class, 'horarios']);

//ADMINISTRADOR
Route::middleware(['role:admin'])->group(function () {
    // Rutas que solo los administradores pueden acceder
    Route::get('/admin', [AdminController::class, 'gestionarPrestamosAlumnos'])->name('admin');
    //Marcar libro devuelto
    Route::put('/marcar-devuelto/{id}', [AdminController::class, 'marcarDevuelto'])->name('marcar.devuelto');
    //Agregar Sanción
    Route::put('/agregar-sancion/{id}', [AdminController::class, 'sancionar'])->name('agregar.sancion');
});


