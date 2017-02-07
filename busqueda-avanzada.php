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
		<!-- formulario de busqueda avanzada de autos nuevos -->
			<div id="content-busqueda">
				<div class="content-form">
					<h2>Búsqueda Personalizada</h2>
					<div class="form-avanzado">
					    <form action="#" method="POST">
						<a href="#" class="desp-bus">Nuevos</a>						
						<a href="#" class="desp-bus">Usados</a>
						<a href="#" class="desp-bus espacio-motos">Motos</a>
						    <div id="select-nuevos">
								<select name="" id="">
									<option value="">Marca</option>
									<option value="">123456789</option>
								</select>
								<select name="" id="">
									<option value="">Modelo</option>
									<option value="">123456789</option>
								</select>
								<select name="" id="">
									<option value="">Precio</option>
									<option value="">123456789</option>
								</select>

								<input class="btn-avanzado" type="submit" value="Buscar">
							</div>
							
		<!-- formulario de busqueda avanzada de autos usados -->
						    <div id="select-usados">
								<select name="" id="">
									<option value="">Marca</option>
									<option value="">123456789</option>
								</select>
								<select name="" id="">
									<option value="">Modelo</option>
									<option value="">123456789</option>
								</select>
								<select name="" id="">
									<option value="">Precio</option>
									<option value="">123456789</option>
								</select>
								<select name="" id="">
									<option value="">Año</option>
									<option value="">123456789</option>
								</select>

								<input class="btn-avanzado" type="submit" value="Buscar">
							</div>
		<!-- formulario de motos para la busqueda avanzada -->
						    <div id="select-motos">
								<select name="" id="">
									<option value="">Nuevas y Usadas</option>
									<option value="">123456789</option>
								</select>
								<select name="" id="">
									<option value="">Marca</option>
									<option value="">123456789</option>
								</select>
								<select name="" id="">
									<option value="">Modelo</option>
									<option value="">123456789</option>
								</select>

								<input class="btn-avanzado" type="submit" value="Buscar">
							</div>
						</form>
					</div>
				</div>
			</div>
		
		</article>
	</section>
	<footer style="width:1349px;height:238px;background-image: url(logos/banner3.jpg);">
		<?php 
			include "pie.php";
		 ?>
	</footer>
</body>
</html>