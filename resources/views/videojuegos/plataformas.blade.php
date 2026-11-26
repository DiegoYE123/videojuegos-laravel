<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Videojuegos por plataforma</title></head>
<body>
    <h1>Videojuegos por plataforma</h1>

    <form method="GET" action="{{ route('videojuegos.plataformas') }}">
        <select name="plataforma">
            <option value="">Todas</option>
            @foreach (['PC', 'PlayStation', 'Xbox', 'Nintendo Switch'] as $p)
                <option value="{{ $p }}" @selected($plataforma === $p)>{{ $p }}</option>
            @endforeach
        </select>
        <button type="submit">Filtrar</button>
    </form>

    <ul>
        @forelse ($videojuegos as $v)
            <li>{{ $v['nombre'] }} – {{ $v['plataforma'] }} – {{ number_format($v['precio'], 2) }} €</li>
        @empty
            <li>No hay videojuegos para esa plataforma.</li>
        @endforelse
    </ul>

    <a href="{{ route('videojuegos.index') }}">Volver al listado</a>
</body>
</html>
