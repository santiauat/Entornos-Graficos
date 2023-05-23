<?php
session_start();
?>
<html>
<body>
<a href="contador-visitas.php"></a>
<?php
echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
?>
<br>
<br>
<a href="contador-visitas.php">Volver a pagina principal</a>
</body>
</html>