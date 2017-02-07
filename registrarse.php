<?php 

	$usu_nombre=$_POST["usu_nombre"];
	$usu_apellido=$_POST["usu_apellido"];
	$usu_email=$_POST["usu_email"];
	$usu_email2=$_POST["usu_email2"];
	$usu_clave=$_POST["usu_clave"];
	$usu_clave2=$_POST["usu_clave2"];

	require "conexion.php";
	$sql="INSERT INTO usuarios VALUES (NULL,
	                                   '".$usu_nombre."',
	                                   '".$usu_apellido."',
	                                   '".$usu_email."',
	                                   '".$usu_email2."',
	                                   '".$usu_clave."',
	                                   '".$usu_clave2."')";
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
						<a href="form-registrarse.php" class="v-volver">volver</a>
						<img src="logos/usererror.jpg">
						<h3 class="aviso">Importante!</h3>
						<p class="p-aviso"> Lo sentimos,hubo un problema al subir los datos, ó los datos ya fueron cargados, revise en la categoria correspondiente según la marca que su publicación se haya cargado, de lo contrario vuelva a intentarlo de nuevo</p>
						<a href="index.php" class="s-salir">Salir</a>
						</div>

					</div>
				</div>

			<?php
			}else{
			 ?>
			<div id="view-add">
				<div class="content-add">
					<div class="suceful">
						<a href="form-registrarse.php" class="v-volver">volver</a>
						<img src="logos/userok.png">
						<h3 class="aviso">Usuario Registrado</h3>
						<p class="p-aviso">Sus datos fueron cargados correctemente, ya puede hacer uso de su nueva cuenta.</p>
						<a href="index.php" class="s-salir">Salir</a>
					</div>
				</div>
			</div>
		<?php
		}
		?>
			

		</article>
	</section>
	<footer style="background-image: url(logos/banner3.jpg);">
		<?php 
			include "pie.php";
		 ?>
	</footer>
</body>
</html>