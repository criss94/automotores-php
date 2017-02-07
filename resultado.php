<?php 
	$criterio=$_GET["criterio"];
	require "conexion.php";

	$sql="SELECT id_nuevos,modelo,precio,origen,foto,cat_id FROM nuevos
		  WHERE modelo LIKE '%".$criterio."%'";
	$resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
	$cantidad=mysqli_num_rows($resultado);

	$sql="SELECT cat_id,cat_nombre FROM categorias";
	$resultado1=mysqli_query($link,$sql) or die(mysqli_error($link));
	$fila1=mysqli_fetch_assoc($resultado1);
	mysqli_close($link);
 ?>
<?php 
	include "encabezado.php";
 ?>
 <script src="js/sesion_modal.js"></script>
</header>
<body>
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
			<div id="panel-nuevos" style="background-image: url(logos/body.jpg);background-repeat: no-repeat;">
				<div class="main-atajo">
				
					<!--<a href="index.php">Inicio » </a><a href="catalogo-nuevos.php">Catálogo » </a><span><?php //echo $fila1["cat_nombre"]; ?></span>-->	
				
				</div>	

				<?php 
				if ($cantidad !=0) {
				 ?>

				 <div class="contador">
					<p><b><?php echo $cantidad; ?> </b> </p>
				</div>			
			
			    <div class="body-muestreo">
				<?php 
				while ($fila=mysqli_fetch_assoc($resultado)) {
				 ?>
				 <a href="ver-autos-nuevos.php?id_nuevos=<?php echo $fila["id_nuevos"]; ?>&cat_id=<?php echo $fila["cat_id"]; ?>">
					<div class="cars-view">
						<img src="imgNuevos/<?php echo $fila["foto"]; ?>" alt="">
						<h3><?php echo $fila["modelo"]; ?></h3>
						<p>Precio desde <b><?php echo $fila["precio"]; ?></b></p>
						<span>Origen:<strong> <?php echo $fila["origen"]; ?></strong></span>
					</div>
				</a>
				</div>
			</div>
				<?php 
				}
				}else{
				?>
					<div id="view-add">
					<div class="content-add">
						<div class="suceful">
						<img src="logos/error-de-busqueda.jpg">
						<h3 class="aviso" style="color:red">Error de búsqueda</h3>
						<p class="p-aviso"> Lo sentimos no se encontraron datos con esa descripción, verifique que el nombre este bien escrito.</p>
						<a href="index.php" class="s-salir">Salir</a>
						</div>

					</div>
					</div>
				<?php
				}
				?>
		</article>
	</section>
	<aside>
		
	</aside>
	<footer style="background-image: url(logos/banner3.jpg);">
		<?php 
			include "pie.php";
		 ?>
	</footer>
</body>
</html>