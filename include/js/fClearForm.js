function ClearForm(varFormObject)
	{
	var i;	
	for(i=0;i<varFormObject.length;i++)
        {
            if(varFormObject.elements[i].type == "radio")
				{
					if(varFormObject.elements[i].checked == true)
						{
							varFormObject.elements[i].checked = false;
						}	
				}
			if( (varFormObject.elements[i].type == "text") || ( varFormObject.elements[i].type == "textarea") )
				{
					varFormObject.elements[i].value = "";
				}
        	if(varFormObject.elements[i].type == "select-one")
				{
					varFormObject.elements[i].value = "";
				}			
		}
	
	}