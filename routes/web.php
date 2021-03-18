<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CrateController;
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
Route::get('/',HomeController::class)->name('home');
Route::get('about', [AboutController::class,'index'])->name('about.index'); 
Route::get('cursos', [CursosController::class,'index'])->name('cursos.index'); 
Route::get('creaciondecursos', [CursosController::class,"create"])->name('cursos.create');
Route::get('gestion', [CursosController::class,"lista"])->name('cursos.lista');
Route::post('cursos', [CursosController::class,"store"])->name('cursos.store');
Route::get('contacto', [ContactoController::class,'index'])->name('contacto.index'); 
Route::post('contacto', [ContactoController::class,'store'])->name('contacto.store');
Route::get('cursos/{id}', [CursosController::class,'showDetails'])->name('cursos.showDetails');
Route::get('editarcursos/{id}', [CursosController::class,'editar'])->name('cursos.editar'); 
Route::put('cursos/{curso}', [CursosController::class,'actualizar'])->name('cursos.actualizar'); 
