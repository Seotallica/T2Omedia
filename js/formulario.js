		function compruebaEmail(email) {
            if (email == "")
                return false;
            else {
               var RegExPattern = /^(([^<;>;()[\]\\.,;:\s@\""]+(\.[^<;>;()[\]\\.,;:\s@\""]+)*)|(\"".+\""))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(email.match(RegExPattern))
				return true;
			else
				return false;
            }
        }
		
		function compruebaProducto(producto)
		{
			if(producto == "")
				return false;
			else
				return true;
		}
		
		function compruebaNombre(nombre)
		{
			if(nombre == "")
				return false;
			else
				return true;
		}
		
		
		function validaLongTelf(telefono) {
            if (telefono.length == 9) {
                if (telefono.substring(0, 1) == "6" || telefono.substring(0, 1) == "9") {
                    if (IsNumeric(telefono)) {
                        return  true;
                    }
                    else {
                        return  false;
                    }
                }
                else {
                    return  false;
                }
            }
            else {
                return  false;
            }
        }
       
        function IsNumeric(sText) {
            var ValidChars = "0123456789";
            var IsNumber = true;
            var Char;


            for (i = 0; i < sText.length && IsNumber == true; i++) {
                Char = sText.charAt(i);
                if (ValidChars.indexOf(Char) == -1) {
                    IsNumber = false;
                }
            }
            return IsNumber;
        }
		
		function compruebaForm(obj_form)
		{
			var mensaje="";
			if(compruebaNombre(document.getElementById("nombre").value) == true)
			{
				document.getElementById("nombre").style.backgroundColor ="white";	
			}
			else
			{
				if(mensaje == "")
				{
					document.getElementById("nombre").focus();
				}
				mensaje = mensaje + "\n-Nombre";
				document.getElementById("nombre").style.backgroundColor = "#FA8072";
				
			}		
			
			if(compruebaEmail(document.getElementById("emailUsuario").value) == true)
			{
				document.getElementById("emailUsuario").style.backgroundColor ="white";	
			}
			else
			{
				if(mensaje == "")
				{
					document.getElementById("emailUsuario").focus();
				}
				mensaje=mensaje + "\n-Email";
				document.getElementById("emailUsuario").style.backgroundColor ="#FA8072";

			}
			
			if(validaLongTelf(document.getElementById("telefono").value) == true)
			{
				document.getElementById("telefono").style.backgroundColor ="white";	
			}
			else
			{
				if(mensaje == "")
				{
					document.getElementById("telefono").focus();
				}
				mensaje = mensaje + "\n-Telefono";
				document.getElementById("telefono").style.backgroundColor = "#FA8072";

			}
			
			if(compruebaProducto(document.getElementById("producto").value) == true)
			{
				document.getElementById("producto").style.backgroundColor ="white";				
			}
			else
			{
				if(mensaje == "")
				{
					document.getElementById("producto").focus();
				}
				mensaje = mensaje + "\n-Producto";
				//document.getElementById("producto").style.backgroundColor = "#FA8072";
				
			}
			
			if(mensaje == "")
			{
				//alert("bien");
				return true;
			}
			else
			{
				alert("Por favor cumplimente correctamente los siguientes campos:" + mensaje);
				return false;
			}
		}