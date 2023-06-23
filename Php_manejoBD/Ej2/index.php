<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado completo de ciudades</title>
</head>
<body>
<a href="formularioAlta.html"><h3>Ingresar una nueva ciudad</h3> </a>
<a href="formularioBaja.html"><h3>Eliminar ciudad</h3> </a> 
<a href="formularioModificacion.html"><h3>Modificar ciudad</h3> </a> 


<?php
include("conexion.php");

$vSql = "SELECT * FROM ciudades";
$vResultado = mysqli_query($link, $vSql);
$total_registros = mysqli_num_rows($vResultado);
?>    

<table border="1">
<tr>
    <td><b>Id</b></td>
    <td><b>ciudad</b></td>
    <td><b>Pais</b></td>
    <td><b>Habitantes</b></td>
    <td><b>Superficie</b></td>
    <td><b>Tiene metro?</b></td>
</tr>
<?php
while($fila = mysqli_fetch_array($vResultado))
{
    // se debe respetar el nombre que lleva en la tabla de la base de datos
    echo '<tr>';
    echo '<td>'.$fila['id'].'</td>';
    echo '<td>'.$fila['ciudad'].'</td>';
    echo '<td>'.$fila['pais'].'</td>';
    echo '<td>'.$fila['habitantes'].'</td>';
    echo '<td>'.$fila['superficie'].'</td>';
    echo '<td>'.$fila['tieneMetro'].'</td>';
    echo '</tr>';
}
mysqli_close($link);
?>

</table>

</body>
</html>