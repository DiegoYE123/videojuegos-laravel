<?php

namespace App\Http\Controllers;

class EstadisticasController extends Controller
{
    public function __invoke()
    {
        $videojuegos = collect(VideojuegoController::catalogo());

        return view('estadisticas', [
            'total'       => $videojuegos->count(),
            'plataformas' => $videojuegos->pluck('plataforma')->unique()->count(),
            'precioMedio' => round($videojuegos->avg('precio'), 2),
        ]);
    }
}
