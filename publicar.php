<?php 
	require "conexion.php";
	require "validar-sesion.php";
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

						<form action="agregar-autos-nuevos.php" method="POST" enctype="multipart/form-data" id="form-add-new">
							<h3>Datos de tu Vehiculo</h3>
							<p class="obligatorio">Los Datos con * son obligatorios</p>
							<label for="cat_id"><span class="f-marca">* Marca</span>
							<select name="cat_id" id="cat_id" required>
								<option value="">Selecioná la marca</option>
								<?php 
								while ($fila=mysqli_fetch_assoc($resultado)) {
								?>
								<option value="<?php echo $fila["cat_id"]; ?>"><?php echo $fila["cat_nombre"]; ?></option>
								<?php
								}
								?>
							</select>
							</label>
 
							<br>
							 <label for="modelo">
							<span class="f-modelo">* Modelo</span>
							<input id="modelo" type="text" name="modelo" value="" placeholder=" Ingresá el modelo de tu vehículo" required>
							</label>
							<br>
							
							<label for="com">
							<span id="combus" class="f-origen">* Origen</span>
							<input id="com" type="text" name="origen" value="" placeholder="Ingresá el origen de tu vehículo" required>
							</label>
							<br>
							
							<label for="parra">
							<span class="f-precio">* Precio en $</span>
							<input id="parra" type="number" name="precio" value="" placeholder=" Ej: 100.000" required maxlength="7">
							</label>
							<br>
							<hr>
							
							<h3>Fotos de tu vehículo</h3>
							<input type="file" name="foto" value="">
							<p class="fotos-cars">Sube imagenes con un mínimo de 800 x 600 px, en formato JPG<br>Esta es la foto principal que se mostrara en la publicación de tú vehículo, tené en cuenta tomar el mejor perfil de tu auto hací obtendras más visitas y más chances de vender tú vehículo</p>
							<hr>
							
							<p class="fotos-cars1">Podés subir 6 fotos más, para que los visitantes tengan un mejor panorama sobre tú vehículo</p>
							<input class="files" type="file" name="foto1" value="">
							<input class="files" type="file" name="foto2" value="">
							<input class="files" type="file" name="foto3" value="">
							<input class="files" type="file" name="foto4" value="">
							<input class="files" type="file" name="foto5" value="">
							<input class="files" type="file" name="foto6" value="">
							<input class="files" type="file" name="foto7" value="">
							<input class="files" type="file" name="foto8" value="">
							<hr>
							<h3>Descripción del Vehículo</h3>
							<textarea name="descripcion" id="descripcion" placeholder="Ejemplo: Le agregué llantas deportivas y stereo con MP3. Lo guardo en cochera, service al dia, manual ..."></textarea>

							<input id="b-upload" type="submit" value="UPLOAD" class="btn-upload">
						</form>
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

						<form action="agregar-autos-usados.php" method="POST" enctype="multipart/form-data" id="form-add-old">
							<h3>Datos de tu Vehiculo</h3>
							<p class="obligatorio">Los Datos con * son obligatorios</p>
							<label for="cat_id"><span class="f-marca">* Marca</span>
							<select name="cat_id" id="cat_id" required>
								<option value="">Selecioná la marca</option>
								<?php 
								while ($fila1=mysqli_fetch_assoc($resultado1)) {
								 ?>
								<option value="<?php echo $fila1["cat_id"]; ?>"><?php echo $fila1["cat_nombre"]; ?></option>
								<?php
								}
								?>
							</select>
							</label>
 
							<br>
							 <label for="modelo">
							<span class="f-modelo">* Modelo</span>
							<input id="modelo" type="text" name="modelo" value="" placeholder=" Ingresá el modelo de tu vehículo" required>
							</label>
							<br>
							<label for="version">
							<span class="f-version">* Versión</span>
							<input id="version" type="text" name="version" value="" placeholder=" Ingresá la versión de tu vehículo" required>
							</label>

							<br>
							<label for="anio">
							<span id="anios" class="f-anio">* Año</span>
							<select name="anio" id="anio" required>
								<option value="">Seleccioná el año</option>
								
								<?php 
								$inicio=2017;
								for ($i=2017; $i >= 1900 ; $i--) { 
								 ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php 
								}
								 ?>
							</select>
							</label>

							<br>

							<label for="com">
							<span id="combus" class="f-combustible">* Combustible</span>
							<input id="com" type="text" name="combustible" value="" placeholder="Ingresá el tipo de combustible de tu vehículo" required>
							</label>

							<br>
							<label for="kil">
							<span id="kilom" class="f-km">* Kilómetros</span>
							<input id="kil" type="text" name="km" value="" maxlength="7" placeholder=" Ej: 1.000" required>
							</label>
							<br>
							<label for="provin">
							<span id="prov" class="f-provincia">* Provincia</span>
							<input id="provin" type="text" name="provincia" value="" placeholder="Ingresá la provincia donde se encuentra tu vehículo." required>
							</label>
							<br>

							<label for="ciu">
							<span class="f-ciudad">* Ciudad</span>
							<input id="ciu" type="text" name="ciudad" value="" placeholder="Ingresá la ciudad donde se encuentra tu vehículo." required>
							</label>
							<br>
							
							<label for="parra">
							<span class="f-precio">* Precio en $</span>
							<input id="parra" type="number" name="precio" value="" placeholder=" Ej: 100.000" required maxlength="7">
							</label>
							<br><hr>
							
							<h3>Fotos de tu vehículo</h3>
							<input type="file" name="foto" value="">
							<p class="fotos-cars">Sube imagenes con un mínimo de 800 x 600 px, en formato JPG<br>Esta es la foto principal que se mostrara en la publicación de tú vehículo, tené en cuenta tomar el mejor perfil de tu auto hací obtendras más visitas y más chances de vender tú vehículo</p><hr>
							
							<p class="fotos-cars1">Podés subir 6 fotos más, para que los visitantes tengan un mejor panorama sobre tú vehículo</p>
							<input type="file" name="foto1" value="">
							<input type="file" name="foto2" value="">
							<input type="file" name="foto3" value="">
							<input type="file" name="foto4" value="">
							<input type="file" name="foto5" value="">
							<input type="file" name="foto6" value="">
							<hr>
							<h3>Descripción del Vehículo</h3>
							<textarea name="descripcion" id="descripcion" placeholder="Ejemplo: Le agregué llantas deportivas y stereo con MP3. Lo guardo en cochera, service al dia, manual ..."></textarea>
							<input id="b-upload" type="submit" value="UPLOAD" class="btn-upload">
						</form>
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

						<form action="agregar-motos.php" method="POST" enctype="multipart/form-data" id="form-add-motos">
							<h3>Datos de tu Moto</h3>
							<p class="obligatorio">Los Datos con * son obligatorios</p>
							<label for="cat_id">
							<span class="f-marca-m">* Marca</span>
							<select name="cat_id" id="cat_id" required>
								<option value="">Selecioná la marca</option>
								<?php 
								while ($fila2=mysqli_fetch_assoc($resultado2)) {
								 ?>
								<option value="<?php echo $fila2["cat_id"]; ?>"><?php echo $fila2["cat_nombre"]; ?></option>
								<?php
								}
								?>
							</select>
							</label>
 
							<br>
							 <label for="modelo">
							<span class="f-modelo-m">* Modelo</span>
							<input id="modelo" type="text" name="modelo" value="" placeholder=" Ingresá el modelo de la Moto" required>
							</label>
	
							<br>
							<label for="anio">
							<span class="f-anio-m">* Año</span>
							<select name="anio" id="anio" required>
								<option value="">Seleccioná el año</option>
								
								<?php 
								$inicio=2017;
								     for ($i=2017; $i >= 1900 ; $i--) { 
								 ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php 
								}
								 ?>
							</select>
							</label>

							<br>
							<label for="kil">
							<span class="f-km-m">* Kilómetros</span>
							<input id="kil" type="text" name="km" value="" maxlength="7" placeholder="Ej: 1.000" required>
							</label>
							<br>
							<label for="cilin">
							<span class="f-cilindrada-m">* Cilindrada</span>
							<input id="cilin" type="text" name="cilindrada" value="" placeholder="Ingresá el tipo de cilindrada de tu Moto" required>
							</label>
							<br>
							<label for="motor">
							<span class="f-motor-m">* Motor</span>
							<input id="motor" type="text" name="motor" value="" placeholder="Ingresá el tipo de motor de tú Moto." required>
							</label>
							<br>
							<label for="provin">
							<span class="f-provincia-m">* Provincia</span>
							<input id="provin" type="text" name="provincia" value="" placeholder="Ingresá la provincia donde se encuentra tu Moto" required>
							</label>
							<br>
							<label for="ciu">
							<span class="f-ciudad-m">* Ciudad</span>
							<input id="ciu" type="text" name="ciudad" value="" placeholder="Ingresá la ciudad donde se encuentra tu Moto" required>
							</label>
							<br>
							<label for="condicion">
							<span class="f-condicion-m">* Condicion</span>
							<input id="condicion" type="text" name="condicion" value="" placeholder="Usado o Nuevo ?" required>
							</label>
							<br>
							<label for="vendedor">
							<span class="f-vendedor-m">* Vendedor</span>
							<input id="vendedor" type="text" name="vendedor" value="" placeholder="Particular o concesionaria ?" required>
							</label>
							<br>
							<label for="parra">
							<span class="f-precio-m">* Precio en $</span>
							<input id="parra" type="text" name="precio" value="" placeholder="Ej: 250.580" required maxlength="7">
							</label>
							<br><hr>
							
							<h3>Fotos de tu Moto</h3>
							<input type="file" name="foto" value="">
							<p class="fotos-cars">Sube imagenes con un mínimo de 800 x 600 px, en formato JPG<br>Esta es la foto principal que se mostrara en la publicación de tú vehículo, tené en cuenta tomar el mejor perfil de tu auto hací obtendras más visitas y más chances de vender tú Moto</p><hr>
							
							<p class="fotos-cars1">Podés subir 6 fotos más, para que los visitantes tengan un mejor panorama sobre tú vehículo</p>
							<input type="file" name="foto1" value="">
							<input type="file" name="foto2" value="">
							<input type="file" name="foto3" value="">
							<input type="file" name="foto4" value="">
							<input type="file" name="foto5" value="">
							<input type="file" name="foto6" value="">
							<hr>
							<h3>Descripción de la Moto</h3>
							<textarea name="descripcion" id="descripcion" placeholder="Ejemplo: Le agregué llantas deportivas. Lo guardo en cochera, service al dia ..."></textarea>

							<input id="b-upload" type="submit" value="UPLOAD" class="btn-upload">
						</form>
					</div>
				</div>
			</div>

	<!-- -------------------------------------------------------------------------- -->


			<div id="bg-sesion" >
				<?php include "form-sesion.php"; ?>
			</div>
			<div id="publicaciones">
				
				<div class="pub-elegir">
					<h2>Vendé tu Auto</h2>
					<p>( Seleccionar tipo  de vehículo *)</p>
						
					
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