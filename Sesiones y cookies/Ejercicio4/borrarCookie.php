<?php
setcookie("titular",NULL,time()-(60*60*24*90));
echo("Cookie Borrada");
echo("<a href=periodico.php> Volver a pagina inicial</a>");
?>
