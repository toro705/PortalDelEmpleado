<%
Function SMail (strMailDest, strAsunto, strCuerpo, strMailOri, strSmtpServer, strSmtpPort, strSmtpPass, strFileAttach)

	'-------------------------CDONTS-------------------------'
	Set oMail = Server.CreateObject("CDO.Message")
    Set iConf = Server.CreateObject("CDO.Configuration")
    Set Flds = iConf.Fields
	
    iConf.Fields.Item("http://schemas.microsoft.com/cdo/configuration/sendusing") = 2
    iConf.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpserver") = strSmtpServer
	iConf.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpauthenticate") = 1
	iConf.Fields.Item("http://schemas.microsoft.com/cdo/configuration/sendusername") = strMailOri
	iConf.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpconnectiontimeout") = 120
	iConf.Fields.Item("http://schemas.microsoft.com/cdo/configuration/sendpassword") = strSmtpPass       
		
	if Trim(strSmtpPort) <> "" Then 
		iConf.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = strSmtpPort
	Else
		iConf.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = 25
	End if
	    
	' PICKUP DIRECTORY

	'iConf.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpserverpickupdirectory") = "C:\inetpub\wwwroot\pubfac\smtpmail"
	
	      
    iConf.Fields.Update
    ' Se asignan las propiedades de configuración al objeto
    Set oMail.Configuration = iConf
    oMail.To = strMailDest
    oMail.From = strMailOri
    oMail.Subject = strAsunto
    oMail.HTMLBody = strCuerpo
	if isArray(strFileAttach) = True Then
		For each x in strFileAttach
			oMail.Addattachment x
		Next			
	Else
		if strFileAttach <> "" Then oMail.Addattachment strFileAttach 
	End if
	
	oMail.Send
    
	If Err.number <> 0 Then
		Dim fso, f 
		Set fso = CreateObject("Scripting.FileSystemObject")
		Set f = fso.OpenTextFile(Server.MapPath("/log/file.txt"), True)
		f.Write(Err.number) 
		f.Close()
		Set f = Nothing()
		Set fso = Nothing()
		Response.Write("ERROR:" & Err.number)
		Err.clear
	End if
	
	Set iConf = Nothing
    Set Flds = Nothing
	
End Function
%>
