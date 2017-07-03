<%
Function ValFormat(strVar,varLong)
	
	Dim blnOk 
	Dim strCarPer 
	Dim intCur 
	
	blnOk = True
	strCarPer = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz_0123456789."
    		
	if Len(strVar) = 0 Then
		blnOk = False
	Else
		if Len(strVar) > varLong Then
			blnOk = False			
		Else
			For itmCur = 1 To Len(strVar)
    			strCur = Mid(strVar, itmCur, 1)
    			if Not Instr(1, strCarPer, strCur) > 0 Then
    				blnOk = False
    			End if
    		Next
		End if
	End if
	
	ValFormat = blnOk
	    
End Function
%>