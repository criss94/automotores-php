<?php 
	$sqlfoto=$sqlfoto1=$sqlfoto2=$sqlfoto3=$sqlfoto4=$sqlfoto5=$sqlfoto6=$sqlfoto7=$sqlfoto8="";
	$ruta="imgNuevos/";
	$rutaSlider="data1/imagesNuevos/";
	$foto="noDisponible.jpg";
	$foto1="sin-foto.png";
	$foto2="sin-foto.png";
	$foto3="sin-foto.png";
	$foto4="sin-foto.png";
	$foto5="sin-foto.png";
	$foto6="sin-foto.png";
	$foto7="sin-foto.png";
	$foto8="sin-foto.png";

	//foto principal
	if ($_FILES["foto"]["name"]!="") {
		$foto=$_FILES["foto"]["name"];
		$fototmp=$_FILES["foto"]["tmp_name"];
		move_uploaded_file($fototmp, $ruta.$foto);
		$sqlfoto=",foto='".$foto."'";
	}
	//foto opcional
	if ($_FILES["foto1"]["name"]!="") {
		$foto1=$_FILES["foto1"]["name"];
		$foto1tmp=$_FILES["foto1"]["tmp_name"];
		move_uploaded_file($foto1tmp, $rutaSlider.$foto1);
		$sqlfoto1=",foto1='".$foto1."'";
	}
	if ($_FILES["foto2"]["name"]!="") {
		$foto2=$_FILES["foto2"]["name"];
		$foto2tmp=$_FILES["foto2"]["tmp_name"];
		move_uploaded_file($foto2tmp, $rutaSlider.$foto2);
		$sqlfoto2=",foto2='".$foto2."'";
	}
	if ($_FILES["foto3"]["name"]!="") {
		$foto3=$_FILES["foto3"]["name"];
		$foto3tmp=$_FILES["foto3"]["tmp_name"];
		move_uploaded_file($foto3tmp, $rutaSlider.$foto3);
		$sqlfoto3=",foto3='".$foto3."'";
	}
	if ($_FILES["foto4"]["name"]!="") {
		$foto4=$_FILES["foto4"]["name"];
		$foto4tmp=$_FILES["foto4"]["tmp_name"];
		move_uploaded_file($foto4tmp, $rutaSlider.$foto4);
		$sqlfoto4=",foto4='".$foto4."'";
	}
	if ($_FILES["foto5"]["name"]!="") {
		$foto5=$_FILES["foto5"]["name"];
		$foto5tmp=$_FILES["foto5"]["tmp_name"];
		move_uploaded_file($foto5tmp, $rutaSlider.$foto5);
		$sqlfoto5=",foto5='".$foto5."'";
	}
	if ($_FILES["foto6"]["name"]!="") {
		$foto6=$_FILES["foto6"]["name"];
		$foto6tmp=$_FILES["foto6"]["tmp_name"];
		move_uploaded_file($foto6tmp, $rutaSlider.$foto6);
		$sqlfoto6=",foto6='".$foto6."'";
	}
	if ($_FILES["foto7"]["name"]!="") {
		$foto7=$_FILES["foto7"]["name"];
		$foto7tmp=$_FILES["foto7"]["tmp_name"];
		move_uploaded_file($foto7tmp, $rutaSlider.$foto7);
		$sqlfoto7=",foto7='".$foto7."'";
	}
	if ($_FILES["foto8"]["name"]!="") {
		$foto8=$_FILES["foto8"]["name"];
		$foto8tmp=$_FILES["foto8"]["tmp_name"];
		move_uploaded_file($foto8tmp, $rutaSlider.$foto8);
		$sqlfoto8=",foto8='".$foto8."'";
	}

	$id_nuevos=$_POST["id_nuevos"];
	$modelo=$_POST["modelo"];
	$origen=$_POST["origen"];
	$precio=$_POST["precio"];
	$marca=$_POST["cat_id"];
	$descripcion=$_POST["descripcion"];
	require "conexion.php";
	$sql="UPDATE nuevos SET modelo='".$modelo."',
							origen='".$origen."',
							precio='".$precio."',
							descripcion='".$descripcion."',
							cat_id=".$marca.$sqlfoto.$sqlfoto1.$sqlfoto2.$sqlfoto3.$sqlfoto4.$sqlfoto5.$sqlfoto6.$sqlfoto7.$sqlfoto8."
		                WHERE id_nuevos=".$id_nuevos;
    mysqli_query($link,$sql) or die(mysqli_error($link));
    $checkeo=mysqli_affected_rows($link);
    mysqli_close($link);

 ?>
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
			<?php 
				if ($checkeo !=1) {
			?>	
				<div id="view-add">
					<div class="content-add">
						<div class="suceful">
						<a href="config.php" class="v-volver">volver</a>
						<img src="logos/error.jpg">
						<h3 class="aviso">Importante!</h3>
						<p class="p-aviso"> Lo sentimos,hubo un problema al subir los datos, ó los datos ya fueron cargados, revise en la categoria correspondiente según la marca que su publicación se haya cargado, de lo contrario vuelva a intentarlo de nuevo</p>
						<a href="catalogo-nuevos.php" class="s-salir">Salir</a>
						</div>

					</div>
				</div>
			<?php 
				}else{
			?>

			<div id="view-add">
				<div class="content-add">
					<div class="suceful">
						<a href="config.php" class="v-volver">volver</a>
						<img src="logos/exito.jpg">
						<h3 class="aviso">Aviso</h3>
						<p class="p-aviso">Sus datos fueron cargados correctemente, si desea puede ver como quedó su publicación buscando en la categoria correspondiente al mismo.</p>
						<a href="catalogo-nuevos.php" class="s-salir">Salir</a>
					</div>
				</div>
			</div>
		<?php
		}
		?>
			

		</article>
	</section>
	<footer style="width:1349px;height:238px;background-image: url(logos/banner3.jpg);">
		<?php 
			include "pie.php";
		 ?>
	</footer>
</body>
</html>