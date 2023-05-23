<?php 
$destinatario = "santiauat@hotmail.com";
$asunto = "asunto-prueba";
$cuerpo = '
<html>
<head>
 <title>Envio de mail</title>
</head>
<body>
  <h1> Prueba </h1>
  <p>Este es un mail de prueba.</p>
</body>
</html>';
mail($destinatario, $asunto, $cuerpo);
?>