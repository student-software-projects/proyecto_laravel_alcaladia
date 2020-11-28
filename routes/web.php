<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|-----
| Here is where you can register web routes for your application. These
| routes are loaded by the Rou---------------------------------------------------------------------
|teServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::redirect('/','home');
Route::get('home',[homeController::class,'homeindex'])->name('home.index');
Route::get('localidad',[LocationsController::class,'index'])->name('localidad.index');
Route::get('localidad/create',[LocationsController::class,'create'])->name('localidad.create');
Route ::post('localidad',[LocationsController::class,'store'])->name('localidad.store');
Route ::get('localidad/{id}',[LocationsController::class,'show'])->name('localidad.show');
Route ::delete('localidad/{id}',[LocationsController::class,'destroy'])->name('localidad.destroy');
Route ::get('localidad/edit/{id}',[LocationsController::class,'edit'])->name('localidad.edit');
Route ::put('localidad/{id}',[LocationsController::class,'update'])->name('localidad.update');
////////////////////////////
///
Route::get('equipo',[EquipoController::class,'index'])->name('equipo.index');
Route::get('equipo/create',[EquipoController::class,'create'])->name('equipo.create');
Route::post('equipo',[EquipoController::class,'store'])->name('equipo.store');
Route::get('equipo/{id}',[EquipoController::class,'show'])->name('equipo.show');
Route::delete('equipo/{id}',[EquipoController::class,'destroy'])->name('equipo.destroy');
Route::get('equipo/edit/{id}',[EquipoController::class,'edit'])->name('equipo.edit');
Route::put('equipo/{id}',[EquipoController::class,'update'])->name('equipo.update');
/////////////////////////////////////
/// //////////////////////////////////
Route::get('jugador',[JugadorController::class,'index'])->name('jugador.index');
Route::get('jugador/create',[JugadorController::class,'create'])->name('jugador.create');
Route::post('jugador',[JugadorController::class,'store'])->name('jugador.store');
Route::get('jugador/{id}',[JugadorController::class,'show'])->name('jugador.show');
Route::delete('jugador/{id}',[JugadorController::class,'destroy'])->name('jugador.destroy');
Route::get('jugador/edit/{id}',[JugadorController::class,'edit'])->name('jugador.edit');
Route::put('jugador/{id}',[JugadorController::class,'update'])->name('jugador.update');


