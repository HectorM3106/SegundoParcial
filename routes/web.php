<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

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
Route::get('Materia', [MateriaController::class,'index'])->name('Materia.index');


Route::get('Estudiante', [EstudianteController::class,'index'])->name('Estudiante.index');
Route::get('Estudiante/create', [EstudianteController::class,'create'])->name('Estudiante.create');
Route::post('Estudiante', [EstudianteController::class,'store'])->name('Estudiante.store');

