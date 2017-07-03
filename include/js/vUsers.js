// JavaScript Document
function Delete()
{
	if (document.users.cmbUsers.value != 0)
		{
			if (confirm("¿Confirma la eliminacion del registro " + document.users.cmbUsers.options[document.users.cmbUsers.selectedIndex].text + "?"))
				{
					document.location = "users.asp?id_user=" + document.users.cmbUsers.options[document.users.cmbUsers.selectedIndex].value +"&eliminar=eliminar";
				}
		}
	else
		{
		alert("Atencion:\n\n - Debe seleccionar un usuario del listado para poder eliminarlo.\n")
		}
}

function DisAdm()
{
		if (document.users.cmbAdmin.value == "1")
		{
			document.users.cmbCliente.disabled = true;
			document.users.cmbCliente.value = 0;
		}
		else
		{
			document.users.cmbCliente.disabled = false;
		}
}

function Validar()
{
	var pass = true;
  var error = "";
	if(document.users.txtUser.value.length == 0)
		{
			 error += "- Debe completar el campo Usuario\n";
       pass = false;	
		}
	if((document.users.cmbAdmin.value == "0") && (document.users.cmbCliente.value == 0))
		{
			 error += "- Debe completar el campo Cliente\n";
       pass = false;	
		}
	if(!pass)
    {
    		alert("Se encontraron los siguientes errores:\n\n"+error+"\n");
    }
  else
    {
        document.users.submit();
    }
}