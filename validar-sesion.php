<?php 

	session_start();
	if (!isset($_SESSION["login"])) {
		header("location:form-registrarse.php");
	}

 ?>