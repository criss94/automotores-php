<?php 
	$cat_id=$_GET["cat_id"];
	require "conexion.php";
	$sql="SELECT id_nuevos,modelo,precio,origen,foto,cat_id FROM nuevos
		  WHERE cat_id=".$cat_id;
	$resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
	$cantidad=mysqli_num_rows($resultado);

	$sql="SELECT cat_nombre FROM categorias
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
				 
					<div class="ver-listado">
						<img src="imgNuevos/<?php echo $fila["foto"]; ?>" alt="">
						<h3><?php echo $fila["modelo"]; ?></h3>
						<p>Precio desde <b><?php echo $fila["precio"]; ?></b></p>
						<span>Origen:<strong> <?php echo $fila["origen"]; ?></strong></span>
						<a class="link-conf espaciado" href="form-editar-autos-nuevos.php?id_nuevos=<?php echo $fila["id_nuevos"]; ?>">Editar</a>
						<a class="link-conf" href="form-eliminar-autos-nuevos.php?id_nuevos=<?php echo $fila["id_nuevos"]; ?>">Eliminar</a>
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