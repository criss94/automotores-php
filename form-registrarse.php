<?php 
	include "encabezado.php";
 ?>
 <script src="js/validacion-registro.js"></script>
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

			<div id="registro">
				<div class="content-registro">
					<div class="usu-registro">
						<h3>Registrate</h3>
						<p>Todos los campos son requeridos</p>
						<form action="registrarse.php" method="POST">
								<input type="text" name="usu_nombre" id="user-nombre" placeholder="Nombre" value="" required>
							<span id="error-nombre"></span>
							<br>
								<input type="text" name="usu_apellido" id="user-apellido" placeholder="Apellido" value="" required>
							<span id="error-apellido"></span>
							<br>
								<input type="email" name="usu_email" id="user-email" placeholder="Email" value="" required>
							<br>
								<input type="email" name="usu_email2" id="user-email2" placeholder="Confirme su email" value="" required>
							<span id="error-email"></span>
							<br>
								<input type="password" name="usu_clave" id="pass1" placeholder="Contraseña" value="" required>

							<br>
								<input type="password" name="usu_clave2" id="pass2" placeholder="Repetir la contraseña" value="" required>
							<span id="error-password"></span>
							<br>
							
								<input type="submit" class="btn-registrarse" value="Registrarme" id="addUser">

							
						</form>
						
					</div>
				</div>
			</div>		


		</article>
	</section>
	
	<footer style="background-image: url(logos/banner3.jpg);">
		<?php 
			include "pie.php";
		 ?>
	</footer>

</body>
</html>