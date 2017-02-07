$(document).ready(function(){


	$("#user-nombre").keyup(function(){
		var name = $("#user-nombre").val();
		if (name != "") {
			$("#error-nombre").text("");
		}else{
			$("#error-nombre").text("Este campo es requerido").css("color", "red");
		}
	});

	$("#user-apellido").keyup(function(){
		var apellido = $("#user-apellido").val();
		if (apellido != "") {
			$("#error-apellido").text("");
		}else{
			$("#error-apellido").text("Este campo es requerido").css("color", "red");
		}
	});


	$("#user-email2").keyup(function(){
		var user_email = $("#user-email").val();
		var user_email2 = $("#user-email2").val();
		if (user_email == user_email2) {
			$("#error-email").text("");
		}else{
			$("#error-email").text("Los mails no coninciden").css("color", "red");
		}
		if (user_email2 == "") {
			$("#error-email").text("Este campo es requerido").css("color", "red");
		}
	});


	$("#pass2").keyup(function(){
		var pass1 = $("#pass1").val();
		var pass2 = $("#pass2").val();

		if (pass1 == pass2) {
			$("#error-password").text("Las contraseñas son iguales").css("color", "green");
		}else{
			$("#error-password").text("Las contraseñas no coindicen!").css("color", "red");
		}


		if (pass2 == "") {
			$("#error-password").text("Este campo es requerido").css("color", "red");
		}
		
	});
});
