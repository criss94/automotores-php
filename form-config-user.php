<?php	
	require "conexion.php";
	require "validar-sesion.php";

	$sql="SELECT usu_id,usu_nombre,usu_apellido,usu_email,usu_email2,usu_clave,usu_clave2 
		  FROM usuarios WHERE usu_id=".$_SESSION["usu_id"];
	$resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
	$fila=mysqli_fetch_assoc($resultado);
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
	
			<div id="bg-sesion" >
				<?php include "form-sesion.php"; ?>
			</div>
			
			<div id="form-config-user">
				<div class="content-cuenta">
					<div class="form-cuenta">
						<h3>Mi Cuenta</h3>
						<form action="config-user.php" method="POST">
							<span>Nombre</span>
							<input type="text" name="usu_nombre" class="c-d-u" value="<?php echo $fila["usu_nombre"]; ?>"><br>

							<span>Apellido</span>
							<input type="text" name="usu_apellido" class="c-d-u" value="<?php echo $fila["usu_apellido"]; ?>"><br>

							<span>E-mail</span>
							<input type="email" name="usu_email" class="c-d-u" value="<?php echo $fila["usu_email"]; ?>"><br>

							<span>Confirmar E-mail</span>
							<input type="email" name="usu_email2" class="c-d-u" value="<?php echo $fila["usu_email2"]; ?>"><br>

							<span>Password</span>
							<input type="text" name="usu_clave" class="c-d-u" value="<?php echo $fila["usu_clave"]; ?>"><br>

							<span>Confirmar Password</span>
							<input type="text" name="usu_clave2" class="c-d-u" value="<?php echo $fila["usu_clave2"]; ?>"><br>
							
							<input type="hidden" name="usu_id" value="<?php echo $fila["usu_id"]; ?>">
							<input type="submit" value="Realizar Cambios" class="boton-c-u">
						</form>
					</div>
				</div>
			</div>

		
	</section>
	<footer style="background-image: url(logos/banner3.jpg);">
		<?php 
			include "pie.php";
		 ?>
	</footer>
</body>
</html>