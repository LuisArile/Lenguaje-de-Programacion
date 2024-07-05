<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectoriosController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio/mostrar', [DirectoriosController::class, 'mostrarDatos']);