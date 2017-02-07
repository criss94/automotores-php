function eliminar(){
	var mensaje = "Esta seguro que quiere eliminar el vehículo?" ;
	if (confirm(mensaje)) {
		return true;
	}
	window.location="config.php";
	return false;
}