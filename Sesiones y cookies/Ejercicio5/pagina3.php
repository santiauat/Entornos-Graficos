<?php
session_start();

// Verificar si las variables de sesión existen
if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])){
    // Recuperar los valores almacenados en las variables de sesión
$usuario = $_SESSION['usuario'];
$clave = $_SESSION['clave'];
    // Mostrar los valores almacenados
echo('Nombre de Usuario: ' .$usuario);
echo("<br>");
echo('clave: ' .$clave);
echo("<br>");
echo("<a href=pagina1.php> Volver a la pagina inicial</a>");
}

?>