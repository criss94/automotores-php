<?php 
	
	$id_motos=$_POST["id_motos"];
	require "conexion.php";
	$sql="DELETE FROM motos WHERE id_motos=".$id_motos;
    mysqli_query($link,$sql) or die(mysqli_error($link));
    $checkeo=mysqli_affected_rows($link);
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
			<?php 
				if ($checkeo !=1) {
			?>	
				<div id="view-add">
					<div class="content-add">
						<div class="suceful">
						<a href="config.php" class="v-volver">volver</a>
						<img src="logos/error.jpg">
						<h3 class="aviso">Importante!</h3>
						<p class="p-aviso"> Lo sentimos,hubo un problema al eliminar los datos, ó los datos ya fueron cargados, revise en la categoria correspondiente según la marca.</p>
						<a href="catalogo-motos.php" class="s-salir">Salir</a>
						</div>

					</div>
				</div>
			<?php 
				}else{
			?>

			<div id="view-add">
				<div class="content-add">
					<div class="suceful">
						<a href="config.php" class="v-volver">volver</a>
						<img src="logos/exito.jpg">
						<h3 class="aviso">Aviso</h3>
						<p class="p-aviso">Sus datos fueron eliminados correctemente.</p>
						<a href="catalogo-motos.php" class="s-salir">Salir</a>
					</div>
				</div>
			</div>
		<?php
		}
		?>
			

		</article>
	</section>
	<footer style="width:1349px;height:238px;background-image: url(logos/banner3.jpg);">
		<?php 
			include "pie.php";
		 ?>
	</footer>
</body>
</html>