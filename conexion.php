<?php 
	const SERVER="localhost";
	const USER="root";
	const CLAVE="criss";
	const DB="autos";
	$link=mysqli_connect(SERVER,USER,CLAVE,DB);
	mysqli_set_charset($link,"utf8");
 ?>
