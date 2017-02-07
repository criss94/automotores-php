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
			<h2>EL MUSEO LAMBORGHINI</h2>
			<div>
				<img src="logos/museo.jpg" alt="">
			</div>
			<h2>EL MUSEO</h2>
			<div>
			<p>
				El Museo Lamborghini fue inaugurado en 2001 y recorre todos los hitos importantes alcanzados por la Casa del Toro, con una incursión en el pasado que tiene una gran carga emocional para los aficionados a los superdeportivos de lujo. El Murciélago fue la primera obra maestra exhibida en este sugerente emplazamiento del Motor Valley italiano. Junto al Murciélago se puede ver una amplia colección que incluye el Miura S y sus emblemáticas "pestañas", el 350 GT, el Countach S, el Jalpa, el Espada, el Sesto Elemento, el Reventón y los otros supercoches de lujo que han convertido en leyenda al Toro. Los motores, modelos y fotos ayudan a proporcionar a los visitantes una visión completa de la historia de este mito de la automoción que continúa su camino siguiendo la estela de la primera idea visionaria de Ferruccio Lamborghini.</p><br>
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
					<h3>HORARIO DE <br>APERTURA</h3>
					<p>
						De Lunes a Sábado <br>
						De 10.00 a 17.00 <br>				
						<b>LAS RESERVAS PARA VISITAS A LA FÁBRICA ESTÁN SUSPENDIDAS HASTA MARZO DE 2017</b>
					</p>
				</div>
				<div class="cubo3" style="background-image: url(logos/pic02.jpg);">
					<h3>PRECIO DE LA ENTRADA</h3>
					<p><b>ENTRADAS PARA EL MUSEO </b><br>
						Precio normal: 15,00 € por persona <br>
						Precio con descuento: 12,00 € por persona <br>
						Gratis: para niños menores de 6 años 
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