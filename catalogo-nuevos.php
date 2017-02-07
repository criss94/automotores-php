<?php 
	require "conexion.php";
	
	$sql="SELECT cat_id FROM categorias";
	$resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
 ?>
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
			<div class="categorias-autos-nuevos" style="background-image: url(logos/body.jpg);background-repeat: no-repeat;">
				<div class="guia-nav">
					<a href="index.php">Inicio » </a><span>Catálogo</span>
				</div>
				<div class="img-titulo" style="background-image: url(logos/fondo1.png);background-repeat: no-repeat;">
					<h1>Catálogo de autos</h1>
					<p>Todos los autos nuevos disponibles en el mercado. Encontrá la información más completa de equipamiento, colores, precios, datos técnicos y fotos de todos los autos disponibles en el mercado. Solicitá cotización a concesionarias de todo el país.</p>
				</div>
				
				<div class="cat-autos-nuevos">
					<h1>
						Autos nuevos por marca
					</h1>

					<ul style="position: relative;">
						<li style="position: absolute;top: 0px;left: 0px;margin-bottom:">
						<span class="letra">A</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=1"><span>Alfa Romeo</span></a></li>
							<li class="palabrasdos"><a href="panel-nuevos.php?cat_id=2"><span>Audi</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 326px;">
						<span class="letra">B</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=3"><span>BMW</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 650px;">
						<span class="letra">C</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=4"><span>Chery</span></a></li>
							<li class="palabrasdos"><a href="panel-nuevos.php?cat_id=5"><span>Chevrolet</span></a></li>
							<li class="palabrastres"><a href="panel-nuevos.php?cat_id=6"><span>Chrysler</span></a></li>
							<li class="palabrascuatro"><a href="panel-nuevos.php?cat_id=7"><span>Citroën</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;right: 0px">
						<span class="letra">D</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=8"><span>Dodge</span></a></li>
							<li class="palabrasdos"><a href="panel-nuevos.php?cat_id=9"><span>DS</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 0px">
						<span class="letra">F</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=10">Ferrari</a></li>
							<li class="palabrasdos"><a href="panel-nuevos.php?cat_id=11">Fiat</a></li>
							<li class="palabrastres"><a href="panel-nuevos.php?cat_id=12">Ford</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 326px">
						<span class="letra">H</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=13">Honda</a></li>
							<li class="palabrasdos"><a href="panel-nuevos.php?cat_id=14">Hyundai</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 650px">
						<span class="letra">I</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=15">Iveco</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;right: 0px">
						<span class="letra">J</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=16">Jaguar</a></li>
							<li class="palabrasdos"><a href="panel-nuevos.php?cat_id=17">Jeep</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 0px">
						<span class="letra">K</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=18">KIA</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 326px">
						<span class="letra">L</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=19">Land Rover</a></li>
							<li class="palabrasdos"><a href="panel-nuevos.php?cat_id=20">Lifan</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 650px">
						<span class="letra">M</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=21">Maserati</a></li>
							<li class="palabrasdos"><a href="panel-nuevos.php?cat_id=22">Mercedes Benz</a></li>
							<li class="palabrastres"><a href="panel-nuevos.php?cat_id=23">MINI</a></li>
							<li class="palabrascuatro"><a href="panel-nuevos.php?cat_id=24">Mitsubishi</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;right: 0px">
						<span class="letra">N</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=25">Nisan</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 0px">
						<span class="letra">P</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=26">Peugeot</a></li>
							<li class="palabrasdos"><a href="panel-nuevos.php?cat_id=27">Porsche</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 326px">
						<span class="letra">R</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=28">RAM</a></li>
							<li class="palabrasdos"><a href="panel-nuevos.php?cat_id=29">Renault</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 650px">
						<span class="letra">S</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=30">Smart</a></li>
							<li class="palabrasdos"><a href="panel-nuevos.php?cat_id=31">Ssang yong</a></li>
							<li class="palabrastres"><a href="panel-nuevos.php?cat_id=32">Subaru</a></li>
							<li class="palabrascuatro"><a href="panel-nuevos.php?cat_id=33">Susuki</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;right: 0px">
						<span class="letra">T</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=34">Toyota</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 620px;left: 0px">
						<span class="letra">V</span>
						<ul>
							<li class="palabrasuno"><a href="panel-nuevos.php?cat_id=35">Volkswagen</a></li>
							<li class="palabrasdos"><a href="panel-nuevos.php?cat_id=36">Volvo</a></li>
						</ul>
						</li>					

					</ul>
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