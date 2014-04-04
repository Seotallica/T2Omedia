			function compruebaEmail(email) {
            if (email == "")
			{
				document.getElementById("emailUsuario").focus();
                return false;
            }
			else 
			{
               var RegExPattern = /^(([^<;>;()[\]\\.,;:\s@\""]+(\.[^<;>;()[\]\\.,;:\s@\""]+)*)|(\"".+\""))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				if(email.match(RegExPattern))
				{
					return true;
				}
				else
				{
					document.getElementById("emailUsuario").focus();
					return false;
				}
            }
        }
		
		function compruebaForm(obj_form)
		{
			if(compruebaEmail(document.getElementById("emailUsuario").value) == true)
			{
				//alert("bien");
				document.getElementById("emailUsuario").style.backgroundColor ="white";
				return true;
			}
			else
			{
				alert("Por favor indique un email correcto.");
				document.getElementById("emailUsuario").style.backgroundColor ="#FA8072";
				return false;
			}
		}