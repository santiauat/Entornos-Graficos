<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="pagina2.php" method="post">
    <p>Ingrese Nombre de Usuario</p> 
        <input type="text" id="usuario" name="usuario" required> 
        <p>Ingrese Contraseña</p> 
        <input type="password" id="clave" name="clave" required> <br><br>
        <input type="submit" name="cargar" value="aceptar">
    </form>
</body>
</html>