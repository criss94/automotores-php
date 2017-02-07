            <script src="js/jquery-validation-min.js"></script>
            <script>
            	$(document).ready(function(){
            		$("#qwerty").validate();
            	});
            </script>
            <div class="content-sesion">
				<div class="area-sesion">
				<a href="javascript:desplegar_sesion('hidden');"><i class="fa fa-times-circle close" aria-hidden="true" title="Cerrar"></i></a>
					<h3>Ingresá</h3>
					<form action="sesion.php" method="POST" id="qwerty">
						<label for="email">
							Tú e-mail
								<input type="email" id="email" name="usu_email" placeholder="Ej: jorgefernandez@gmail.com" required>
						</label>
						<label for="password">
							Contraseña
								<input type="password" id="password" name="usu_clave" placeholder="Ingresa tu contraseña" required>
						</label>
						<div class="recuperar-contra">
							<a href="#">Recuperar contraseña</a>
						
						<label for="checkbox">
						No cerrar sesión
								<input type="checkbox" id="checkbox" name="noCerrarSesion" class="cerrarSesion" checked="checked"> 
						</label>
						</div>
							<input class="btn-login" type="submit" value="Ingresar">
						<div class="btn-facebook">
							

							<a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=260411274164001&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv2.0%2Fdialog%2Foauth%3Fredirect_uri%3Dhttp%253A%252F%252Fwww.demotores.com.ar%252Ffrontend%252Fauth%252Ffacebook%26display%3Dpopup%26state%3Dcadde5ae-26bc-4164-beca-726a66c4e8e4popup%26scope%3Demail%26response_type%3Dcode%26client_id%3D260411274164001%26ret%3Dlogin&cancel_url=http%3A%2F%2Fwww.demotores.com.ar%2Ffrontend%2Fauth%2Ffacebook%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Dcadde5ae-26bc-4164-beca-726a66c4e8e4popup%23_%3D_&display=popup&locale=es_ES"><i class="fa fa-facebook-square" aria-hidden="true"></i>Ingresá con Facebook</a>
						</div>
						<div class="btn-registrate">
						No tenés Cuenta?
							<a href="form-registrarse.php"> Registrate</a>
						</div>
					</form>
				</div>
			</div>
