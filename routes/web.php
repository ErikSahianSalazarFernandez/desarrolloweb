<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscuelaController;
use App\Http\Controllers\Datos;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

// Lista de Alumnos
Route::name('lista')->get('/', [EscuelaController::class, 'listado']);
Route::name('detalle')->get('detalle/{id}', [EscuelaController::class, 'detalle']);

//Registrar
Route::name('nuevo')->get('nuevo', function () { return view('create'); } );
Route::name('guardar')->post('guardar', [EscuelaController::class, 'guardar_alumnos']);

//Editar Alumnos
Route::name('editar')->get('editar/{id}', [EscuelaController::class, 'editar']);
Route::name('salvar')->put('salvar/{id}', [EscuelaController::class, 'salvar']);

//Borrar Alumno
Route::name('borrar1')->delete('borrar/{id}', [EscuelaController::class, 'borrar']);
Route::name('borrar2')->get('borrar/{id}', [EscuelaController::class, 'borrar']);


//Ejercicios de JavaScript
//-----------------------------------------------------------------------------------
Route::get('ejemplo01', function () { return view('ejemplo01'); });

Route::get('ejemplo02', function () { return view('ejemplo02'); });

Route::get('random', function () { return view('random'); });

Route::name('consulta01')->get('consulta01', [Datos::class, 'consulta01']);

Route::name('datos1')->get('datos1', [Datos::class, 'datos1']);


//Ejercicios de JavaScript
//-----------------------------------------------------------------------------------

Route::name('consulta2')->get('consulta2', [Datos::class, 'consulta2']);
Route::name('datos2a')->get('datos2a', [Datos::class, 'datos2a']);
Route::name('datos2b')->get('datos2b', [Datos::class, 'datos2b']);
Route::name('datos2c')->get('datos2c', [Datos::class, 'datos2c']);
Route::name('consulta2r')->get('consulta2r', [Datos::class, 'consulta2r']);