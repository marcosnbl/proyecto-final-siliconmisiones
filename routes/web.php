<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ContactoController;
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
Route::get('contacto', [ContactoController::class,'index'])->name('contacto.index'); 
Route::post('contacto', [ContactoController::class,'store'])->name('contacto.store');

