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
		<div id="empresa" style="background-image: url(logos/body.jpg);background-repeat: no-repeat;">
			<h2>PERFIL DE LA EMPRESA</h2>
			<div>
				<img src="logos/company.jpg" alt="">
			</div>
			<h2>HISTORIA</h2>
			<div>
			<p>Fundada en 1963, Automobili Lamborghini tiene su sede en Sant'Agata Bolognese, en el noreste de Italia. Allí fabrica algunos de los superdeportivos más codiciados del mundo. Con la presentación del Huracán LP 610-4, Lamborghini ofrece una nueva dimensión en los superdeportivos de lujo.</p><br>
			<p>Con 130 concesionarios en todo el mundo, Automobili Lamborghini está desarrollando una sucesión de superdeportivos dinámicos y elegantes, incluidos el 350GT, Miura, Espada, Countach, Diablo, Murciélago, Reventón Coupé, Reventón Roadster, Aventador y Gallardo.</p>
			</div>
			<div class="cajas-empresa">
				<div class="cubo1" style="background-image: url(logos/pic02.jpg);">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4772.910103285285!2d11.121250260291825!3d44.65856971776243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fc395a3ff12a5%3A0x5a0b7c23921bbc56!2sLamborghini!5e0!3m2!1ses!2sus!4v1458489992841" width="280" height="180" frameborder="0" style="border:0" allowfullscreen></iframe>
					<h3>FOLLOW YOUR EARS.</h3>
					<p> Automobili Lamborghini S.p.A. <br>
						Via Modena, 12 <br>
						I-40019 Sant’Agata Bolognese (BO) <br>
						Italia <br>
						Teléfono +39 051 959.761
					</p>
				</div>
				<div class="cubo2" style="background-image: url(logos/pic02.jpg);">
					<h3>TIENDA COLLEZIONE AUTOMOBILI
						LAMBORGHINI
					</h3>
					<p>
						De lunes a viernes (excepto festivos) <br>
						de 10.00 a 13.00 y de 14.00 a 18.00<br>
						Sábado <br>
						De 10.00 a 13.00 <br>
						De 13.30 a 17.00 <br>
					</p>
				</div>
				<div class="cubo3" style="background-image: url(logos/pic02.jpg);">
					<h3>MUSEO LAMBORGHINI</h3>
					<p>De lunes a sábado (excepto festivos) <br>
						de 10.00 a 17.00 <br>
						Para información y reservas: <br>
						<a href="museo.php">MUSEO LAMBORGHINI »</a>
					</p>
				</div>
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