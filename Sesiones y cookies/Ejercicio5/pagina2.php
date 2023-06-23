<?php
session_start();

if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    // Guardar los valores en variables de sesión
    $_SESSION['usuario'] = $usuario;
    $_SESSION['clave'] = $clave;

    header('Location: pagina3.php');
    exit;
}
?>