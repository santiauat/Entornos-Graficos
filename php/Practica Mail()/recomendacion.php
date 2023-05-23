<body>
<?php
$fecha=date("d-m-Y");
$hora= date("H :i:s");
$destino="santiauat@hotmail.com";
$asunto="Comentario";
$desde='From:' .$_POST['email'];
$comentario= ";
\n
Nombre: $_POST[nombre]\n
Email: $_POST[email]\n
Consulta: $_POST[texto]\n
Enviado: $fecha a las $hora\n
\n
";
mail($destino,$asunto,$comentario,$desde);
echo "Mail enviado.";
?>