<?php 
	include "encabezado.php";
 ?>
 <script src="js/jquery-2.2.3.js"></script>
 <script src="js/jquery-validation-min.js"></script>
 <script src="js/jquery-validation-spanish.js"></script>
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
	
			<div id="bg-sesion" >
				<?php include "form-sesion.php"; ?>
			</div>	
			<div id="contacto-lamb" style="background-image: url(logos/body.jpg);background-repeat: no-repeat;">
				<h2>CONTÁCTO</h2>
				<img src="logos/Customer_Care_Automobili_Lamborghini.jpg" alt="">
				
				<div class="content-contacto">
					<h4 class="titulo-contacto" >BIENVENIDO AL SERVICIO DE ATENCIÓN AL CLIENTE DE "CARS"</h4>
					<p class="info-contacto" >CARS se complace en ofrecer un servicio atento que satisfaga todas sus necesidades. Para obtener más información, póngase en contacto con nosotros por teléfono o a través del formulario correspondiente.</p>
				<img src="logos/img-extra-contacto.jpg" alt="">
				</div>
				<div class="img-extra">
				</div>
				<div class="contacto-caja">
					<h3>CENTRO DE ATENCIÓN AL CLIENTE - INTERNACIONAL</h3>
					<p>
						Teléfono: +39 051 9597282 <br>
						Lunes a viernes (excepto festivos): de 8.00 a <br>
						19.00 (GMT+1)
					</p>
					<h3>CENTRO DE ATENCIÓN AL CLIENTE - NORTEAMÉRICA</h3>
					<p>
						Teléfono: +1-866-681-6276 <br>
						De lunes a viernes (excepto festivos): De 9.00 a <br>
						17.00 (EST)
					</p>
					<h3>CENTRO DE ATENCIÓN AL CLIENTE - CHINA</h3>
					<p>
						Teléfono: +86-4001166606 <br>
						De lunes a viernes: 9.00 - 18.00 h.
					</p>
					<h3>CENTRO DE ATENCIÓN AL CLIENTE LAMBORGHINI - JAPÓN</h3>
					<p>
						Teléfono:+81-(0)120-988-889 <br>
						Lunes - Domingo: 9.00 – 19.00 h (JST)
					</p>
				</div>
				<div class="form-contacto">
					<h3>CONTÁCTENOS</h3>
					<p>	Por favor, envianos un email con tu duda, responderemos lo antes 		posible.
						Para comprar un destacado sin tarjeta de crédito, por favor comunicate con BGS Publicidad 4856-2903 / 4857-3113 /4857-2801
					</p>
					<form action="" method="POST" id="form-add-old">
				
							<label for="">Nombre * 
							<input type="text" name="nombre" class="cont-campos" required>
							</label><br>

							<label for="" class="ema">E-mail *  
							<input type="email" name="email" class="cont-campos" required>
							</label><br>
							
							<textarea name="mensaje" id="mensaje" placeholder="Deja tu mensaje para más información ..."></textarea>
							<br>

							<input type="submit" value="Enviar mensaje" class="contacto-enviar">
					
					</form>
				</div>
			</div>
	
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