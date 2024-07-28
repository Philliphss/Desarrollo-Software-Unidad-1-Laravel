<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proyecto</title>
</head>
<body>
    <form action="/api/proyectos/{{ $proyecto->id }}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="nombre" value="{{ $proyecto->nombre }}">
        <input type="date" name="fecha_inicio" value="{{ $proyecto->fecha_inicio }}">
        <input type="text" name="estado" value="{{ $proyecto->estado }}">
        <input type="text" name="responsable" value="{{ $proyecto->responsable }}">
        <input type="text" name="monto" value="{{ $proyecto->monto }}">
        <button type="submit">Actualizar Proyecto</button>
    </form>
</body>
</html>
<x-valor-uf />
