// JavaScript Document
function Validar()
{
	var pass = true;
  	var error = "";
	var mail_ok = true;
	if(document.cliente.txtRazSoc.value.length == 0)
		{
			error += "- Debe completar el campo Razon Social\n";
       		pass = false;	
		}
	if(document.cliente.txtMail.value.length == 0)
		{
			error += "- Debe completar el campo Mail\n";
       		pass = false;	
		}
	else
		{
     	 	mail_ok = mailCheck(document.cliente.txtMail);
			if(!mail_ok)
       			{
           			error +="- El mail ingresado no es válido\n";
         	 		pass = false;   
          		}			
		}	
	if(document.cliente.cmbTipo.value == 0)
		{
			error += "- Debe completar el campo Tipo de Responsable\n";
       		pass = false;	
		}	
	if(document.cliente.cmbDoc.value == 0)
		{
			error += "- Debe completar el campo Tipo de Documento\n";
       		pass = false;	
		}	
	if(document.cliente.txtCuit.value.length == 0)
		{
			error += "- Debe completar el campo Nro de Documento\n";
       		pass = false;	
		}
	else
		{
			if (isNaN(document.cliente.txtCuit.value)) 
				{ 
					 error +="- El campo Nro de Documento solo permite el ingreso de valores numéricos\n";
					 pass = false;
				}			
		}
	if(!pass)
    {
   		alert("Se encontraron los siguientes errores:\n\n"+error+"\n");
    }
  else
    {
        document.cliente.submit();
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
