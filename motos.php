<?php 

    $hasWhere = false;
    $where = "";

	if(isset($_GET['cat'])){
		if(!$hasWhere){
			$where = " WHERE cat_id=".$_GET['cat'];
			$hasWhere = true;
		}else{
			$where .= " AND cat_id=".$_GET['cat'];	
		}
	}

	if(isset($_GET['anio'])){
		if(!$hasWhere){
			$where = " WHERE anio=".$_GET['anio'];
			$hasWhere = true;
		}else{
			$where .= " AND anio=".$_GET['anio'];	
		}
	}

	if(isset($_GET['cn'])){
		if(!$hasWhere){
			$where = " WHERE condicion='".$_GET['cn']."'";
			$hasWhere = true;
		}else{
			$where .= " AND condicion='".$_GET['cn']."'";
		}
	}

	//muestreo de las motos nuevas
	$cat_id=$_GET["cat"];
	require "conexion.php";
	
	$sql="SELECT id_motos,modelo,anio,km,cilindrada,precio,cat_id,foto,condicion
		  FROM motos ".$where." ORDER BY precio DESC";

	$resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
	$cantidad=mysqli_num_rows($resultado);

	$sql="SELECT cat_id,cat_nombre FROM cat_motos WHERE cat_id=".$cat_id;
	$resultado1=mysqli_query($link,$sql) or die(mysqli_error($link));
	$fila1=mysqli_fetch_assoc($resultado1);

	mysqli_close($link);
 ?>
<?php 
	include "encabezado.php";
 ?>
 <script src="js/jquery-2.2.3.js"></script>
 <script src="js/sesion_modal.js"></script>
 <script src="js/desplegar-marca.js"></script>
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
			<div id="panel-nuevos" style="background-image: url(logos/body.jpg);background-repeat: no-repeat;">
				<div class="main-atajo">
				
					<a href="index.php">Inicio » </a><a href="catalogo-motos.php">Catálogo » </a><span><?php echo $fila1["cat_nombre"]; ?></span>
				
				</div>
				<div class="contador-motos">
					<p><b><?php echo $cantidad; ?> </b>Motos encontrados</p>
				</div>			
			
			<div id="contenedor-items">
				<div id="items-marca">
					<h3 onclick="mostrar_ocultar();">Marca » </h3>
					<div id="desplegar">
						<span><a href="?cat=18">Honda</a></span>
						<span><a href="?cat=41">Yamaha</a></span>
						<span><a href="?cat=1">Appia</a></span>
						<span><a href="?cat=4">Bajaj</a></span>
						<span><a href="?cat=21">Kawasaki</a></span>
						<span><a href="?cat=26">Mondial</a></span>
						<span><a href="?cat=37">Suzuki</a></span>
						<span><a href="?cat=27">Motomel</a></span>
						<span><a href="?cat=3">BMW</a></span>
						<span><a href="?cat=10">Corven</a></span>
					</div>

						<span><a href="javascript:desplegar_modal('visible');" class="ultima-palabra">Más opciones </a></span>

					<div id="bgventana">
						<div id="content-ventana">
							<h3 class="ventana-marca">MARCA</h3>
							<a href="javascript:desplegar_modal('hidden');"><i class="fa fa-times-circle close" aria-hidden="true" title="Cerrar"></i></a>
						<div id="ventana">
							<span><a href="?cat=2">Aprilia</a></span>
							<span><a href="?cat=5">Beta</a></span>
							<span><a href="?cat=6">Bloower</a></span>
							<span><a href="?cat=7">Bombardier</a></span>
							<span><a href="?cat=8">Brava</a></span>
							<span><a href="?cat=9">Can Am</a></span>
							<span><a href="?cat=11">Dayama</a></span>
							<span><a href="?cat=12">Daytona</a></span>
							<span><a href="?cat=13">Ducati</a></span>
							<span><a href="?cat=14">Gilera</a></span>
							<span><a href="?cat=15">Goes</a></span>
							<span><a href="?cat=16">Gerrero</a></span>
							<span><a href="?cat=17">Harley Davidson</a></span>
							<span><a href="?cat=19">Jawa</a></span>
							<span><a href="?cat=20">KTM</a></span>
							<span><a href="?cat=22">Keeway</a></span>
							<span><a href="?cat=23">Keller</a></span>
							<span><a href="?cat=24">Kimco</a></span>
							<span><a href="?cat=25">LuckyLion</a></span>
							<span><a href="?cat=28">NSU</a></span>
							<span><a href="?cat=29">Piaggio</a></span>
							<span><a href="?cat=30">Piaggio Vespa</a></span>
							<span><a href="?cat=31">Polaris</a></span>
							<span><a href="?cat=32">Royal Enfield</a></span>
							<span><a href="?cat=33">Rumi</a></span>
							<span><a href="?cat=42">Zanella</a></span>
							<span><a href="?cat=34">Sea Horse</a></span>
							<span><a href="?cat=35">Siambretta</a></span>
							<span><a href="?cat=36">Sumo</a></span>
							<span><a href="?cat=38">Tibo</a></span>
							<span><a href="?cat=39">Triumph</a></span>
							<span><a href="?cat=40">Vespa</a></span>
							<span><a href="?cat=43" id="ultima-fila">Otra Marca</a></span>
						</div>
						</div>
					</div>
				</div>
					<div id="items-marca">
						<h3 onclick="condicion();">Condición »</h3>
						<div id="desplegar-condicion">

			<?php 
				if(strpos($_SERVER["REQUEST_URI"], "?")){
					echo "<span><a href='".$_SERVER["REQUEST_URI"]."&cn=nuevo'>Nuevos</a></span>";
					echo "<span><a href='".$_SERVER["REQUEST_URI"]."&cn=usado'>Usados</a></span>";
				}else{
					echo "<span><a href='".$_SERVER["REQUEST_URI"]."?cn=nuevo'>Nuevos</a></span>";
					echo "<span><a href='".$_SERVER["REQUEST_URI"]."?cn=usado'>Usados</a></span>";
				}

			?>
						</div>
					</div>
				
			</div>

				<div id="posicion-motos">
			    <div class="body-muestreo-motos">
				<?php 
				while ($fila=mysqli_fetch_assoc($resultado)) {
				 ?>
				

				 <a href="ver-motos.php?id_motos=<?php echo $fila["id_motos"]; ?>&cat_id=<?php echo $fila["cat_id"]; ?>">

					<div class="motos-view">
						<img src="imgMotos/<?php echo $fila['foto']; ?>" alt="">
						<h3><?php echo $fila1["cat_nombre"]," ",$fila["modelo"]; ?></h3>
						<b>$ <?php echo number_format($fila["precio"],3); ?></b><p><?php echo $fila["anio"]," | ",$fila["km"]," km | ",$fila["cilindrada"]; ?></p>
					</div>
				</a>
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
</html>