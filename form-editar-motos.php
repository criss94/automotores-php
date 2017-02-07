<?php 
	$id_motos=$_GET["id_motos"];
	require "conexion.php";
	$sql="SELECT modelo,anio,km,cilindrada,motor,provincia,ciudad,precio,condicion,vendedor,descripcion,fecha,foto,cat_id,foto1,foto2,foto3,foto4,foto5,foto6 
	      FROM motos 
	      WHERE id_motos=".$id_motos;	
	$resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
	$fila=mysqli_fetch_assoc($resultado);


	$sql="SELECT cat_id,cat_nombre FROM cat_motos";
	$resultado1=mysqli_query($link,$sql) or die(mysqli_error($link));
	mysqli_close($link);
 ?>
<?php 
	include "encabezado.php";
 ?>
 <script src="js/sesion_modal.js"></script>
</header>
<body style="background-image: url(logos/body.jpg);background-repeat: no-repeat;">
	<header>
		<div class="logo" style="background-image: url(logos/fondo1.jpg);">
			<?php 
				include "header-logo.php";
				include "buscador.php";
			 ?>
		</div>
	</header>
	<nav>
		<div class="redes-sociales">
			<a href="#"><i class="fa fa-facebook azul"></i></a>
			<a href="#"><i class="fa fa-twitter celeste"></i></a>
			<a href="#"><i class="fa fa-google-plus naranja"></i></a>
			<a href="#"><i class="fa fa-youtube-play rojo"></i></a>
		</div>
		<div class="menu">
        	<?php include "menu.php"; ?>
    	</div>
	</nav>
	<section>
		<article>
			<div id="bg-sesion" >
				<?php include "form-sesion.php"; ?>
			</div>
		</article>
					<div id="edit-motorcycle">
						<form action="editar-motos.php" method="POST" enctype="multipart/form-data">
							<h3 class="title-config">Editar Datos de la Moto</h3>

							<label for="cat_id">
								<span class="f-marca-config">Marca *</span>
							<select name="cat_id" id="cat_id" class="inputs">
								<option value="">Selecioná la marca</option>
								<?php 
								while ($fila1=mysqli_fetch_assoc($resultado1)) {
								?>
								<option <?php if ($fila["cat_id"]==$fila1["cat_id"]) { echo "selected"; } ?> value="<?php echo $fila1["cat_id"] ?>"><?php echo $fila1["cat_nombre"]?>
								</option>
								<?php
								}
								?>
							</select>
							</label>
 
							<br>
							 <label for="modelo">
							<span class="f-modelo-config">Modelo *</span>
							<input id="modelo" class="inputs" type="text" name="modelo" value="<?php echo $fila["modelo"]; ?>">
							</label>
							<br>
							
							<label for="com">
							<span class="f-anio-config">Año *</span>
							<input id="com" class="inputs" type="text" name="anio" value="<?php echo $fila["anio"]; ?>">
							<br>
							<label for="com">
							<span class="f-km-config">Kilómetros *</span>
							<input id="com" class="inputs" type="text" name="km" value="<?php echo number_format($fila["km"],3); ?>">
							</label>
							<br>
							<label for="com">
							<span class="f-cilindrada-config">Cilindrada *</span>
							<input id="com" class="inputs" type="text" name="cilindrada" value="<?php echo $fila["cilindrada"]; ?>">
							</label>
							<br>

							<label for="com">
							<span class="f-motor-config">Motor *</span>
							<input id="com" class="inputs" type="text" name="motor" value="<?php echo $fila["motor"]; ?>">
							</label>
							<br>

							<label for="com">
							<span class="f-provincia-config">Provincia *</span>
							<input id="com" class="inputs" type="text" name="provincia" value="<?php echo $fila["provincia"]; ?>">
							</label>
							<br>

							<label for="com">
							<span class="f-ciudad-config">Ciudad *</span>
							<input id="com" class="inputs" type="text" name="ciudad" value="<?php echo $fila["ciudad"]; ?>">
							</label>
							<br>
							<label for="com">
							<span class="f-condicion-config">Condición *</span>
							<input id="com" class="inputs" type="text" name="condicion" value="<?php echo $fila["condicion"]; ?>">
							</label>
							<br>
							<label for="com">
							<span class="f-vendedor-config">Vendedor *</span>
							<input id="com" class="inputs" type="text" name="vendedor" value="<?php echo $fila["vendedor"]; ?>">
							</label>
							<br>
							
							<label for="parra">
							<span class="f-precio-config">Precio en $ *</span>
							<input id="parra" class="inputs" type="text" name="precio" value="<?php echo number_format($fila["precio"],3); ?>">
							</label>
							<br>
							
							
							<h3 class="title-2">Fotos de tu vehículo</h3>

							<div class="img-conf">
							   <img src="imgMotos/<?php echo $fila["foto"]; ?>" alt="">
							   <p>Foto Principal</p>
							</div>
				
							<p class="recomendacion">Desea cambiar la foto principal?</p>
							<input class="file-con" type="file" name="foto" value="">
														
							<h3 class="title-3">Fotos opcionales</h3>
						<div class="content-conf">
							<input class="files-config" type="file" name="foto1" value="">
							<input class="files-config" type="file" name="foto2" value="">
							<input class="files-config" type="file" name="foto3" value="">
							<input class="files-config" type="file" name="foto4" value="">
							<input class="files-config" type="file" name="foto5" value="">
							<input class="files-config" type="file" name="foto6" value="">
						</div>
							
							<h3 class="title-4">Descripción del Vehículo</h3>
							<textarea name="descripcion" class="descripcion-config"><?php echo $fila["descripcion"]; ?></textarea>
							
							<input type="hidden" name="id_motos" value="<?php echo $id_motos; ?>">
							<input id="b-upload" type="submit" value="Realizar Cambios" class="btn-edit">
						</form>
					</div>

	</section>
	<footer style="width:1349px;height:238px;background-image: url(logos/banner3.jpg);">
		<?php 
			include "pie.php";
		 ?>
	</footer>
</body>
</html>