<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Proyectos</title>
</head>
<body>
    <h1>Lista de Proyectos</h1>
    @foreach ($proyectos as $proyecto)
        <div>
            <h2>{{ $proyecto->nombre }}</h2>
            <p>Fecha de Inicio: {{ $proyecto->fecha_inicio }}</p>
            <p>Estado: {{ $proyecto->estado }}</p>
            <p>Responsable: {{ $proyecto->responsable }}</p>
            <p>Monto: {{ $proyecto->monto }}</p>
            <a href="/proyectos/{{ $proyecto->id }}/editar">Editar</a>
            <form action="/api/proyectos/{{ $proyecto->id }}" method="POST" style="display:inline;">
                @method('DELETE')
                @csrf
                <button type="submit">Eliminar</button>
            </form>
        </div>
    @endforeach
</body>
</html>
<x-valor-uf />
