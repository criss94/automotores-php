<?php 
	require "conexion.php";
	/*###### autos nuevos ########################################################*/
	$sql="SELECT cat_id,cat_nombre FROM categorias";
	$resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
	$fila=mysqli_fetch_assoc($resultado);

	/*######## autos usados ########################################################*/
	$sql="SELECT cat_id,cat_nombre FROM categorias_usados";
	$resultado1=mysqli_query($link,$sql) or die(mysqli_error($link));
	$fila1=mysqli_fetch_assoc($resultado1);

	/*############ motos ##########################################################*/
	$sql="SELECT cat_id,cat_nombre FROM cat_motos";
	$resultado2=mysqli_query($link,$sql) or die(mysqli_error($link));
	$fila2=mysqli_fetch_assoc($resultado2);
	mysqli_close($link);
 ?>
<?php 
	include "encabezado.php";
 ?>
 <script src="js/jquery-2.2.3.js"></script>
 <script src="js/sesion_modal.js"></script>
 <script src="js/upload-cars.js"></script>
 <script src="js/jquery-validation-min.js"></script>
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

		<!--##########################################################################
		########## autos nuevos ######################################################
		###########################################################################-->
			<div id="bg-modal-cars-new">
				<div class="content-cars-new">
					<div class="form-cars-new">

						<a href="javascript:desplegar_upload_cars_new('hidden');"><i class="fa fa-times-circle close" aria-hidden="true" title="Cerrar"></i></a>
						
				<div id="config-categorias">
					<h1>
						Elegír la Marca del Vehículo 
					</h1>

					<ul style="position: relative;">
						<li style="position: absolute;top: 0px;left: 0px;margin-bottom:">
						<span class="letra">A</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=1"><span>Alfa Romeo</span></a></li>
							<li class="palabrasdos"><a href="config-nuevos.php?cat_id=2"><span>Audi</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 226px;">
						<span class="letra">B</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=3"><span>BMW</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 450px;">
						<span class="letra">C</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=4"><span>Chery</span></a></li>
							<li class="palabrasdos"><a href="config-nuevos.php?cat_id=5"><span>Chevrolet</span></a></li>
							<li class="palabrastres"><a href="config-nuevos.php?cat_id=6"><span>Chrysler</span></a></li>
							<li class="palabrascuatro"><a href="config-nuevos.php?cat_id=7"><span>Citroën</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 680px">
						<span class="letra">D</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=8"><span>Dodge</span></a></li>
							<li class="palabrasdos"><a href="config-nuevos.php?cat_id=9"><span>DS</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top:0px;right: 0px">
						<span class="letra">F</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=10">Ferrari</a></li>
							<li class="palabrasdos"><a href="config-nuevos.php?cat_id=11">Fiat</a></li>
							<li class="palabrastres"><a href="config-nuevos.php?cat_id=12">Ford</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 0px">
						<span class="letra">H</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=13">Honda</a></li>
							<li class="palabrasdos"><a href="config-nuevos.php?cat_id=14">Hyundai</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 226px">
						<span class="letra">I</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=15">Iveco</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 450px">
						<span class="letra">J</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=16">Jaguar</a></li>
							<li class="palabrasdos"><a href="config-nuevos.php?cat_id=17">Jeep</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 680px">
						<span class="letra">K</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=18">KIA</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;right: 0px">
						<span class="letra">L</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=19">Land Rover</a></li>
							<li class="palabrasdos"><a href="config-nuevos.php?cat_id=20">Lifan</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 0px">
						<span class="letra">M</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=21">Maserati</a></li>
							<li class="palabrasdos"><a href="config-nuevos.php?cat_id=22">Mercedes Benz</a></li>
							<li class="palabrastres"><a href="config-nuevos.php?cat_id=23">MINI</a></li>
							<li class="palabrascuatro"><a href="config-nuevos.php?cat_id=24">Mitsubishi</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 226px">
						<span class="letra">N</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=25">Nisan</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 450px">
						<span class="letra">P</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=26">Peugeot</a></li>
							<li class="palabrasdos"><a href="config-nuevos.php?cat_id=27">Porsche</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 680px">
						<span class="letra">R</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=28">RAM</a></li>
							<li class="palabrasdos"><a href="config-nuevos.php?cat_id=29">Renault</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;right: 0px">
						<span class="letra">S</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=30">Smart</a></li>
							<li class="palabrasdos"><a href="config-nuevos.php?cat_id=31">Ssang yong</a></li>
							<li class="palabrastres"><a href="config-nuevos.php?cat_id=32">Subaru</a></li>
							<li class="palabrascuatro"><a href="config-nuevos.php?cat_id=33">Susuki</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 0px">
						<span class="letra">T</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=34">Toyota</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 226px">
						<span class="letra">V</span>
						<ul>
							<li class="palabrasuno"><a href="config-nuevos.php?cat_id=35">Volkswagen</a></li>
							<li class="palabrasdos"><a href="config-nuevos.php?cat_id=36">Volvo</a></li>
						</ul>
						</li>					

					</ul>
				</div>

					</div>
				</div>
			</div>


		<!-- ########################################################################
		############### autos usados ################################################
		#############################################################################-->

			<div id="bg-modal-cars-old">
				<div class="content-cars-old">
					<div class="form-cars-old">

						<a href="javascript:desplegar_upload_cars_old('hidden');"><i class="fa fa-times-circle close" aria-hidden="true" title="Cerrar"></i></a>

				<div id="config-categorias">
					<h1>
						Elegír la Marca del Vehículo 
					</h1>
					
					<ul style="position: relative;">
						<li style="position: absolute;top: 0px;left: 0px;margin-bottom:">
						<span class="letra">A</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=1"><span>Acura</span></a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=2"><span>Aleko</span></a></li>
							<li class="palabrastres"><a href="config-usados.php?cat_id=3"><span>Alfa Romeo</span></a></li>
							<li class="palabrascuatro"><a href="config-usados.php?cat_id=4"><span>AMC</span></a></li>
							<li class="palabrascinco"><a href="config-usados.php?cat_id=5"><span>Asia</span></a></li>
							<li class="palabrasseis"><a href="config-usados.php?cat_id=6"><span>Audi</span></a></li>
							<li class="palabrassiete"><a href="config-usados.php?cat_id=7"><span>Auto unión</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 226px;">
						<span class="letra">B</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=8"><span>Bentley</span></a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=9"><span>BMW</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 450px;">
						<span class="letra">C</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=10"><span>Chery</span></a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=11"><span>Chevrolet</span></a></li>
							<li class="palabrastres"><a href="config-usados.php?cat_id=12"><span>Chrysler</span></a></li>
							<li class="palabrascuatro"><a href="config-usados.php?cat_id=13"><span>Citroën</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 680px">
						<span class="letra">D</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=14"><span>Dacia</span></a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=15"><span>Daewoo</span></a></li>
							<li class="palabrastres"><a href="config-usados.php?cat_id=16"><span>Daihatsu</span></a></li>
							<li class="palabrascuatro"><a href="config-usados.php?cat_id=17"><span>Deuts Agrale</span></a></li>
							<li class="palabrascinco"><a href="config-usados.php?cat_id=18"><span>Dodge</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;right: 0px">
						<span class="letra">F</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=19">Ferrari</a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=20">Fiat</a></li>
							<li class="palabrastres"><a href="config-usados.php?cat_id=21">Ford</a></li>
							<li class="palabrascuatro"><a href="config-usados.php?cat_id=22">Ford Importados</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 0px">
						<span class="letra">G</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=23">Galloper</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 226px">
						<span class="letra">H</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=24">Honda</a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=25">Hyundai</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 450px">
						<span class="letra">I</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=26">I.E.S.</a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=27">Ika</a></li>
							<li class="palabrastres"><a href="config-usados.php?cat_id=28">IME</a></li>
							<li class="palabrascuatro"><a href="config-usados.php?cat_id=29">Isuzu</a></li>
							<li class="palabrascinco"><a href="config-usados.php?cat_id=30">Iveco</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 680px">
						<span class="letra">J</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=31">Jaguar</a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=32">Jeep</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;right: 0px">
						<span class="letra">K</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=33">KIA</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 0px">
						<span class="letra">L</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=34">Landa</a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=35">Lancia</a></li>
							<li class="palabrastres"><a href="config-usados.php?cat_id=36">Land Rover</a></li>
							<li class="palabrascuatro"><a href="config-usados.php?cat_id=37">lexus</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 226px">
						<span class="letra">M</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=38">Mazda</a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=39">Mercedes Benz</a></li>
							<li class="palabrastres"><a href="config-usados.php?cat_id=40">MG</a></li>
							<li class="palabrascuatro"><a href="config-usados.php?cat_id=41">MINI</a></li>
							<li class="palabrascinco"><a href="config-usados.php?cat_id=42">Mitsubishi</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 450px">
						<span class="letra">N</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=43">Nisan</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 680px">
						<span class="letra">O</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=44">Opel</a></li>
						</ul>
						</li>

						<li style="position: absolute;top:300px;right:0px">
						<span class="letra">P</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=45">Peugeot</a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=46">Porsche</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 0px">
						<span class="letra">R</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=47">RAM</a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=48">Renault</a></li>
							<li class="palabrastres"><a href="config-usados.php?cat_id=49">Rover</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 226px">
						<span class="letra">S</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=50">Saab</a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=51">SEAT</a></li>
							<li class="palabrastres"><a href="config-usados.php?cat_id=52">Siam Di Tella</a></li>
							<li class="palabrascuatro"><a href="config-usados.php?cat_id=53">Smart</a></li>
							<li class="palabrascinco"><a href="config-usados.php?cat_id=54">Ssang yong</a></li>
							<li class="palabrasseis"><a href="config-usados.php?cat_id=55">Subaru</a></li>
							<li class="palabrassiete"><a href="config-usados.php?cat_id=56">Susuki</a></li>
						</ul>
						</li>	

						<li style="position: absolute;top: 460px;left: 450px">
						<span class="letra">T</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=57">Tata</a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=58">Toyota</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 680px">
						<span class="letra">V</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=59">Volkswaguen</a></li>
							<li class="palabrasdos"><a href="config-usados.php?cat_id=60">Volvo</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;right:0px">
						<span class="letra">W</span>
						<ul>
							<li class="palabrasuno"><a href="config-usados.php?cat_id=61">Willys</a></li>
						</ul>
						</li>				

					</ul>
				</div>

					</div>
				</div>
			</div>
	
	<!--###########################################################################
	########### formulario de agregar motos #######################################
	###############################################################################-->

			<div id="bg-modal-cars-motos">
				<div class="content-cars-motos">
					<div class="form-cars-motos">

						<a href="javascript:desplegar_upload_motos('hidden');"><i class="fa fa-times-circle close" aria-hidden="true" title="Cerrar"></i></a>

				<div id="config-categorias">
					<h1>
						Elegír la Marca del la Moto 
					</h1>
					
					<ul style="position: relative;">
						<li style="position: absolute;top: 0px;left: 0px;margin-bottom:">
						<span class="letra">A</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=1"><span>Appia</span></a></li>
							<li class="palabrasdos"><a href="config-motos.php?cat=2"><span>Aprilia</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 226px;">
						<span class="letra">B</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=3"><span>BMW</span></a></li>
							<li class="palabrasdos"><a href="config-motos.php?cat=4"><span>Bajaj</span></a></li>
							<li class="palabrastres"><a href="config-motos.php?cat=5"><span>Beta</span></a></li>
							<li class="palabrascuatro"><a href="motos.php?cat=6"><span>Bloower</span></a></li>
							<li class="palabrascinco"><a href="config-motos.php?cat=7"><span>Bombardier</span></a></li>
							<li class="palabrasseis"><a href="config-motos.php?cat=8"><span>Brava</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 450px;">
						<span class="letra">C</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=9"><span>Can Am</span></a></li>
							<li class="palabrasdos"><a href="config-motos.php?cat=10"><span>Corven</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;left: 680px">
						<span class="letra">D</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=11"><span>Dayama</span></a></li>
							<li class="palabrasdos"><a href="config-motos.php?cat=12"><span>Daytona</span></a></li>
							<li class="palabrastres"><a href="config-motos.php?cat=13"><span>Ducati</span></a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 0px;right: 0px">
						<span class="letra">G</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=14">Gilera</a></li>
							<li class="palabrasdos"><a href="config-motos.php?cat=15">Goes</a></li>
							<li class="palabrastres"><a href="config-motos.php?cat=16">Guerrero</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 0px">
						<span class="letra">H</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=17">Harley Davidson</a></li>
							<li class="palabrasdos"><a href="config-motos.php?cat=18">Honda</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 226px">
						<span class="letra">J</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=19">Jawa</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 450px">
						<span class="letra">K</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=20">KTM</a></li>
							<li class="palabrasdos"><a href="config-motos.php?cat=21">Kawasaki</a></li>
							<li class="palabrastres"><a href="config-motos.php?cat=22">Keeway</a></li>
							<li class="palabrascuatro"><a href="config-motos.php?cat=23">Keller</a></li>
							<li class="palabrascinco"><a href="config-motos.php?cat=24">Kymco</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;left: 680px">
						<span class="letra">L</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=25">LuckyLion</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 150px;right: 0px">
						<span class="letra">M</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=26">Mondial</a></li>
							<li class="palabrasdos"><a href="config-motos.php?cat=27">Motomel</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 0px">
						<span class="letra">N</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=28">NSU</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 226px">
						<span class="letra">P</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=29">Piaggio</a></li>
							<li class="palabrasdos"><a href="config-motos.php?cat=30">Piaggio Vespa</a></li>
							<li class="palabrastres"><a href="config-motos.php?cat=31">Polaris</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 450px">
						<span class="letra">R</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=32">Royal Enfield</a></li>
							<li class="palabrasdos"><a href="config-motos.php?cat=33">Rumi</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 300px;left: 680px">
						<span class="letra">S</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=34">Sea Horse</a></li>
							<li class="palabrasdos"><a href="config-motos.php?cat=35">Siambretta</a></li>
							<li class="palabrastres"><a href="config-motos.php?cat=36">Sumo</a></li>
							<li class="palabrascuatro"><a href="config-motos.php?cat=37">Susuki</a></li>
						</ul>
						</li>

						<li style="position: absolute;top:300px;right:0px">
						<span class="letra">T</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=38">Tibo</a></li>
							<li class="palabrasdos"><a href="config-motos.php?cat=39">Triumph</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 0px">
						<span class="letra">V</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=40">Vespa</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 226px">
						<span class="letra">Y</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=41">Yamaha</a></li>
						</ul>
						</li>	

						<li style="position: absolute;top: 460px;left: 450px">
						<span class="letra">Z</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=42">Zanella</a></li>
						</ul>
						</li>

						<li style="position: absolute;top: 460px;left: 680px">
						<span class="letra">?</span>
						<ul>
							<li class="palabrasuno"><a href="config-motos.php?cat=43">Otra Marca</a></li>
						</ul>
						</li>			

					</ul>
				</div>


					</div>
				</div>
			</div>

	<!-- -------------------------------------------------------------------------- -->


			<div id="bg-sesion" >
				<?php include "form-sesion.php"; ?>
			</div>
			<div id="publicaciones">
				
				<div class="pub-elegir">
					<h2>Administración de los Vehículos</h2>
					<p>( Seleccionar tipo  de vehículo a configurar*)</p>
						
					
					<a href="javascript:desplegar_upload_cars_new('visible')">
						<div class="pub-nuevo">
							<img src="logos/autos-nuevos.png" alt="">
							<p class="igual">Autos Nuevos</p>
						</div>
					</a>
					
					<a href="javascript:desplegar_upload_cars_old('visible')">
						<div class="pub-nuevo">
							<img src="logos/autos-usados.jpg" alt="">
							<p class="igual">Autos Usados</p>
						</div>
					</a>

					
					<a href="javascript:desplegar_upload_motos('visible')">
						<div class="pub-nuevo">
							<img src="logos/motos.png" alt="">
							<p class="distinto">Motos Nuevos y Usados</p>
						</div>
					</a>
				</div>

			</div>
		</article>
	</section>
	<footer style="width:1349px;height:238px;background-image: url(logos/banner3.jpg);">
		<?php 
			include "pie.php";
		 ?>
	</footer>


	<script src="js/jquery-validation-spanish.js"></script>
</body>
</html>