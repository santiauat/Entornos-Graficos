<html>

<head>
  <title>Nueva ciudad</title>
</head>

<body>

  <?php
include('conexion.php');
//Captura datos desde el Form anterior
// $vid = $_POST['id'];
$vciudad = $_POST['ciudad'];
$vpais = $_POST['pais'];
$vhabitantes = $_POST['habitantes'];
$vsuperficie = $_POST['superficie'];
$vtieneMetro =isset($_POST['tienemetro'])?1:0;

//Arma la instrucción SQL y luego la ejecuta

$sql_agregar = 'INSERT INTO ciudades (ciudad,pais,habitantes,superficie,tienemetro) values (?,?,?,?,?)';
$sentencia_agregar = $link-> prepare($sql_agregar);
$sentencia_agregar->execute(array($vciudad,$vpais,$vhabitantes,$vsuperficie,$vtieneMetro));
 //  mysqli_query($link, $sql_agregar) or die (mysqli_error($link));

 echo("La ciudad fue añadida <br>");
// echo ("<A href='Menu.html'>VOLVER AL MENU</A>");

// Cerrar la conexion
mysqli_close($link);
?>
</body>

</html>
