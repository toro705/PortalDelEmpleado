<%
Function StringDate(strFecha,strTipo)

	Select Case strTipo
       
  	Case "dia"
          
    	intDia = Right(strFecha,2)
      	StringDate = intDia
        
	Case "mes"
            
      	intMes = Mid(strFecha,5,2)
      	StringDate = intMes
    
	Case "ano" 
        
      	intAno = Left(strFecha,4)
     	StringDate = intAno
            
    Case "fecha"
			
      if strFecha <> "" Then
		intAno = Left(strFecha,4)
      	intDia = Right(strFecha,2)
      	intMes = Mid(strFecha,5,2)
      	StringDate = intDia & "/" & intMes & "/" & intAno    
	  Else
		StringDate = ""  
	  End if
		
 	Case "fechaPunto"

      intAno = Mid(strFecha,3,2)
      intDia = Right(strFecha,2)
      intMes = Mid(strFecha,5,2)
      StringDate = intDia & "." & intMes & "." & intAno    

    Case "fechaCorta"
			
		intAno = Left(strFecha,4)
		intMes = Mid(strFecha,5,2)
		StringDate = intMes & "/" & intAno
	
   	Case "fechaInv"
        
    	intDia = Left(strFecha,2)
     	intMes = Mid(strFecha,4,2)
      	intAno = Right(strFecha,4)
      	StringDate =  intAno & intMes & intDia  
    	
	Case "DiaMes"
			
		intDia = Left(strFecha,2)
		intMes = Mid(strFecha,4,2)
		StringDate = intDia & "-" & intMes 
			
	End Select
    
End Function
%>