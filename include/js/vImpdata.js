// JavaScript Document
function Validar()
{
	var pass = true;
	var error = "";
	if(document.frmFile.attach.value.length == 0)
		{
		 	error+="- Debe Seleccionar un archivo antes de intentar subirlo al servidor\n";
     	document.frmFile.attach.focus();
     	pass = false;
		} 
	if(!pass)
    {
    	alert("Se encontraron los siguientes errores:\n\n"+error);
    }   
  else
    {
      document.frmFile.submit();
    }	
}


function DisCmb()
{
	if(document.frmImp.cmbImp.value == 0)
	{
		document.frmImp.txtDesc.value = "";
		document.frmImp.txtDesc.focus();
		document.frmImp.txtDesc.disabled = false;
	}
	else
	{
		document.frmImp.txtDesc.value = document.frmImp.cmbImp.options[document.frmImp.cmbImp.selectedIndex].text;	
		document.frmImp.txtDesc.disabled = true;		
	}	
}