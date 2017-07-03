// JavaScript Document
function Validar()
{
	var pass = true;
  var error = "";
	if( (document.filter.txtPtoVta.value.length != 0) || (document.filter.txtNro.value.lenght != 0) )
		{
			if (isNaN(document.filter.txtPtoVta.value)) 
        { 
         error +="- El campo Punto de venta solo permite el ingreso de valores numericos\n";
         pass = false;
        }		
			if (isNaN(document.filter.txtNro.value)) 
        { 
         error +="- El campo Numero de Comprobante solo permite el ingreso de valores numericos\n";
         pass = false;
        }			
		}
	if(!pass)
    {
    		alert("Se encontraron los siguientes errores:\n\n"+error+"\n");
    }
  else
    {
        document.filter.submit();
    }
}