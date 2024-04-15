<?php

use Illuminate\Support\Facades\Route;
//agregamos los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para importar asistencias desde un archivo Excel
Route::get('asistencias/importar', [AsistenciaController::class, 'importForm'])->name('asistencias.import.form');
Route::post('asistencias/importar', [AsistenciaController::class, 'import'])->name('asistencias.import');

Route::get('asistencia.export', 'App\Http\Controllers\AsistenciaController@export')->name('asistencia.export');
Route::get('concentrado.export', 'App\Http\Controllers\AsistenciaController@export2')->name('concentrado.export');

Route::get('/asistencias/clear', [AsistenciaController::class, 'clear'])->name('asistencias.clear');



// Grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('informes',  App\Http\Controllers\InformeController::class);
    Route::resource('asistencias', App\Http\Controllers\AsistenciaController::class);
});