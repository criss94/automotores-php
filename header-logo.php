			<a href="index.php"><img src="logos/logo.png" alt=""></a>
			<h2>CARS</h2>
			<h4>acelerá hacia tu próximo auto</h4>

			 <?php 
			 if (!isset($_SESSION["login"])) {
			  ?>

			 <a href="javascript:desplegar_sesion('visible')"><i class="fa fa-user"></i></a>
			 <span><a href="javascript:desplegar_sesion('visible')">Iniciar sesión</a></span>
			 <a href="javascript:desplegar_sesion('visible')"><i class="fa fa-cloud-upload"> Publicá gratis</i></a>
			 <?php
			}else{
			?>
			 <span><a href="eliminar-sesion.php">Cerrar sesión</a></span>
			 <a href="publicar.php"><i class="fa fa-cloud-upload"> Publicá gratis</i></a>
			 <?php
				}
			 ?>