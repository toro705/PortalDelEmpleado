function SelectAll(varFormObject, varVal)
	{
	var i;	
	for(i=0;i<varFormObject.length;i++)
        {
            if(varFormObject.elements[i].type == "checkbox")
				{
					varFormObject.elements[i].checked = varVal;
				}
		}
}