<?php 
	//muestreo del auto seleccionados
	$id_motos=$_GET["id_motos"];
	$cat_id=$_GET["cat_id"];
	require "conexion.php";
	$sql="SELECT modelo,anio,km,cilindrada,motor,provincia,ciudad,precio,condicion,vendedor,descripcion,fecha,foto1,foto2,foto3,foto4,foto5,foto6 FROM motos WHERE id_motos=".$id_motos;
	$resultado=mysqli_query($link,$sql) or die(mysqli_error($link));

	$sql="SELECT cat_id,cat_nombre FROM cat_motos WHERE cat_id=".$cat_id;
	$resultado1=mysqli_query($link,$sql) or die(mysqli_error($link));
	$fila1=mysqli_fetch_assoc($resultado1);

	mysqli_close($link);
 ?>
<?php 
	include "encabezado.php";
 ?>
 
 	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<link rel="stylesheet" href="ir_arriba/estilos.css">
	<link rel="stylesheet" href="ir_arriba/arriba.css">
	<script src="ir_arriba/ir-arriba-js.js"></script>
	<script src="ir_arriba/arriba.js"></script>

	<!-- codigo de validacion del formulario -->
	<script src="js/jquery-2.2.3.js"></script>
	<script src="js/jquery-validation-min.js"></script>
	<script src="js/validation-form-concesionaria.js"></script>	
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!--  script ventana modal de la denuncia de la seguridad de motos -->
	<script src="js/sesion_modal.js"></script>
	<script src="js/desplegar-modal-de-seguridad-de-motos.js"></script>
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

			            <div id="bg-seguridad">
							<div class="form-seguridad">
									<a href="javascript:desplegar_seguridad('hidden');"><i class="fa fa-times-circle close" aria-hidden="true" title="Cerrar"></i></a>
								<h3 class="titulo-seg">Denunciar publicación</h3>
								<fieldset>
									<legend>¿Por qué quieres denunciar este aviso?</legend>
									<form class="form-seg" action="" method="POST">
										<label for="items1">
											<input id="items1" class="fila-items" type="radio" name="reporte-seguridad" value="precio" checked="checked">
											<span class="fila-letras">Publica a un precio irreal</span>
										</label>

										<label for="items2">
											<input id="items2" class="fila-items" type="radio" name="reporte-seguridad" value="categoria">
											<span class="fila-letras">No está publicado en la categoría correcta</span>
										</label>

										<label for="items3">
											<input id="items3" class="fila-items" type="radio" name="reporte-seguridad" value="sospechoso">
											<span class="fila-letras">El aviso es sospechoso</span>
										</label>

										<label for="items4">
											<input id="items4" class="fila-items" type="radio" name="reporte-seguridad" value="terminos">
											<span class="fila-letras">No cumple con los Términos y Condiciones del sitio</span>
										</label>
										<input class="btn-denunciar" type="submit" value="Denunciar">
										<a href="javascript:desplegar_seguridad('hidden');" class="cancelar">Cancelar</a>
									</form>
								</fieldset>									
							</div>
						</div>


			<span class="ir-arriba icon-keyboard_arrow_up"></span>
			<div class="muestreo-autos-old" style="background-image: url(logos/body.jpg);background-repeat: no-repeat;">

				<?php 
					while ($fila=mysqli_fetch_assoc($resultado)) {
				 ?>

				<div class="guia-nav">
					<a href="index.php">Inicio » </a><a href="catalogo-motos.php">Catálogo » </a><a href="motos.php?cat=<?php echo $fila1["cat_id"]; ?>"><?php echo $fila1["cat_nombre"]; ?> » </a><span><?php echo $fila["modelo"]; ?></span>
				</div>	

				<div class="caja-nuevos">
	<div class="vistazo">
		<div class="vista-slider">
			<div id="wowslider-container1">
				<div class="ws_images">
					<ul>
			<li><img src="data1/imagesMotos/<?php echo $fila["foto1"]; ?>" alt="1" title="1" id="wows1_0"/></li>
			<li><img src="data1/imagesMotos/<?php echo $fila["foto2"]; ?>" alt="2" title="2" id="wows1_1"/></li>
			<li><img src="data1/imagesMotos/<?php echo $fila["foto3"]; ?>" alt="3" title="3" id="wows1_2"/></li>
			<li><img src="data1/imagesMotos/<?php echo $fila["foto4"]; ?>" alt="4" title="4" id="wows1_3"/></li>
			<li><img src="data1/imagesMotos/<?php echo $fila["foto5"]; ?>" alt="5" title="5" id="wows1_4"/></li>
			<li><img src="data1/imagesMotos/<?php echo $fila["foto6"]; ?>" alt="6" title="6" id="wows1_5"/></li>
					</ul>
			</div>
				</div>

						</div>
						<h3><?php echo $fila1["cat_nombre"]," ",$fila["modelo"];?></h3>
						<h4><?php echo $fila["anio"]," | ",$fila["km"]," km"; ?></h4>
						<p><?php echo $fila["provincia"],", ",$fila["ciudad"]; ?></p>
						<h2> $ <?php echo number_format($fila["precio"],3); ?></h2>
				
				<!--#################################################################
				######### formulario ################################################
				###################################################################-->
				<form action="procesa-form-concesionaria.php" method="POST" id="val-concesionaria">
					<div class="header-form">
						<h2>Comunicate con la concesionaria</h2>
						<p>(*) Dato obligatorio.</p>
					</div>
					<table id="form-concesionaria">
						<tr>
							<td><label for="nombre">Nombre (*):</label></td>
							<td><input type="text" name="nombre" id="username" value="" required></td>
						</tr>
					
						<tr>
							<td><label for="email">E-mail (*):</label></td>
							<td><input type="email" name="email" id="email" value="" required></td>
						</tr>
					
						<tr>
							<td><label for="telefono">Teléfono (*):</label></td>
							<td><input type="tel" name="telefono" placeholder="Cod Area + Número" value=""
							required></td>
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
								</select>
							</td>
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
								<input id="enviar" type="submit" value="ENVIAR CONSULTA">
							</td>
						</tr>
					</table>
						<div class="form-pie">
							<p>Aviso publicado por</p>
							<h1>Gama Center Autos</h1>
						</div>
				</form>
				<!-- muestreo de la informacion y equipamiento del coche -->
						<div class="info-descripcion">
							<div class="titulo">Descripción</div>
								<p class="info"><?php echo $fila["descripcion"]; ?></p>
						</div>
						 <div id="motos-pro">
						 	<span class="publicado">Publicado: <?php echo $fila["fecha"]; ?></span>
						 	<ul>
							 	<li>Condicion: <span><?php echo $fila["condicion"]; ?></span></li>
							 	<li>Vendedor: <span><?php echo $fila["vendedor"]; ?></span></li>
							 	<li>Cilindrada: <span><?php echo $fila["cilindrada"]; ?></span></li>
							 	<li>Motor: <span><?php echo $fila["motor"]; ?></span></li>
							</ul>
						 </div>
						 <div id="consejo-seguridad">
						 	<span>Consejos para tu seguridad</span>
						 	<ul>
								<li>Evita pagos a través de servicios de ansferencia que no permitan verificar la identidad del vendedor (por ejemplo, Western Union)</li>
						 		<li>Sospecha de vehículos con valores muy inferiores a los del mercado</li>
						 		<li>Presta atención si el vehículo está en otra ciudad o fuera del país</li>
						 		<li>No hagas envíos al exterior sin primero revisar el vehículo en persona</li>
						 		<li>Verifica la identidad del vendedor por un medio de contacto</li>
						 	</ul>
						 	<span class="text-seguridad">¿Sospechas de este aviso? <a href="javascript:desplegar_seguridad('visible')">Denunciar</a></span>
						 </div>

				<?php 
				}
				?>
						
				
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
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
</html>