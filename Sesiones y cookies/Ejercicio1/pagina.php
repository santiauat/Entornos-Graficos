<!DOCTYPE html>
<html lang="es">
<head>
    <title>Seleccion de estilo</title>
</head>
<body>
    <form action="pagina.php" method="post">
        <p>Seleccione el color de fondo que desea para la pagina</p>
        <br>
        <select name="estilo">
            <option value="verde"> Verde</option>
            <option value="gris">Gris</option>
            <option value="rosa"> Rosa</option>
        </select>
        <input type="submit" value="Actualizar el estilo">
    </form>
</body>
</html>

<?php

if(isset($_POST["estilo"])){
    //estoy recibiendo un estilo nuevo, hay que meterlo en las cookies
    $estilo = $_POST["estilo"];
    // meto el estilo en una cookie
    setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
} else{
    if(isset($_COOKIE["estilo"])){
        //es que tengo la cookie
        $estilo = $_COOKIE["estilo"];
    }
}
if(isset($estilo)){
    echo'<link rel="stylesheet" type="text/css" href="'.$estilo.'.css">';
}
?>