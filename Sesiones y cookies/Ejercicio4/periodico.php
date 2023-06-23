<?php
 //veo si recibo datos
 if(isset($_POST['titular'])){
    $titular = $_POST['titular'];
    setcookie("titular",$titular, time()+(60*60*24*90));
 }else{
    if(isset($_COOKIE['titular'])){
        $titular=$_COOKIE['titular'];
    }
 }


if($_COOKIE['titular']){
    echo("Usted esta viendo Noticias sobre: " .$_COOKIE['titular']);
} else{
?>
<!DOCTYPE html>
<html lang="es">
<body>
<p>Bienvenido ingrese las noticias que desea ver<p>
    <form action="periodico.php" method="post"> 
        <input type="radio" name="titular" value="Deportes"> Noticias sobre Deportes <br>
        <input type="radio" name="titular" value="Economia">Noticias sobre Economia <br>
        <input type="radio" name="titular" value="Politica">Noticias sobre Politica <br>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>

<?php
$titular = $_POST['titular'];
setcookie("titular",$titular, time()+(60*60*24*90));
}
?>
<html>
    <body>
        <a href="borrarCookie.php"> Borrar Cookie</a>
    </body>
</html>
