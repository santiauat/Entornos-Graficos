<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja ciudad</title>
</head>

<body>

    <?php
include("conexion.php");

$vid = $_POST['id'];

$vSql = "SELECT * FROM ciudades WHERE id='$vid'";

$vResultado = mysqli_query($link,$vSql);

if(mysqli_num_rows($vResultado)==0){
    echo('Ciudad inexistente <br>');
    echo("<a href='formularioBaja.html'> Continuar</a>");
} else{
    //instruccion sql y luego ejecutar
    $vSql = "DELETE FROM ciudades WHERE id='$vid'";
    mysqli_query($link,$vSql);
    echo("La ciudad fue borrada <br>");
    echo("<a href='index.php'> volver a la pagina inicial</a>");
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>

</body>

</html>