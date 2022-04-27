<?php

use App\Http\Controllers\mantenimiento\AsignaturaController;
use App\Http\Livewire\CatalogoNacionalidad;
use App\Http\Livewire\Departamento;

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

  Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash'); 

    Route::get('/Departamento', Departamento::class)->name('Departamento');
    Route::get('/CatalogoNacionalidad', CatalogoNacionalidad::class)->name('CatalogoNacionalidad');
    // Mantenimientos
        // ASIGANTURA
         Route::resource('/mantenimiento/Asignatura', AsignaturaController::class)->names('mantenimiento.asignatura');
 }); 
