<?php 
	$id_usados=$_GET["id_usados"];
	require "conexion.php";
	$sql="SELECT modelo,version,anio,combustible,km,provincia,ciudad,precio,foto,cat_id 
	      FROM usados 
	      WHERE id_usados=".$id_usados;	
	$resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
	$fila=mysqli_fetch_assoc($resultado);


	$sql="SELECT cat_id,cat_nombre FROM categorias_usados";
	$resultado1=mysqli_query($link,$sql) or die(mysqli_error($link));
	$fila1=mysqli_fetch_assoc($resultado1);
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
					<div id="style-eliminar-motos">
						<form action="eliminar-autos-usados.php" method="POST" onsubmit="return eliminar()">
							<h3 class="title-config-e">Se va a eliminar el siguiente Vehículo</h3>
							<div class="content-eliminar">
								<img src="imgUsados/<?php echo $fila["foto"]; ?>" alt="">
								<h3><?php echo $fila1["cat_nombre"]," ",$fila["modelo"]," ",$fila["version"]; ?></h3>
								<p>$ <?php echo number_format($fila["precio"],3); ?></p>
								<b><?php echo $fila["anio"]," | ",number_format($fila["km"],3)," km"; ?></b><br>
								<span><?php echo $fila["provincia"]," | ",$fila["ciudad"]; ?></span>
														

							<input type="hidden" name="id_usados" value="<?php echo $id_usados; ?>">
							<input type="submit" value="Eliminar" class="btn-eliminar">
							</div>
						</form>
					</div>


	</section>
	<footer style="width:1349px;height:238px;background-image: url(logos/banner3.jpg);">
		<?php 
			include "pie.php";
		 ?>
	</footer>
	<script src="js/autos-nuevos-funciones.js"></script>
</body>
</html>