<?php 
	require "conexion.php";
	
	$sql="SELECT cat_id FROM categorias_usados";
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
					<a href="index.php">Inicio » </a><span>Autos usados</span>
				</div>
				<div class="img-titulo" style="background-image: url(logos/fondo.png);">
					<h1>Autos usados</h1>
					<p>Comprá autos usados al mejor precio del mercado. Tenemos un amplio listado de clasificados de todas las marcas, modelos y segmentos.</p>
				</div>
				
				<div class="cat-autos-nuevos">
					<h1>
						Autos usados por marca
					</h1>

					<ul style="position: relative;">
						<li style="position: absolute;top: 0px;left: 0px;margin-bottom:">
						<span class="letra">A</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=1"><span>Acura</span></a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=2"><span>Aleko</span></a></li>
							<li class="palabrastres"><a href="panel-usados.php?cat_id=3"><span>Alfa Romeo</span></a></li>
							<li class="palabrascuatro"><a href="panel-usados.php?cat_id=4"><span>AMC</span></a></li>
							<li class="palabrascinco"><a href="panel-usados.php?cat_id=5"><span>Asia</span></a></li>
							<li class="palabrasseis"><a href="panel-usados.php?cat_id=6"><span>Audi</span></a></li>
							<li class="palabrassiete"><a href="panel-usados.php?cat_id=7"><span>Auto unión</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 326px;">
						<span class="letra">B</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=8"><span>Bentley</span></a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=9"><span>BMW</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 650px;">
						<span class="letra">C</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=10"><span>Chery</span></a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=11"><span>Chevrolet</span></a></li>
							<li class="palabrastres"><a href="panel-usados.php?cat_id=12"><span>Chrysler</span></a></li>
							<li class="palabrascuatro"><a href="panel-usados.php?cat_id=13"><span>Citroën</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;right: 0px">
						<span class="letra">D</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=14"><span>Dacia</span></a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=15"><span>Daewoo</span></a></li>
							<li class="palabrastres"><a href="panel-usados.php?cat_id=16"><span>Daihatsu</span></a></li>
							<li class="palabrascuatro"><a href="panel-usados.php?cat_id=17"><span>Deuts Agrale</span></a></li>
							<li class="palabrascinco"><a href="panel-usados.php?cat_id=18"><span>Dodge</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 0px">
						<span class="letra">F</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=19">Ferrari</a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=20">Fiat</a></li>
							<li class="palabrastres"><a href="panel-usados.php?cat_id=21">Ford</a></li>
							<li class="palabrascuatro"><a href="panel-usados.php?cat_id=22">Ford Importados</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 326px">
						<span class="letra">G</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=23">Galloper</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 650px">
						<span class="letra">H</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=24">Honda</a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=25">Hyundai</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;right: 0px">
						<span class="letra">I</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=26">I.E.S.</a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=27">Ika</a></li>
							<li class="palabrastres"><a href="panel-usados.php?cat_id=28">IME</a></li>
							<li class="palabrascuatro"><a href="panel-usados.php?cat_id=29">Isuzu</a></li>
							<li class="palabrascinco"><a href="panel-usados.php?cat_id=30">Iveco</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 0px">
						<span class="letra">J</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=31">Jaguar</a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=32">Jeep</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 326px">
						<span class="letra">K</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=33">KIA</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 650px">
						<span class="letra">L</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=34">Landa</a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=35">Lancia</a></li>
							<li class="palabrastres"><a href="panel-usados.php?cat_id=36">Land Rover</a></li>
							<li class="palabrascuatro"><a href="panel-usados.php?cat_id=37">lexus</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;right: 0px">
						<span class="letra">M</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=38">Mazda</a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=39">Mercedes Benz</a></li>
							<li class="palabrastres"><a href="panel-usados.php?cat_id=40">MG</a></li>
							<li class="palabrascuatro"><a href="panel-usados.php?cat_id=41">MINI</a></li>
							<li class="palabrascinco"><a href="panel-usados.php?cat_id=42">Mitsubishi</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 0px">
						<span class="letra">N</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=43">Nisan</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 326px">
						<span class="letra">O</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=44">Opel</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 650px">
						<span class="letra">P</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=45">Peugeot</a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=46">Porsche</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;right: 0px">
						<span class="letra">R</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=47">RAM</a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=48">Renault</a></li>
							<li class="palabrastres"><a href="panel-usados.php?cat_id=49">Rover</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 620px;left: 0px">
						<span class="letra">S</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=50">Saab</a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=51">SEAT</a></li>
							<li class="palabrastres"><a href="panel-usados.php?cat_id=52">Siam Di Tella</a></li>
							<li class="palabrascuatro"><a href="panel-usados.php?cat_id=53">Smart</a></li>
							<li class="palabrascinco"><a href="panel-usados.php?cat_id=54">Ssang yong</a></li>
							<li class="palabrasseis"><a href="panel-usados.php?cat_id=55">Subaru</a></li>
							<li class="palabrassiete"><a href="panel-usados.php?cat_id=56">Susuki</a></li>
						</ul>
						</li>	

						<li style="position: absolute;top: 620px;left: 326px">
						<span class="letra">T</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=57">Tata</a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=58">Toyota</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 620px;left: 650px">
						<span class="letra">V</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=59">Volkswaguen</a></li>
							<li class="palabrasdos"><a href="panel-usados.php?cat_id=60">Volvo</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 620px;right: 0px">
						<span class="letra">W</span>
						<ul>
							<li class="palabrasuno"><a href="panel-usados.php?cat_id=61">Willys</a></li>
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