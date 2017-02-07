<?php 
	$cat_id=$_GET["cat_id"];
	require "conexion.php";
	$sql="SELECT id_usados,modelo,version,anio,km,provincia,ciudad,precio,foto FROM usados
		  WHERE cat_id=".$cat_id;
	$resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
	$cantidad=mysqli_num_rows($resultado);

	$sql="SELECT cat_nombre FROM categorias_usados
		  WHERE cat_id=".$cat_id;
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
				
					<a href="index.php">Inicio » </a><a href="catalogo-usados.php">Catálogo » </a><span><?php echo $fila1["cat_nombre"]; ?></span>
				
				</div>
				 <div class="contador">
					<p><b><?php echo $cantidad; ?> </b><?php echo $fila1["cat_nombre"]; ?> usados en Argentina</p>
				</div>				
			
			    <div class="body-muestreo-old">
				<?php 
				while ($fila=mysqli_fetch_assoc($resultado)) {
				 ?>
				
				 <a href="ver-autos-usados.php?id_usados=<?php echo $fila["id_usados"]; ?>&cat_id=<?php echo $cat_id; ?>">
					<div class="cars-view-old">
						<img src="imgUsados/<?php echo $fila["foto"]; ?>" alt="">
						<h3><?php echo $fila1["cat_nombre"]," ",$fila["modelo"]," ",$fila["version"]; ?></h3>
						<b>$ <?php echo number_format($fila["precio"],3); ?></b><p><?php echo $fila["anio"]," | ",number_format($fila["km"],3); ?> km</p>
						<span><?php echo $fila["provincia"]," | ",$fila["ciudad"]; ?></span>
					</div>
				</a>
				<?php 
				}
				?>
				</div>
			</div>
		</article>
	</section>
	<aside>
		
	</aside>
	<footer style="width:1349px;height:238px;background-image: url(logos/banner3.jpg);">
		<?php 
			include "pie.php";
		 ?>
	</footer>
</body>
</html>