// JavaScript Document
function Validar()
{
	var pass = true;
  	var error = "";
	var mail_ok = true;
	if(document.prefer.txtRazSoc.value.length == 0)
		{
			error += "- Debe completar el campo Razon Social\n";
       		pass = false;	
		}
	if(document.prefer.txtMail.value.length == 0)
		{
			error += "- Debe completar el campo Mail\n";
       		pass = false;	
		}
	else
		{
     	 	mail_ok = mailCheck(document.prefer.txtMail);
			if(!mail_ok)
       			{
           			error +="- El mail ingresado no es válido\n";
         	 		pass = false;   
          		}			
		}	
/*	if(document.prefer.txtCuit.value.length == 0)
		{
			error += "- Debe completar el campo Nro de Documento\n";
       		pass = false;	
		}
	else
		{
			if (isNaN(document.prefer.txtCuit.value)) 
				{ 
					 error +="- El campo Nro de Documento solo permite el ingreso de valores numéricos\n";
					 pass = false;
				}			
		}*/
	if(document.prefer.txtTel.value.length == 0)
		{
			error += "- Debe completar el campo Telefono\n";
       		pass = false;	
		}
	if(document.prefer.txtDom.value.length == 0)
		{
			error += "- Debe completar el campo Domicilio\n";
       		pass = false;	
		}
	if(document.prefer.txtWeb.value.length == 0)
		{
			error += "- Debe completar el campo Web Site\n";
       		pass = false;	
		}
	else
		{
			if(!validaURLs(document.prefer.txtWeb.value))
				{ 
					error +="- El Web Site ingresado no es valido\n";
					pass = false;
				}
		}
	if(document.prefer.txtDescrip.value.length == 0)
		{
			error += "- Debe completar el campo Descripcion\n";
       		pass = false;	
		}
	else
		{
			if (document.prefer.txtDescrip.value.length > 200) 
			{ 
				error +="- El campo Descripcion no puede superar los 200 caracteres\n";
				pass = false;
			}	
		}
	if(!pass)
    {
   		alert("Se encontraron los siguientes errores:\n\n"+error+"\n");
    }
  else
    {
        document.prefer.submit();
    }
}

function mailCheck(varFormTextObject) 
{
	if(varFormTextObject.value.search(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/ig))
    	{
           return false;
        }
    return true;
}

function validaURLs(url) 
{ 
	var re=/^http:\/\/\w+(\.\w+)*\.\w{2,3}$/; 
	return re.test(url); 
}