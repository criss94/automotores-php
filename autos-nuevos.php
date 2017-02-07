<?php 
	include "encabezado.php";
 ?>
 	<link rel="stylesheet" href="ir_arriba/estilos.css">
	<link rel="stylesheet" href="ir_arriba/arriba.css">
	<script src="ir_arriba/ir-arriba-js.js"></script>
	<script src="ir_arriba/arriba.js"></script>
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
			<span class="ir-arriba icon-keyboard_arrow_up"></span>

			<div class="autos-nuevos" style="background-image: url(logos/body.jpg);background-repeat: no-repeat;">
				<div class="guia-nav">
					<a href="index.php">Inicio » </a><span>Autos nuevos</span>
				</div>
				<div class="img-titulo" style="background-image: url(logos/fondo.png);">
					<h1>Todos los autos nuevos del mercado</h1>
					<p>Ofertas, cotizaciones y planes de financiación de autos nuevos a la venta en Argentina.</p>
				</div>
				
				<div id="sliderpeque">
					<h5>Ofertas de autos nuevos y 0Km</h5>
					<p>Conocé los mejores precios y ofertas de cada marca.</p>
					<script type="text/javascript" src="js/imagenes-con-movimiento.js"></script>
				</div>

				<div class="catalogo-autos">
					<h1>
						<a href="catalogo-nuevos.php">Catálogo de autos nuevos disponibles en el mercado</a>
					</h1>
					<p>
						Encontrá la información más completa de equipamiento, colores, precios, datos técnicos y fotos de todos los autos disponibles en el mercado. Solicitá cotización a concesionarias de todo el país.
					</p>
					<div class="logo-img-autos" style="position: relative;">
						<a href="panel-nuevos.php?cat_id=4">
							<div class="fila-cat" style="position: absolute; left: 0px; top: 0px;">
							<img src="logos/1.jpg" title="Catálogo Chery" alt="">
							<p>Chery</p>
							</div>
						</a>
						<a href="panel-nuevos.php?cat_id=5">
							<div class="fila-cat" style="position:absolute; left:160px; top:0px;">
							<img src="logos/2.jpg" title="Catálogo Chevrolet" alt="">
							<p>Chevrolet</p>
							</div>
						</a>

						<a href="panel-nuevos.php?cat_id=7">
							<div class="fila-cat" style="position:absolute;left:320px;top:0px;">
							<img src="logos/3.jpg" title="Catálogo Citroën" alt="">
							<p>Citroën</p>
							</div>
						</a>

						<a href="panel-nuevos.php?cat_id=11">
							<div class="fila-cat" style="position:absolute;left:480px;top:0px;">
							<img src="logos/4.jpg" title="Catálogo Fiat" alt="">
							<p>Fiat</p>
							</div>
						</a>

						<a href="panel-nuevos.php?cat_id=12">
							<div class="fila-cat" style="position:absolute;left:640px;top:0px;">
							<img src="logos/5.jpg" title="Catálogo Ford" alt="">
							<p>Ford</p>
							</div>
						</a>

						<a href="panel-nuevos.php?cat_id=13">
							<div class="fila-cat" style="position:absolute;left:800px;top:0px;">
							<img src="logos/6.jpg" title="Catálogo Honda" alt="">
							<p>Honda</p>
							</div>
						</a>

						<a href="panel-nuevos.php?cat_id=26">
							<div class="fila-cat" style="position:absolute;left:0px;top:170px;">
							<img src="logos/7.jpg" title="Catálogo Peugeot" alt="">
							<p>Peugeot</p>
							</div>
						</a>

						<a href="panel-nuevos.php?cat_id=29">
							<div class="fila-cat" style="position:absolute;left:160px;top:170px;">
							<img src="logos/8.jpg" title="Catálogo Renault" alt="">
							<p>Renault</p>
							</div>
						</a>

						<a href="panel-nuevos.php?cat_id=34">
							<div class="fila-cat" style="position:absolute;left:320px;top:170px;">
							<img src="logos/9.jpg" title="Catálogo Toyota" alt="">
							<p>Toyota</p>
							</div>
						</a>

						<a href="panel-nuevos.php?cat_id=35">
							<div class="fila-cat" style="position:absolute;left:480px;top:170px;">
							<img src="logos/10.jpg" title="Catálogo Volkswagen" alt="">
							<p>Volkswagen</p>
							</div>
						</a>

						<a href="panel-nuevos.php?cat_id=22">
						<div class="fila-cat" style="position:absolute;left:640px;top:170px;">
						<img src="logos/11.jpg" title="Catálogo Mercedes Benz" alt=
						"">
						<p>Mercedes Benz</p>
						</div>
						</a>

						<a href="panel-nuevos.php?cat_id=25">
							<div class="fila-cat" style="position:absolute;left:800px;top:170px; ">
							<img src="logos/12.jpg" title="Catálogo Nissan" alt="">
							<p>Nissan</p>
							</div>	
						</a>
					</div>
				</div>

				<div class="clasificados">
					<h1>Clasificados de autos nuevos</h1>
					<p>Encontrá el auto nuevo que más se adapta a tus necesidades.</p>
					<div class="" >

						<a href="ver-autos-nuevos.php?id_nuevos=128&cat_id=22">
						<div class="cuerpo-img">
							<img src="imgNuevos/img1.jpg" alt="">
							<div class="cuerpo-texto">
								<h3>Mercedes Benz Clase S</h3>
								<p class="anticipo">Precio:</p>
								<p class="precio">u$s256.000</p>
							</div>
						</div>
						</a>

						<a href="ver-autos-nuevos.php?id_nuevos=49&cat_id=10">
						<div class="cuerpo-pequeño" style="position: absolute;top: 80px;left: 680px">
							<img src="imgNuevos/img2.jpg" alt="">
							<div class="cuerpo-texto">
								<h3>Ferrari F12</h3>
								<p class="anticipo">Precio desde:</p>
								<p class="precio">u$s 225.000</p>
							</div>
						</div>
						</a>

						<a href="ver-autos-nuevos.php?id_nuevos=10&cat_id=3">
						<div class="cuerpo-pequeño" style="position: absolute;top: 80px;left: 990px">
							<img src="imgNuevos/img3.jpg" alt="">
							<div class="cuerpo-texto">
								<h3>BMW Serie1</h3>
								<p class="anticipo">Precio desde:</p>
								<p class="precio">u$s 105.000</p>
							</div>
						</div>
						</a>

						<a href="ver-autos-nuevos.php?id_nuevos=7&cat_id=2">
						<div class="cuerpo-pequeño" style="position: absolute;top: 240px;left: 680px">
							<img src="imgNuevos/img4.jpg" alt="">
							<div class="cuerpo-texto">
								<h3>Audi A7</h3>
								<p class="anticipo">Precio desde:</p>
								<p class="precio">u$s 115.600</p>
							</div>
						</div>
						</a>

						<a href="ver-autos-nuevos.php?id_nuevos=78&cat_id=26">
						<div class="cuerpo-pequeño" style="position: absolute;top: 240px;left: 990px">
							<img src="imgNuevos/img5.jpg" alt="">
							<div class="cuerpo-texto">
								<h3>Peugeot 2008</h3>
								<p class="anticipo">Precio desde:</p>
								<p class="precio">$316.600</p>
							</div>
						</div>
						</a>

						<a href="ver-autos-nuevos.php?id_nuevos=88&cat_id=29">
						<div class="cuerpo-pequeño" style="position: absolute;top: 400px;left: 60px;">
							<img src="imgNuevos/img6.jpg" alt="">
							<div class="cuerpo-texto">
								<h3>Renault Clio Work</h3>
								<p class="anticipo">Precio desde:</p>
								<p class="precio">$154.400</p>
							</div>
						</div>
						</a>

						<a href="ver-autos-nuevos.php?id_nuevos=110&cat_id=35">
						<div class="cuerpo-pequeño" style="position: absolute;top: 400px;left: 370px;">
							<img src="imgNuevos/img7.jpg" alt="">
							<div class="cuerpo-texto">
								<h3>Volkswagen CrossFox</h3>
								<p class="anticipo">Precio desde:</p>
								<p class="precio">$330.820</p>
							</div>
						</div>
						</a>

						<a href="ver-autos-nuevos.php?id_nuevos=105&cat_id=34">
						<div class="cuerpo-pequeño" style="position: absolute;top: 400px;left: 680px;">
							<img src="imgNuevos/img8.jpg" alt="">
							<div class="cuerpo-texto">
								<h3>Toyota Prius</h3>
								<p class="anticipo">Precio desde:</p>
								<p class="precio">$950.000</p>
							</div>
						</div>
						</a>

						<a href="ver-autos-nuevos.php?id_nuevos=76&cat_id=13">
						<div class="cuerpo-pequeño" style="position: absolute;top:400px;left: 990px">
							<img src="imgNuevos/img9.jpg" alt="">
							<div class="cuerpo-texto">
								<h3>Honda Civic</h3>
								<p class="anticipo">Precio desde:</p>
								<p class="precio">$397.800</p>
							</div>
						</div>
						</a>

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