<!DOCTYPE html>
<html lang="es">
<body>
    <form action="formulario.php" method="post">
    <input type="text" name="nombreUsuario" size="255" maxlength="255"> <br><br>
    <input type="submit" value="cargar">
    </form>
</body>
</html>

<?php
if(isset($_POST["nombreUsuario"])){
    $nombre = $_POST["nombreUsuario"];
    setcookie("nombreUsuario", $nombre, time()+3600*24*365);
}
echo ("<br>");
echo $nombre;

?>
