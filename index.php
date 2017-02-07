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
		<!-- mormulario de inicio de sesión como ventana modal -->
		<div id="bg-sesion" >
			<?php include "form-sesion.php"; ?>
		</div>
	

		<div class="slider-container">
			<ul id="slider" class="slider-wrapper">
			<li class="slide-current">
				<img src="SliderIndex/images/1-1.jpg" alt="Slider Imagen 1">
			</li>

			<li>
				<img src="SliderIndex/images/2-2.jpg" alt="Slider Imagen 1">
			</li>

			<li>
				<img src="SliderIndex/images/3.jpg" alt="Slider Imagen 1">
			</li>

			<li>
				<img src="SliderIndex/images/4-4.jpg" alt="Slider Imagen 1">
			</li>

			<li>
				<img src="SliderIndex/images/5.jpg" alt="Slider Imagen 1">
			</li>

			<li>
				<img src="SliderIndex/images/6.jpg" alt="Slider Imagen 1">
			</li>
		</ul>
		</div>
		
		</article>
	</section>
	<aside>
		
	</aside>
	<footer style="background-image: url(logos/banner3.jpg);">
		<?php 
			include "pie.php";
		 ?>
	</footer>


	
	<script src="SliderIndex/js/jquery.min.js"></script>
	<script src="SliderIndex/js/main.js"></script>
</body>
</html>