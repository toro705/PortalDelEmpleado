// JavaScript Document
function Validar()
{
	var pass = true;
  	var error = "";
	var mail_ok = true;
	if(document.envio.txtEnvioFecha.value.length == 0)
		{
			error += "- Debe completar el campo Fecha\n";
       		pass = false;	
		}
	if(document.envio.txtEnvioDsc.value.length == 0)
		{
			error += "- Debe completar el campo Titulo\n";
       		pass = false;	
		}
	if(document.envio.cmbEnvioMod.value == "")
		{
			error += "- Debe completar el campo Modalidad\n";
       		pass = false;	
		}	
	if(!pass)
    {
   		alert("Se encontraron los siguientes errores:\n\n"+error+"\n");
    }
  else
    {
        document.envio.submit();
    }
}
