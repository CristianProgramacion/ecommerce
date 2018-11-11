<?php 
include '../extend/headerphp.php';
include '../extend/alertas.php';
	$clave = htmlentities($_GET['clave']);
	$foto = htmlentities($_GET['foto']);
	$pagina = htmlentities($_GET['pag']);

if ($pagina == "categorias.php") {
	$opc = htmlentities($_GET['opc']);
	$pagina = $pagina.'?opc='.$opc;
}

//borrar primero el registro
//borrar la foto
//buscar la ruta de todas las imagenes que se guardaron para ese producto
//eliminar todas las rutas de la base de datos
	$del = $con->prepare("DELETE FROM inventario WHERE clave = :clave ");
		     $del->bindparam(':clave', $clave);
		      
		 	if ($del->execute()){
		 		//la foto por defecto
		 		if ($foto != 'foto_producto/producto.png') {
		 			unlink($foto);
		 		}

		 		$sel = $con->prepare("SELECT ruta FROM imagenes WHERE clave_producto = ?");
		 		$sel->execute(array($clave));
		 		  	while ($f = $sel->fetch()) { 
		 		  		//borrar las imagenes que hayan sido cargadas para ese producto
		 		  		unlink($f['ruta']);
		 		  	}
		 		  	$sel = null;

		 		  	//UNA VEZ ELIMINADO TODOS LOS REGISTROS SE TIENE QUE 
		 		  	//eliminar el registro 
		 		  	$del2 = $con->prepare("DELETE FROM imagenes WHERE clave_producto = :clave ");
		 		  	    $del2->bindparam(':clave', $clave);
		 		  	    $del2->execute();
		 		  	 	$del2 = null;
		 		  	 	echo alerta('El producto ha sido eliminado',$pagina);
		 	}else{
		 		echo alerta('El producto no pudo ser eliminado',$pagina);
		 	}
		 	$del = null;
		 	$con = null;	
 ?> 
 </body>
 </html>