<?php 
include '../extend/headerphp.php';
include '../extend/alertas.php';

$clave_producto = htmlentities($_GET['clave_producto']);
$clave_img = htmlentities($_GET['clave_img']);
$ruta = htmlentities($_GET['ruta']);

$del = $con->prepare("DELETE FROM imagenes WHERE clave = :clave ");
     $del->bindparam(':clave', $clave_img);
      
 	if ($del->execute()){
 		unlink($ruta);
 		echo alerta('La imagen ha sido eliminada', 'agregar_imagenes.php?clave='.$clave_producto.'');
 	}else{
 		echo alerta('La imagen no ha sido eliminada', 'agregar_imagenes.php?clave='.$clave_producto.'');
 	}
 	$del = null;
 	$con = null;
 ?> 
 </body>
 </html>