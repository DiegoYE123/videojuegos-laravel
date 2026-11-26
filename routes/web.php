<?php

use App\Http\Controllers\EstadisticasController;
use App\Http\Controllers\VideojuegoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('videojuegos.index');
});

// Rutas agrupadas con el prefijo /videojuegos
Route::prefix('videojuegos')
    ->name('videojuegos.')
    ->controller(VideojuegoController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/plataformas', 'plataformas')->name('plataformas');
        Route::get('/{id}', 'show')->whereNumber('id')->name('show');
    });

Route::get('/estadisticas', EstadisticasController::class)
    ->middleware('auth')
    ->name('estadisticas');


require __DIR__.'/auth.php';
