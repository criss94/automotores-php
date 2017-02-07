<?php 
	//muestreo del auto seleccionados
	$id_nuevos=$_GET["id_nuevos"];
	$cat_id=$_GET["cat_id"];
	require "conexion.php";
	$sql="SELECT modelo,precio,origen,descripcion,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8 FROM nuevos WHERE id_nuevos=".$id_nuevos;
	$resultado=mysqli_query($link,$sql) or die(mysqli_error($link));

	//muestreo de autos similares
	$sql="SELECT id_nuevos,modelo,foto,cat_id FROM nuevos 
	      WHERE cat_id=$cat_id and id_nuevos NOT IN ('".$id_nuevos."')";
	$resultado1=mysqli_query($link,$sql) or die(mysqli_error($link));

	//muestreo del nombre de la marca del titulo de autos similares
	$sql="SELECT cat_nombre FROM categorias WHERE cat_id=".$cat_id;
	$resultado2=mysqli_query($link,$sql) or die(mysqli_error($link));
	$fila2=mysqli_fetch_assoc($resultado2);
	mysqli_close($link);
 ?>
<?php 
	include "encabezado.php";
 ?>
	<script src="js/jquery-2.2.3.js"></script>
 	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script src="engine1/jquery.js"></script>
	<link rel="stylesheet" href="ir_arriba/estilos.css">
	<link rel="stylesheet" href="ir_arriba/arriba.css">
	<script src="ir_arriba/ir-arriba-js.js"></script>
	<script src="ir_arriba/arriba.js"></script>

	<!-- codigo de validacion del formulario -->
	<script src="js/jquery-validation-min.js"></script>
    <script src="js/validation-form-concesionaria.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
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
		
			<div class="muestreo-autos" style="background-image: url(logos/body.jpg);background-repeat: no-repeat;">

				<?php 
					while ($fila=mysqli_fetch_assoc($resultado)) {
				 ?>

				<div class="guia-nav">
					<a href="index.php">Inicio » </a><a href="catalogo-nuevos.php">Catálogo » </a><a href="panel-nuevos.php?cat_id=<?php echo $cat_id; ?>"><?php echo $fila2["cat_nombre"]; ?> » </a><span><?php echo $fila["modelo"]; ?></span>
				</div>	

				<div class="caja-nuevos">
	<div class="vistazo">
		<div class="vista-slider">
			<div id="wowslider-container1">
				<div class="ws_images">
					<ul>
			<li><img src="data1/imagesNuevos/<?php echo $fila["foto1"]; ?>" alt="1" title="1" id="wows1_0"/></li>
			<li><img src="data1/imagesNuevos/<?php echo $fila["foto2"]; ?>" alt="2" title="2" id="wows1_1"/></li>
			<li><img src="data1/imagesNuevos/<?php echo $fila["foto3"]; ?>" alt="3" title="3" id="wows1_2"/></li>
			<li><img src="data1/imagesNuevos/<?php echo $fila["foto4"]; ?>" alt="4" title="4" id="wows1_3"/></li>
			<li><img src="data1/imagesNuevos/<?php echo $fila["foto5"]; ?>" alt="5" title="5" id="wows1_4"/></li>
			<li><img src="data1/imagesNuevos/<?php echo $fila["foto6"]; ?>" alt="6" title="6" id="wows1_5"/></li>
			<li><img src="data1/imagesNuevos/<?php echo $fila["foto7"]; ?>" alt="7" title="7" id="wows1_6"/></li>
			<li><img src="data1/imagesNuevos/<?php echo $fila["foto8"]; ?>" alt="8" title="8" id="wows1_7"/></li>
					</ul>
			</div>
				</div>

						</div>
						<h4><?php echo $fila2["cat_nombre"] ;?></h4>
						<h3><?php echo $fila["modelo"]; ?></h3>
						<p>Precio desde <br>
						<b><?php echo $fila["precio"]; ?></b></p>
						<span>Origen:<strong> <?php echo $fila["origen"]; ?></strong></span>
						<p class="descripcion-autos"><?php echo $fila["descripcion"]; ?></p>
						
				<?php 
				}
				?>
				<form action="procesa-form-concesionaria.php" method="POST" id="val-concesionaria">
					<div class="header-form">
						<h2>Comunicate con la concesionaria</h2>
						<p>(*) Dato obligatorio.</p>
					</div>
					<table id="form-concesionaria">
						<tr>
							<td><label for="nombre">Nombre (*):</label></td>
							<td><input type="text" name="name" id="username" required></td>
						</tr>
						
						<tr>
							<td><label for="email">E-mail (*):</label></td>
							<td><input type="email" name="email" id="email" required></td>
						</tr>
						
						<tr>
							<td><label for="telefono">Teléfono (*):</label></td>
							<td><input type="tel" name="tel" placeholder="Cod Area + Número" required></td>
						</tr>
						<?php 
							$provincias=array("Buenos Aires"=>"Buenos Aires",
								              "Buenos Aires GBA"=>"Buenos Aires GBA",
								              "Capital Federal"=>"Capital Federal",
								              "Catamarca"=>"Catamarca","Chaco"=>"Chaco",
								              "Chubut"=>"Chubut","Cordoba"=>"Cordoba",
								              "Corrientes"=>"Corrientes","Entre Rios"=>"Entre Rios","Formoza"=>"Formoza",
								              "Jujuy"=>"Jujuy","La Pampa"=>"La Pampa",
								              "La Rioja"=>"La Rioja","Mendoza"=>"Mendoza",
								              "Misiones"=>"Misiones","Neuquen"=>"Neuquen",
								              "La Rioja"=>"La Rioja","Rio Negro"=>"Rio Negro","Salta"=>"Salta","San Juan"=>"San Juan","San Luis"=>"San Luis",
								              "Santa Cruz"=>"Santa Cruz","Santa Fe"=>"Santa Fe","Santiago del Estero"=>"Santiago del Estero","Tierra del Fuego"=>"Tierra del Fuego","Tucuman"=>"Tucuman");
							$cantidad=count($provincias);
							
						 ?>
						<tr>
							<td><label for="provincia">Provincia (*):</label></td>
							<td><select name="provincia" id="provincia" required>
							<option value=""> << Seleccionar >></option>
								<?php 
								foreach ($provincias as $valores => $nombres) {
								 ?>
								<option value="<?php echo $valores; ?>"><?php echo $nombres; ?></option>
								<?php  
								}
								?>
						</tr>
					
						<tr>
							<td class="mensaje-con"><label for="mensaje">Mensaje:</label></td>
							<td><textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Me interesa recibir más información acerca de este aviso"></textarea></td>
						</tr>
						<tr>
							<td>
								<div id="recaptcha" class="g-recaptcha" data-sitekey="6LdaYB8TAAAAAMY7T1WKoqdhIIsJdcjL8jlsqn_f"></div>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" value="ENVIAR CONSULTA" id="enviar">
							</td>
						</tr>
					</table>
						<div class="form-pie">
							<p>Aviso publicado por</p>
							<h1>Gama Center Autos</h1>
						</div>
				</form>
				<h2 class="title-otros">Otros modelos de <?php echo $fila2["cat_nombre"]; ?></h2>
				
				<div id="otros-modelos">
				
				<?php 
					while ($fila1=mysqli_fetch_assoc($resultado1)) {
				 ?>
				 <a href="ver-autos-nuevos.php?id_nuevos=<?php echo $fila1["id_nuevos"]; ?>&cat_id=<?php echo $fila1["cat_id"]; ?>">
					<div class="similares">
						<h4><?php echo $fila1["modelo"]; ?></h4>
						<img src="imgNuevos/<?php echo $fila1["foto"]; ?>" alt="">
					</div>
				</a>
				<?php 
				}
				 ?>
				</div>

				</div>
				</div>

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
</body>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
</html>