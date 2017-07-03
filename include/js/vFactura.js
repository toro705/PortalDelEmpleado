// JavaScript Document
function Validar()
{
	var pass = true;
  var error = "";
	if(document.fact.txtFecha.value.length == 0)
		{
			 error += "- Debe completar el campo Fecha\n";
       pass = false;	
		}
	if(document.fact.cmbCliente.value == 0)
		{
			error += "- Debe completar el campo Cliente\n";
			pass = false;		
		}
	if(document.fact.cmbTipo.value == 0)
		{
			error += "- Debe completar el campo Tipo de Comprobante\n";
			pass = false;		
		}		
	if(document.fact.txtFechaIni.value.length == 0)
		{
			error += "- Debe completar el campo Fecha de Inicio de Servicio\n";
      pass = false;			
		}
	if(document.fact.txtFechaFin.value.length == 0)
		{
			error += "- Debe completar el campo Fecha de Fin de Servicio\n";
      pass = false;			
		}
	if(document.fact.txtFechaVen.value.length == 0)
		{
			 error += "- Debe completar el campo Fecha de Vencimiento\n";
       pass = false;	
		}
	if((document.fact.txtPtoVta.value.length == 0) || (document.fact.txtNro.value.length == 0) )
		{
			 error += "- Debe completar el campo Numero de Comprobante\n";
       pass = false;		
		}
	if((document.fact.txtCae.value.length != 0) && (document.fact.txtCae.value.length < 14)) 
		{
			error += "- La longitud del campo C.A.E. no puede ser inferior a los 14 caracteres\n";
      pass = false;		
		}	
	if(document.fact.txtTotal.value.length == 0)
		{	
			error += "- Debe completar el campo Importe Total\n";
      pass = false;	
		}
	else
		{
			if(document.fact.txtTotal.value == "0")
			{
				error += "- El campo Importe Total debe tener un valor distinto de 0\n";
      	pass = false;		
			}
		}
	if(!pass)
    {
    		alert("Se encontraron los siguientes errores:\n\n"+error+"\n");
    }
  else
    {
        document.fact.submit();
    }
}