<?php 
	$cat_id=$_GET["cat_id"];
	require "conexion.php";
	$sql="SELECT id_usados,modelo,version,precio,anio,km,provincia,ciudad,foto,cat_id FROM usados
		  WHERE cat_id=".$cat_id;
	$resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
	$cantidad=mysqli_num_rows($resultado);

	$sql="SELECT cat_nombre FROM categorias_usados
		  WHERE cat_id=".$cat_id;
	$resultado1=mysqli_query($link,$sql) or die(mysqli_error($link));
	$fila1=mysqli_fetch_assoc($resultado1);
	mysqli_close($link);
 ?>
<?php 
	include "encabezado.php";
 ?>
 <script src="js/sesion_modal.js"></script>
 <script src="js/upload-cars.js"></script>
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
			<div id="listar-autos-config" style="background-image: url(logos/body.jpg);background-repeat: no-repeat;">
					<h2 class="titulo-config">Administración de los Vehículos</h2>
					<a href="javascript:desplegar_upload_cars_new('visible')" class="elegir-otro"> » Elegir otro «</a>
				 <div class="contador-c">
					<p><b><?php echo $cantidad; ?> </b><?php echo $fila1["cat_nombre"]; ?> encontrados</p>
				</div>				
			
			    <div class="listado">
				<?php 
				while ($fila=mysqli_fetch_assoc($resultado)) {
				 ?>
				 
					<div class="ver-listado-usados">
						<img src="imgUsados/<?php echo $fila["foto"]; ?>" alt="">
						<h3><?php echo $fila1["cat_nombre"]," ",$fila["modelo"]," ",$fila["version"]; ?></h3>
						<b>$ <?php echo number_format($fila["precio"],3); ?></b><p><?php echo $fila["anio"]," | ",number_format($fila["km"],3); ?> km</p>
						<span><?php echo $fila["provincia"]," | ",$fila["ciudad"]; ?></span>

						<a class="link-conf-u espaciado-1" href="form-editar-autos-usados.php?id_usados=<?php echo $fila["id_usados"]; ?>">Editar</a>
						<a class="link-conf-u espaciado-2" href="form-eliminar-autos-usados.php?id_usados=<?php echo $fila["id_usados"]; ?>">Eliminar</a>
					</div>
				
				<?php 
				}
				?>
				</div>
			</div>

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