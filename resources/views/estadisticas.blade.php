<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Estadísticas</title></head>
<body>
    <h1>Estadísticas del catálogo</h1>
    <ul>
        <li>Número total de videojuegos: {{ $total }}</li>
        <li>Número de plataformas diferentes: {{ $plataformas }}</li>
        <li>Precio medio: {{ number_format($precioMedio, 2) }} €</li>
    </ul>
    <a href="{{ route('videojuegos.index') }}">Volver al listado</a>
</body>
</html>
