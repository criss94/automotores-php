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
		<div class="categorias-autos-nuevos">
			<div class="guia-nav">
					<a href="index.php">Inicio » </a><span>Catálogo</span>
				</div>
				<div class="img-titulo" style="background-image: url(logos/fondo1.png);background-repeat: no-repeat;">
					<h1>Catálogo de Motos</h1>
					<p>Motos nuevas y usadas disponibles en el mercado. Encontrá la información más completa de equipamiento, colores, precios, datos técnicos y fotos de todos los autos disponibles en el mercado. Solicitá cotización a concesionarias de todo el país.</p>
				</div>
				
				<div class="cat-autos-nuevos">
					<h1>
						Motos nuevos y usados por marca
					</h1>

					<ul style="position: relative;">
						<li style="position: absolute;top: 0px;left: 0px;margin-bottom:">
						<span class="letra">A</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=1"><span>Appia</span></a></li>
							<li class="palabrasdos"><a href="motos.php?cat=2"><span>Aprilia</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 326px;">
						<span class="letra">B</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=3"><span>BMW</span></a></li>
							<li class="palabrasdos"><a href="motos.php?cat=4"><span>Bajaj</span></a></li>
							<li class="palabrastres"><a href="motos.php?cat=5"><span>Beta</span></a></li>
							<li class="palabrascuatro"><a href="motos.php?cat=6"><span>Bloower</span></a></li>
							<li class="palabrascinco"><a href="motos.php?cat=7"><span>Bombardier</span></a></li>
							<li class="palabrasseis"><a href="motos.php?cat=8"><span>Brava</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 650px;">
						<span class="letra">C</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=9"><span>Can Am</span></a></li>
							<li class="palabrasdos"><a href="motos.php?cat=10"><span>Corven</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;right: 0px">
						<span class="letra">D</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=11"><span>Dayama</span></a></li>
							<li class="palabrasdos"><a href="motos.php?cat=12"><span>Daytona</span></a></li>
							<li class="palabrastres"><a href="motos.php?cat=13"><span>Ducati</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 0px">
						<span class="letra">G</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=14">Gilera</a></li>
							<li class="palabrasdos"><a href="motos.php?cat=15">Goes</a></li>
							<li class="palabrastres"><a href="motos.php?cat=16">Guerrero</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 326px">
						<span class="letra">H</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=17">Harley Davidson</a></li>
							<li class="palabrasdos"><a href="motos.php?cat=18">Honda</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 650px">
						<span class="letra">J</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=19">Jawa</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;right: 0px">
						<span class="letra">K</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=20">KTM</a></li>
							<li class="palabrasdos"><a href="motos.php?cat=21">Kawasaki</a></li>
							<li class="palabrastres"><a href="motos.php?cat=22">Keeway</a></li>
							<li class="palabrascuatro"><a href="motos.php?cat=23">Keller</a></li>
							<li class="palabrascinco"><a href="motos.php?cat=24">Kymco</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 0px">
						<span class="letra">L</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=25">LuckyLion</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 326px">
						<span class="letra">M</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=26">Mondial Rover</a></li>
							<li class="palabrasdos"><a href="motos.php?cat=27">Motomel</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 650px">
						<span class="letra">N</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=28">NSU</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;right: 0px">
						<span class="letra">P</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=29">Piaggio</a></li>
							<li class="palabrasdos"><a href="motos.php?cat=30">Piaggio Vespa</a></li>
							<li class="palabrastres"><a href="motos.php?cat=31">Polaris</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 0px">
						<span class="letra">R</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=32">Royal Enfield</a></li>
							<li class="palabrasdos"><a href="motos.php?cat=33">Rumi</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 326px">
						<span class="letra">S</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=34">Sea Horse</a></li>
							<li class="palabrasdos"><a href="motos.php?cat=35">Siambretta</a></li>
							<li class="palabrastres"><a href="motos.php?cat=36">Sumo</a></li>
							<li class="palabrascuatro"><a href="motos.php?cat=37">Susuki</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 650px">
						<span class="letra">T</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=38">Tibo</a></li>
							<li class="palabrasdos"><a href="motos.php?cat=39">Triumph</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;right: 0px">
						<span class="letra">V</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=40">Vespa</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 620px;left: 0px">
						<span class="letra">Y</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=41">Yamaha</a></li>
						</ul>
						</li>	

						<li style="position: absolute;top: 620px;left: 326px">
						<span class="letra">Z</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=42">Zanella</a></li>
						</ul>
						</li>	

						<li style="position: absolute;top: 620px;left: 650px">
						<span class="letra">?</span>
						<ul>
							<li class="palabrasuno"><a href="motos.php?cat=43">Otras Marcas</a></li>
						</ul>
						</li>			

					</ul>
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