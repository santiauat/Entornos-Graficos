<?php
ob_start("ob_gzhandler");
session_start(); 
include("conexion.php");
if(isset($_SESSION['carro'])){

    $carro=$_SESSION['carro'];

}else
{ 
    $carro=false;
    
}
$qry=mysqli_query($link, "select * from catalogo order by producto asc");
?> 
<html>

   <table>
    <tr>
        <td><p>Producto</p></td>
        <td><p>Precio</p></td>
        <td><p>Producto</p></td>
        <td width="25" align="right"><a href="vercarrito.php?<?php echo SID ?>"title="Ver el contenido del carrito"></a></td>
    </tr>
    <?php 
    while($row=mysqli_fetch_assoc($qry)){
 ?>
    <tr valign="middle" class="catalogo">
    <td><?php echo $row['producto'] ?></td>
     <td><?php echo $row['precio'] ?></td>
    <td align="center">
        <?php
        if(!$carro || !isset($carro[md5($row['id'])]['identificador']) || $carro[md5($row['id'])]['identificador']!=md5($row['id'])){ 
            ?><a href="agregacar.php?<?php echo SID ?>&id=<?php echo $row['id'];
            ?>"><input type="submit" value="Agregar al Carrito"></a><?php }
        else{?><a href="borracar.php?<?php echo SID ?>&id=<?php echo $row['id'];
            ?>"><input type="submit" value="Quitar del Carrito"></a><?php
            } 
            ?>
            </td>
             </tr><?php 
            } 
            ?>
            </table>
            </body>
            </html>
            <?php
            ob_end_flush();
            ?>  

