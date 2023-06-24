<html>
<body>
 <?php
 include("conexion.php");
 $cancion=$_POST['cancion'];
 if($cancion){
    $sql = "SELECT * FROM buscador WHERE canciones LIKE '%$cancion%'";
$resultado = mysqli_query($link,$sql) or die (mysqli_error($link));
if(mysqli_num_rows($resultado) == 0){
    echo("No existe esa cancion");
}else{
    while($songs = mysqli_fetch_array($resultado)){
        echo($songs["canciones"]);
        echo("<br>");
    }

}
 }

 ?>   
</body>
</html>