<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proyecto</title>
</head>
<body>
    <form action="/api/proyectos" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="date" name="fecha_inicio" placeholder="Fecha de Inicio">
        <input type="text" name="estado" placeholder="Estado">
        <input type="text" name="responsable" placeholder="Responsable">
        <input type="text" name="monto" placeholder="Monto">
        <button type="submit">Crear Proyecto</button>
    </form>
</body>
</html>
<x-valor-uf />
