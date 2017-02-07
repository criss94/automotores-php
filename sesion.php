<?php 
	$usu_email=$_POST["usu_email"];
	$usu_clave=$_POST["usu_clave"];
	require "conexion.php";
	$sql="SELECT usu_id,usu_nombre,usu_apellido,usu_email,usu_clave 
		  FROM usuarios 
		  WHERE usu_email='".$usu_email."' AND usu_clave='".$usu_clave."'";
	$resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
	$cantidad=mysqli_num_rows($resultado);
	$fila=mysqli_fetch_assoc($resultado);

	if ($cantidad == 0) {
		header("location:form-registrarse.php");
	}else{
		session_start();
		$_SESSION["login"]=1;
		$_SESSION["user"]=$fila["usu_nombre"];
		$_SESSION["lastname"]=$fila["usu_apellido"];
		$_SESSION["usu_id"]=$fila["usu_id"];
		header("location:publicar.php");
	}
?>