<?php include '../extend/header.php'; ?>

<div class="container" style="margin-top: 1%;">
	<div class="card text-white bg-secondary">
			<div class="card-header"><h4 class="card-title">Alta de inventario</h4></div>
			<div class="card-body">
				<form action="ins_inventario.php" method="post" autocomplete="off" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" name="producto" required placeholder="producto" class="form-control">
					</div>

					<div class="form-group">
						<input type="text" name="cantidad" required   placeholder="cantidad" class="form-control">
					</div>

					<div class="form-group">
						<input type="number" step="0.01" required  name="precio" placeholder="precio" class="form-control">
					</div>

					<div class="form-group">
						<select name="categoria" required class="form-control">
							<option value="" disabled="" selected="">Elige una categoría</option>
							<option value="pantalones"> Pantalones</option>
							<option value="Casacas"> Casacas</option>
							<option value="Vestidos"> Vestidos</option>
							<option value="Blusas"> Blusas</option>
							<option value="Camisas"> Camisas</option>
						</select>
					</div>

					<div class="form-group">
						<input type="file"   name="imagen" class="form-control">
					</div>

					<div class="form-group">
						<textarea name="descripcion" required cols="30" rows="10" class="form-control"></textarea>
						<button type="submit" class="btn btn-info">Guardar</button>
					</div>

				</form>
			</div>	
		</div>


		<div class="card text-white bg-dark" style="margin-top: 1%;">
				<div class="card-header"><h4 class="card-title">Último registro</h4></div>
				<div class="card-body">
					<table class="table">
						<thead>
							<th>Foto</th>
							<th>Producto</th>
							<th>Precio</th>
							<th>Categoria</th>
							<th>Precio</th>
							<th>Categoria</th>
							<th>Desc.</th>
							<th></th>
							<th></th>
							<th></th>
						</thead>
						<tbody>
							<?php 
								$sel = $con->prepare("SELECT * FROM inventario ORDER BY id DESC limit 1");
								$sel->execute();
								  	while ($f = $sel->fetch()) { ?>
								  	<tr>
								  		<td><img src="<?php echo $f['foto'] ?>" width="50" heigth="50"></td>
								  		<td><?php echo  $f['producto']; ?></td>
								  		<td><?php echo  $f['cantidad']; ?></td>
								  		<td><?php echo "S/.".number_format( $f['precio'],2) ?></td>
								  		<td><?php echo  $f['categoria']; ?></td>
								  		<td><?php echo  substr($f['descripcion'], 0,100) ?>...</td>
								  		<td></td>
								  		<td></td>
								  		<td></td>
								  	</tr>
								  	<?php 
								  		  	}
								  	$sel = null;
								  	$con = null;
								  	 ?>
						</tbody>
					</table>
				</div>
			</div>


</div>

<?php include '../extend/footer.php'; ?>
</body>
</html>
