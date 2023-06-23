<?php
session_start();
?>

<html>
<body>
<?php
include('conexion.php');
$mail =$_POST['mail'];
$sql = "SELECT * FROM alumnos WHERE mail ='$mail'";
$resultado = mysqli_query($link,$sql) or die (mysqli_error($link));
$fila = mysqli_fetch_array($resultado);
if(mysqli_num_rows($resultado) == 0){
    echo("Usuario inexistente <br>");
}else {
    $_SESSION['usuario'] = $fila['nombre'];
}
?>    
<a href="pag3.php">Ingresa a pagina principal</a>
</body>
</html>