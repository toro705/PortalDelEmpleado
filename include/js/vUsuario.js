// JavaScript Document
function Validar()
{
	var pass = true;
  	var error = "";
	if(document.login.txtEmpresa.value.length == 0)
		{
			 error += "- Debe completar el campo Empresa\n";
       		 pass = false;	
		}
	else	
		{
	 		if(!CaracEsp(document.login.txtEmpresa))
			 {
			 	error += "- El formato del campo Empresa es incorrecto\n";
       		 	pass = false;
			 }
		}
	if(document.login.txtUser.value.length == 0)
		{
			 error += "- Debe completar el campo Usuario\n";
       		  pass = false;	
		}
	else	
		{
	 		if(!CaracEsp(document.login.txtUser))
			 {
			 	error += "- El formato del campo Usuario es incorrecto\n";
       		 	pass = false;
			 }
		}
	if(document.login.txtPass.value.length == 0)
		{
			error += "- Debe completar el campo Password\n";
       		pass = false;	
		}
	else	
		{
	 		if(!CaracEsp(document.login.txtPass))
			 {
			 	error += "- El formato del campo Password es incorrecto\n";
       		 	pass = false;
			 }
		}
	if(!pass)
    {
    		alert("Se encontraron los siguientes errores:\n\n"+error+"\n");
    }
  else
    {
        document.login.submit();
    }
}

function CaracEsp(varFormObject)
{
	var ok = true;
	var i = 0
	var iChars = '!@#$%^&*()+=-[] \ \ \';,./{}| \ ":<>?'; 
    for (i=0;i<varFormObject.value.length;i++) 
		{
            if (iChars.indexOf(varFormObject.value.charAt(i)) != -1)
				{ 
                  ok = false; 
				  break;
				}		  
		}
	return ok;
}
