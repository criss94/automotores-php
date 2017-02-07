<?php 
	$usu_id=$_POST["usu_id"];

	$usu_nombre=$_POST["usu_nombre"];
	$usu_apellido=$_POST["usu_apellido"];
	$usu_email=$_POST["usu_email"];
	$usu_email2=$_POST["usu_email2"];
	$usu_clave=$_POST["usu_clave"];
	$usu_clave2=$_POST["usu_clave2"];

	require "conexion.php";
	$sql="UPDATE usuarios SET usu_nombre='".$usu_nombre."',
	                          usu_apellido='".$usu_apellido."',
	                          usu_email='".$usu_email."',
	                          usu_email2='".$usu_email2."',
	                          usu_clave='".$usu_clave."',
	                          usu_clave2='".$usu_clave2."'
	                    WHERE usu_id=".$usu_id;
	mysqli_query($link,$sql) or die(mysqli_error($link));
	$checkeo=mysqli_affected_rows($link);
	mysqli_close($link);
	
 ?>

<?php 
	require "validar-sesion.php";
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
						<a href="form-config-user.php" class="v-volver">volver</a>
						<img src="logos/usererror.jpg">
						<h3 class="aviso">Importante!</h3>
						<p class="p-aviso"> Lo sentimos,hubo un problema al editar sus datos, ó los datos ya fueron editados, revise su cuenta si fue modificada, de lo contrario vuelva a intentarlo de nuevo</p>
						<a href="publicar.php" class="s-salir">Salir</a>
						</div>

					</div>
				</div>

			<?php
			}else{
			 ?>
			<div id="view-add">
				<div class="content-add">
					<div class="suceful">
						<a href="form-config-user.php" class="v-volver">volver</a>
						<img src="logos/userok.png">
						<h3 class="aviso">Usuario Modificado</h3>
						<p class="p-aviso">Sus datos fueron modificados correctamente, su nombre de usuario se actualizara en un nuevo inicio de sesión.</p>
						<a href="publicar.php" class="s-salir">Salir</a>
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