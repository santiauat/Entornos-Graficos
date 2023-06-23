<?php
session_start();
?>
<html>
<body>
 <?php
 if(isset($_SESSION['usuario'])){
    echo "Bienvenido <br>" .$_SESSION['usuario'];
 } else{
    echo "No tiene permitido visitar esta pagina.";
 }
 session_destroy();
 ?>   
</body>
</html>