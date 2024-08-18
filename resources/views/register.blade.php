<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <form action="/api/register" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="password" name="clave" placeholder="Clave" required>
        <button type="submit">Registrarse</button>
    </form>
</body>

</html>
