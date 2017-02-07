<?php 
	include "encabezado.php";
 ?>
 <script src="js/jquery-2.2.3.js"></script>
 <script src="js/jquery-validation-min.js"></script>
 <script src="js/jquery-validation-spanish.js"></script>
 <script src="js/sesion_modal.js"></script>
 <script>
 	$(document).ready(function(){
 		$("#form-add-new").validate();
 	});
 </script>
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
			<div id="content-newsletter" style="background-image: url(logos/body.jpg);background-repeat: no-repeat;">
				<h2>NEWSLETTER</h2>
				<form action="#" method="POST" id="form-add-new">
				<table class="newsletter">
					<tr>
					<td>
					<h3>CARS.com</h3>
					<p>
					Le rogamos que rellene el siguiente formulario con sus datos personales para suscribirse a la newsletter y estar informado de todas las novedades del mundo de Automobili Lamborghini y otros modelos.</p>
					<p>Los campos asignados con * son obligatorios</p>
					</td>
					</tr>
					<tr>
						<td>Nombre *</td>
						<td><input type="text" name="nombre" class="input-newsletter" required></td><br>
					</tr>
					<tr>
						<td>Apellidos *</td>
						<td><input type="text" name="apellidos" class="input-newsletter" required></td><br>
					</tr>
					<tr>
						<td>E-mail *</td>
						<td><input type="email" name="email" class="input-newsletter" required></td><br>
					</tr>
					<tr>
						<td>Pais </td>
						<td>
							<select name="pais" id="pais" class="input-newsletter">
							<option value="#">Elijia uno</option>
							<option value="argentina">Argentina</option>
							<option value="brasil">Brasil</option>
							<option value="colombia">Colombia</option>
							<option value="bolivia">Bolivia</option>
							<option value="paraguay">Paraguay</option>
							<option value="uruguay">Uruguay</option>
							<option value="chile">Chile</option>
							<option value="mexico">Mexico</option>
							<option value="peru">Peru</option>
						</select>
						</td>
					</tr>
					<tr>
						<td>
							<p>
								La Newsletter de CARS está disponible en inglés. Selecciona el idioma en el que deseas recibir la Newsletter.
							</p>
						</td>
					</tr>
					<tr>
						<td>Idioma NL </td>
						<td><select name="idioma" id="idioma" class="input-newsletter">
							<option value="español">Español</option>
							<option value="ingles">Ingles</option>
							<option value="portugues">Portugues</option>
							<option value="chino">Chino</option>
							<option value="italiano">Italiano</option>
							<option value="frances">Francés</option>
							<option value="aleman">Alemán</option>
							<option value="japonés">Japones</option>
						</select></td>
					</tr>
					<tr>
					<td>
					<p>
						Información relativa al tratamiento de los datos personales
					</p>
					</td>
					</tr>
					<tr>
						<td>
							<div class="scroll">
								Los datos personales en cuestión serán procesados ​​por el procesador de datos Automobili Lamborghini S.p.A., con sede en via Modena, 12, I-40019 Sant'Agata Bolognese (Bolonia), Italia (en adelante "Lamborghini") y el contacto con la cabeza Lab srl con sede en Via Natale Battaglia n. 12, 20127 Milán, con herramientas automatizadas y no en cumplimiento de lo dispuesto en el Decreto Legislativo No. 30. Junio ​​de 2003, n. 196 - Código en materia de protección de datos personales, el acuerdo explícito, por Lamborghini para las actividades de promoción y de información de mercado, noticias y para la realización de estudios de mercado y la satisfacción del cliente. <br>
								En cuanto a los propósitos antes mencionados, los datos personales facilitados no serán revelados por la parte de Lamborghini a terceros y no serán revelados. <br>
								El consentimiento para el tratamiento de los datos personales es necesaria con el fin de ser contactado por Lamborghini para fines de marketing: el hecho de no proporcionar datos para tales fines única consecuencia será la imposibilidad de recibir boletines de noticias, las comunicaciones comerciales, se le contacte para llevar a cabo la investigación de encuestas de satisfacción del cliente y del mercado y para recibir información sobre las actividades comerciales organizadas por Lamborghini. <br>
								La información personal proporcionada por la persona puede comprobarse con fines de actualización, con otros datos en posesión legal de Lamborghini suministrado por la misma pregunta en otras circunstancias.	<br>	
								En su calidad de interesado, usted tiene derechos en virtud del Art. 7 del Decreto Legislativo n º 30. Junio ​​de 2003, n. 196. En el ejercicio de estos derechos, así como una lista actualizada de los procesadores de datos designados por Lamborghini, puede llamar al número +39.051.9597282 o envíe un correo electrónico a privacy@lamborghini.com, o fax a + 39-051-6817972. <br>
								Art. 7 - Derecho de acceso a datos personales y otros derechos <br>
								1. Usted tiene derecho a obtener la confirmación de la existencia o no de datos personales que le conciernen, aunque todavía no estén registrados, y su comunicación en forma inteligible. <br>
								2. Usted tiene el derecho de obtener información: <br>
								a) el origen de los datos personales; <br>
								b) los fines y métodos de tratamiento; <br>
								c) la lógica aplicada en caso de tratamiento con la ayuda de instrumentos electrónicos; <br>
								d) la identidad del propietario, gerente y del representante designado en virtud del artículo 5, apartado 2; <br>
								e) los sujetos o categorías de personas a las que los datos pueden ser comunicados o que pueden conocerlos en calidad de representante designado en el Estado, directivos o agentes.
								3. Usted tiene el derecho a: <br>
								a) la actualización, rectificación o, cuando interesa, la integración de los datos; <br>
								b) la cancelación, transformación en forma anónima o el bloqueo de los datos tratados violando la ley, incluidos aquellos cuya conservación no es necesaria para los fines para los que fueron recogidos o sucesivamente tratados; <br>
								c) la certificación de que las operaciones en las letras a) yb) han sido notificados, también en lo que respecta a su contenido, a aquellos a quienes han sido comunicados o comuniquen los datos, excepto si este requisito que resulte imposible o suponga un manifiestamente desproporcionado con respecto al derecho protegido. <br>
								4. Usted tiene el derecho a oponerse, en todo o en parte:
								a) por motivos legítimos al tratamiento de datos personales, pertinentes a los efectos de la percepción; <br>
								b) al tratamiento de datos personales con fines de envío de material publicitario o de venta directa o para llevar a cabo estudios de mercado o de comunicación comercial.
							</div>
						</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="acuerdo" class="acuerdo-news" value=""></td>
						<td>
							<p class="news-parrafo">
								Una vez leída la información sobre el tratamiento de los datos personales, autorizo al tratamiento de mis datos personales para fines comerciales.*
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value=" SUSCRIBIRSE >>>" class="boton-news">
						</td>
					</tr>
				</table>
				</form>
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
</html>