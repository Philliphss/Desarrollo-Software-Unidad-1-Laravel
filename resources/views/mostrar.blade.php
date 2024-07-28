<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Proyecto</title>
</head>
<body>
    <div>
        <h2>{{ $proyecto->nombre }}</h2>
        <p>Fecha de Inicio: {{ $proyecto->fecha_inicio }}</p>
        <p>Estado: {{ $proyecto->estado }}</p>
        <p>Responsable: {{ $proyecto->responsable }}</p>
        <p>Monto: {{ $proyecto->monto }}</p>
    </div>
</body>
</html>
<x-valor-uf />
