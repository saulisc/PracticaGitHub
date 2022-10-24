<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('home',[ControladorVistas::class,'showHome']) -> name('home');
Route::get('formulario',[ControladorVistas::class,'showFormulario']) -> name('formulario');
Route::get('tabla',[ControladorVistas::class,'showTabla']) -> name('tabla');

//REQUEST POR POST
Route::post('procesarFormulario',[ControladorVistas::class,'procesarFormulario']) -> name('procesarFormulario');