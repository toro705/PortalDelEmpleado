function CompChar(varFormObject, varChar, varIntLong)
	{
		if (varFormObject.value != "") 
		{
			while (varFormObject.value.length < varIntLong)
				{
					varFormObject.value = varChar + varFormObject.value;	
				}
		}
}