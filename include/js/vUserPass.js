// JavaScript Document
function Validar()
{
	if((document.userpass.txtPass.value.length == 0) || (document.userpass.txtPassC.value.length == 0))
		{
			 alert(" Atencion:\n\n  - Debe completar los campos\n\n");;
		}
	else
		{
		if (document.userpass.txtPass.value != document.userpass.txtPassC.value)
				{
					alert(" Atencion:\n\n - El password es diferente a la confirmacion del mismo\n\n");
				}		
		else
				{
					document.userpass.submit();
				}
		}        
}

