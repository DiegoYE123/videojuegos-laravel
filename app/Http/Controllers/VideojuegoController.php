<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    
    public static function catalogo(): array
    {
        return [
            ['id' => 1, 'nombre' => 'The Witcher 3',          'plataforma' => 'PC',              'precio' => 29.99],
            ['id' => 2, 'nombre' => 'God of War',             'plataforma' => 'PlayStation',     'precio' => 39.99],
            ['id' => 3, 'nombre' => 'Halo Infinite',          'plataforma' => 'Xbox',            'precio' => 49.99],
            ['id' => 4, 'nombre' => 'Zelda: Breath of the Wild', 'plataforma' => 'Nintendo Switch', 'precio' => 59.99],
            ['id' => 5, 'nombre' => 'Cyberpunk 2077',         'plataforma' => 'PC',              'precio' => 34.99],
            ['id' => 6, 'nombre' => 'Spider-Man',             'plataforma' => 'PlayStation',     'precio' => 44.99],
        ];
    }

    // Listado de todos los videojuegos
    public function index()
    {
        return view('videojuegos.index', [
            'videojuegos' => self::catalogo(),
        ]);
    }

    // Detalle de un videojuego por su id
    public function show($id)
    {
        $videojuego = collect(self::catalogo())->firstWhere('id', (int) $id);

        abort_if(is_null($videojuego), 404, 'Videojuego no encontrado');

        return view('videojuegos.show', [
            'videojuego' => $videojuego,
        ]);
    }
    public function plataformas()
{
    $plataformas = Plataforma::all(); // ajusta al nombre de tu modelo
    return view('videojuegos.plataformas', compact('plataformas'));
}
}
