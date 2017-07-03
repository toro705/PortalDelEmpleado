<!--#include file="sObjConnection.asp" -->
<!--#include file="fStringDate.asp" -->
<!--#include file="fMailSender.asp" -->
<!--#include file="sLogUser.asp" -->
<% 
Sub MailAv(blnShow, intIdEmp, strEmp, strHtmlBody, strSmtpUser, strSmtpServer, strSmtpPort, strSmtpPass, arrCliPub)
	
	' ENVIO DE MAIL CON DATOS LOGUEOS A USUARIOS CON COMPROBANTES SIN VISAR
	
	Server.ScriptTimeout = 1000
	
	Dim rsUsrList
	Dim strQryList
	Dim strError
	Dim strRes
	Dim intCntUsr
	Dim strMailCli
	Dim strRazSoc
	Dim strUsr
	Dim strUsrPass
	Dim intCntUsrSN
	Dim intCntUsrN
	Dim strMsg
	Dim strSubject
	Dim strResSend
	Dim strResNSend
	Dim intIdCli
	
	Response.Buffer = True
	
	if isArray(arrCliPub) = True Then
	
		Dim strQryFil
		strQryFil = " AND Cliente.id_cliente IN (" & arrCliPub(0)
		
		For x = LBound(arrCliPub) + 1 to UBound(arrCliPub)
			strQryFil = strQryFil & ", " & arrCliPub(x)
		Next                 
		
		strQryFil = strQryFil & ")"
		
	End if
	
	objConnection()

	strQryList = "SELECT Cliente.id_cliente, Cliente.raz_soc, Cliente.mail, Usuario.userdescrip, Usuario.userpass "
	strQryList = strQryList & " FROM Cliente INNER JOIN Usuario ON Cliente.id_cliente = Usuario.id_cliente "
	strQryList = strQryList & " WHERE Cliente.id_empresa = " & intIdEmp  
	strQryList = strQryList & " AND Cliente.id_cliente IN("
	strQryList = strQryList & " SELECT id_cliente FROM Comp_vta WHERE visada = 0 AND id_empresa = " & intIdEmp 
	strQryList = strQryList & " GROUP BY id_cliente)"
	if isArray(arrCliPub) = True Then strQryList = strQryList & strQryFil
	
	Set rsUsrList = Server.Createobject("adodb.recordset")
	rsUsrList.Open(strQryList),objConn
	
	if rsUsrList.eof Then
		
		if blnShow = True Then
			
			Session("strMsgDesc") = "<b>Atencion:</b><br><br>No existen Comprobantes pendientes de "
			Session("strMsgDesc") = Session("strMsgDesc") & " Visado o Clientes con email registrado"
			
			Response.Clear()
			Response.Redirect("showmsg.asp?type=1")
			Response.End()
		
		End if
		
	Else
		
		intCntUsrSN = 0
		intCntUsrN = 0
		
		Do while Not rsUsrList.eof
			
			strMailCli = Trim(rsUsrList("mail"))
			strRazSoc = Trim(rsUsrList("raz_soc"))
			strUsr = Trim(rsUsrList("userdescrip"))
			strUsrPass = Trim(rsUsrList("userpass"))
			
			if strMailCli <> "" Then
				
				strSubject = "Sistema de Publicacion Web - Datos acceso"
				
				' Agregado Motoflash - Putear a Cris
				if Cstr(intIdEmp) = "9" Then
				
					strMsg = "La empresa <strong>" & strEmp & "</strong> invita a su cliente, "
					strMsg = strMsg & "<strong>" & UCase(strRazSoc) & "</strong> a visualizar los comprobantes en forma "
					strMsg = strMsg & "online accediendo a traves del siquiente link: <br><br>"
					strMsg = strMsg & "<a href='http://www.mensajeriamotoflash.com.ar/' "
					strMsg = strMsg & "target='_blank' alt='Sistema de Publicación Web'>"
					strMsg = strMsg & "http://www.mensajeriamotoflash.com.ar/</a><br><br>"
					strMsg = strMsg & "<strong>DATOS USUARIO</strong>"
					strMsg = strMsg & "<ul><li>Empresa: <strong>" & strEmp & "</strong></li>"
					strMsg = strMsg & "<li>Usuario: <strong>" & strUsr & "</strong></li>"
					strMsg = strMsg & "<li>Password: <strong>" & strUsrPass & "</strong></li></ul>"
							
				else
					
					strMsg = "La empresa <strong>" & strEmp & "</strong> invita a su cliente, "
					strMsg = strMsg & "<strong>" & UCase(strRazSoc) & "</strong> a visualizar los comprobantes en forma "
					strMsg = strMsg & "online accediendo a traves del siquiente link: <br><br>"
					strMsg = strMsg & "<a href='http://www.aipem.com/app/pubfac/default.asp?emp="&strEmp&"&usr="&strUsr&"' "
					strMsg = strMsg & "target='_blank' alt='Sistema de Publicación Web'>"
					strMsg = strMsg & "http://www.aipem.com/app/pubfac/default.asp</a><br><br>"
					strMsg = strMsg & "<strong>DATOS USUARIO</strong>"
					strMsg = strMsg & "<ul><li>Empresa: <strong>" & strEmp & "</strong></li>"
					strMsg = strMsg & "<li>Usuario: <strong>" & strUsr & "</strong></li>"
					strMsg = strMsg & "<li>Password: <strong>" & strUsrPass & "</strong></li></ul>"
					
				end if
				
				strBody = strHtmlBody
				strBody = Replace(strBody,"[detalle]",strMsg)
				strBody = Replace(strBody,"[empresa]",strEmp)
				
				Call SMail(strMailCli, strSubject, strBody, strSmtpUser, strSmtpServer, strSmtpPort, strSmtpPass,"")			
				
				intCntUsrN = intCntUsrN + 1		
				strResSend = strResSend & " - " & strRazSoc & " - " & strMailCli & "<br>"
				
			Else
			
				intCntUsrSN = intCntUsrSN + 1
				strResNSend = strResNSend & " - " & strRazSoc & "<br>"	
			
			End if
			
		rsUsrList.MoveNext
		Loop
		
	End if
	
	rsUsrList.Close
	Set rsUsrList = Nothing
		
	if blnShow = True Then
	
		strRes = "<strong>Resumen Envio de Mail</strong><br><br>"
		strRes = strRes & "<strong>-Clientes con Comprobantes Pendientes: </strong>" & intCntUsrN + intCntUsrSN & "<br>"
		strRes = strRes & "<br><strong>-Clientes notificados via mail: </strong>" & intCntUsrN & "<br>"
		if intCntUsrN <> 0 Then strRes = strRes & strResSend
		strRes = strRes & "<br><strong>-Clientes sin mail ingresado: </strong>" & intCntUsrSN & "<br>"
		if intCntUsrSN <> 0 Then strRes = strRes & strResNSend
		
		Session("strMsgDesc") = strRes
		
		Response.Clear()
		Response.Redirect("showmsg.asp?type=0")
		Response.End()
	
	End if
	
	objConn.Close
	Set objConn = Nothing
	
End Sub
%>