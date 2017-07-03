<% 
Function AdmFiles(strSource, strAction, strFileNam)	

	Set objFso = Server.CreateObject("Scripting.FileSystemObject") 
	Set objFolder = objFso.GetFolder(strSource)
	Set objFiles = objFolder.Files
	
	Select Case strAction
	
		Case "list"
			
			Dim strList
			
			For Each i in objFiles
				
				strList = strList & Ucase(i.Name) & "<br>"
				
			Next 
			
			AdmFiles = strList
			
		Case "find"
			
			Dim blnFind
			blnFind = False
			
			For Each i in objFiles
				
				if Ucase(Trim(i.Name)) = Ucase(Trim(strFileNam)) Then blnFind = True
				
			Next 
			
			AdmFiles = blnFind
			
	End Select
	
End Function
%>