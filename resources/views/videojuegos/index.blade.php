<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Catálogo de videojuegos</title></head>
<body>
    <h1>Catálogo de videojuegos</h1>

    <p>
        <a href="{{ route('videojuegos.plataformas') }}">Filtrar por plataforma</a> |
        <a href="{{ route('estadisticas') }}">Estadísticas</a>
    </p>

    <ul>
        @foreach ($videojuegos as $v)
            <li>
                <a href="{{ route('videojuegos.show', $v['id']) }}">{{ $v['nombre'] }}</a>
                – {{ $v['plataforma'] }} – {{ number_format($v['precio'], 2) }} €
            </li>
        @endforeach
    </ul>
</body>
</html>
