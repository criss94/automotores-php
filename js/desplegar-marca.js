            function mostrar(){
				document.getElementById("desplegar").style.display="block";
			}
		    function ocultar(){
				document.getElementById("desplegar").style.display="none";
			}

			function mostrar_ocultar(){
				var desplegar=document.getElementById("desplegar");
				if (desplegar.style.display == "none") {
						mostrar();
				}else{
				    	ocultar();
					}
			}

				/* funcion para desplegar mas opciones de marca*/ 

            function desplegar_modal(_valor){
		    	document.getElementById("bgventana").style.visibility=_valor;
		    }


		    /* desplegar la condicion de las motos si nuevos o usados */

		    	function mostrar3(){
						document.getElementById("desplegar-condicion").style.display="block";
					}
					function ocultar3(){
						document.getElementById("desplegar-condicion").style.display="none";
					}
					function condicion(){
						var condicion=document.getElementById("desplegar-condicion");

						if (condicion.style.display == "block") {
							ocultar3();
						}else{
							mostrar3();
						}
					}