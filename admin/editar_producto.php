<?php include '../extend/header.php'; 
	$clave = htmlentities($_GET['clave']);
	$sel = $con->prepare("SELECT * FROM inventario WHERE clave = ?");
	$sel->execute(array($clave));
	  	if ($f = $sel->fetch()) { 
	  	}
	  	$sel = null;
	  	
?>

<div class="container" style="margin-top: 1%;">
	<div class="card text-white bg-secondary">
			<div class="card-header"><h4 class="card-title">Editar Producto</h4></div>
			<div class="card-body">
				<form action="up_inventario.php" method="post" autocomplete="off" enctype="multipart/form-data">
					<input type="hidden" name="clave" value="<?php echo $clave ?>">
					<div class="form-group">
						<input type="text" name="producto" required placeholder="producto" class="form-control" value="<?php echo $f['producto'] ?>">
					</div>

					<div class="form-group">
						<input type="text" name="cantidad" required   placeholder="cantidad" class="form-control" value="<?php echo $f['cantidad'] ?>">
					</div>

					<div class="form-group">
						<input type="number" step="0.01" required  name="precio" placeholder="precio" class="form-control" value="<?php echo $f['precio'] ?>">
					</div>

					<div class="form-group">
						<select name="categoria" required class="form-control">
							<option value=" <?php echo $f['categoria'] ?>" ><?php echo $f['categoria'] ?></option>
							<option value="pantalones"> Pantalones</option>
							<option value="Casacas"> Casacas</option>
							<option value="Vestidos"> Vestidos</option>
							<option value="Blusas"> Blusas</option>
							<option value="Camisas"> Camisas</option>
						</select>
					</div>

					<div class="form-group">
						<img src="<?php echo $f['foto'] ?>" width= "200"></img>
					</div>


					<div class="form-group">
						<input type="file"   name="imagen" class="form-control">
					</div>

					<input type="hidden" name="anterior" value="<?php echo $f['foto'] ?>">
					
					<div class="form-group">
						<textarea name="descripcion" required cols="30" rows="10" class="form-control"><?php echo $f['descripcion'] ?></textarea>
					</div>

				<button type="submit" class="btn btn-info">Editar</button>
				</form>
			</div>
		</div>
</div>

<?php include '../extend/footer.php'; ?>
</body>
</html>