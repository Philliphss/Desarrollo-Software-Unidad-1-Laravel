<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>

<body>
    <form action="/api/login" method="POST">
        @csrf
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="password" name="clave" placeholder="Clave" required>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>

</html>
