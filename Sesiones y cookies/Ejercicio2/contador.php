<?php
if(!isset($_COOKIE)){
    $visitas = 1;
    setcookie("visitas",$visitas,time()+3600*24*365);
}else{
    $visitas=$_COOKIE['visitas'] + 1;
    setcookie("visitas", $visitas, time()+3600*24*365);
}
?>
<!DOCTYPE html>
<html lang="es">
<body>
<?php    
if($visitas>=1){
        echo("Esta es tu visita numero <tr>" .$_COOKIE['visitas']);
    } else{
        echo("Bienvenido, esta es tu primera visita");
        echo $visitas;
    }
    ?>
</body>
</html>