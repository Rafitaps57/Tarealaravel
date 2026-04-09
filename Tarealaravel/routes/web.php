<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// Ruta principal: Listado de películas
Route::get('/', [MovieController::class, 'index'])->name('movies.index');

// Ruta para mostrar el formulario de creación
Route::get('/pelicula/nueva', [MovieController::class, 'create'])->name('movies.create');

// Ruta para procesar el envío del formulario (POST)
Route::post('/pelicula', [MovieController::class, 'store'])->name('movies.store');

// Ruta para ver el detalle de una película (Parámetro dinámico {id})
Route::get('/pelicula/{id}', [MovieController::class, 'show'])->name('movies.show');