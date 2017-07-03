<!--#include file="sObjConnection.asp" -->
<!--#include file="fStringDate.asp" -->
<!--#include file="fMailSender.asp" -->
<!--#include file="sLogUser.asp" -->
<% 
Sub MailAttach(blnShow, intIdEmp, strEmp, strHtmlBody, strSmtpUser, strSmtpServer, strSmtpPort, strSmtpPass, intIdImpo)
	
	' ENVIO DE MAIL CON LAS FACTURAS IMPORTADAS ATACHADAS
	
	Server.ScriptTimeout = 1000
	
	Dim strQryList
	Dim rsComp
	Dim strMailCli
	Dim strRazSoc
	Dim strFileAttach
	Dim intIdCli
	Dim intIdComp
	Dim arrComp()
	
	Response.Buffer = True
	
	objConnection()

	strQryList = "SELECT Cliente.raz_soc, Cliente.mail, Comp_vta.link, Comp_vta.pto_venta, Comp_vta.nro_comp, "
	strQryList = strQryList & " Cliente.Raz_soc, Comp_vta.fecha, Comp_vta.cae, Comp_vta.total, Comp_vta.id_cliente,"
	strQryList = strQryList & " Comp_vta.id_compvta, Comp_vta.fechaVen "
	strQryList = strQryList & " FROM Comp_vta INNER JOIN Cliente ON Comp_vta.id_cliente = Cliente.id_cliente "
	strQryList = strQryList & " WHERE Comp_vta.id_empresa = " & intIdEmp
	strQryList = strQryList & " AND Comp_vta.visada = 0 "  
	if Trim(intIdImpo) <> "" Then strQryList = strQryList & " AND Comp_vta.id_impo = " & intIdImpo
	strQryList = strQryList & " ORDER BY Comp_vta.id_cliente, Comp_vta.id_compvta " 
	
	Set rsComp = Server.Createobject("adodb.recordset")
	rsComp.Open(strQryList),objConn
	
	if rsComp.eof Then
		
		if blnShow = True Then
			
			Session("strMsgDesc") = "<b>Atencion:</b><br><br>No existen Comprobantes pendientes de Visado"
			
			Response.Clear()
			Response.Redirect("showmsg.asp?type=1")
			Response.End()
		
		End if
		
	Else
		
		intCntUsrSN = 0
		intCntUsrN = 0
		intArray = 0
		
		
		Do while Not rsComp.eof
			
			strMailCli = Trim(rsComp("mail"))
			strNroComp = Trim(rsComp("pto_venta")) & "-" & Trim(rsComp("nro_comp"))
			strRazSoc = Trim(rsComp("raz_soc"))
			strAttach = Server.MapPath(Replace(Trim(rsComp("link")),"/","\"))
			strImp = Trim(rsComp("total"))
			strFechaF = StringDate(Trim(rsComp("fecha")),"fecha")
			strFechaV = StringDate(Trim(rsComp("fechaVen")),"fecha")
			
			
			if strMailCli <> "" Then
				
				strSubject = "Sistema de Publicacion Web - Envio de Comprobante Nro: " & strNroComp
				
				strMsg = "La empresa <strong>" & strEmp & "</strong> envia a <strong>" & UCase(strRazSoc) 
				strMsg = strMsg & "</strong> el comprobante adjunto con los siguientes datos<br><br>"
				strMsg = strMsg & "<ul><li>Nro. De Comprobante: " & strNroComp & "</li>"
				strMsg = strMsg & "<li>Fecha de Comprobante: " & strFechaF & "</li>"
				strMsg = strMsg & "<li>Fecha de Vencimiento: " & strFechaV & "</li>"
				strMsg = strMsg & "<li>Importe: $ " & strImp & "</li></ul>"
				
				strBody = strHtmlBody
				strBody = Replace(strBody,"[detalle]",strMsg)
				strBody = Replace(strBody,"[empresa]",strEmp)
				
				Call SMail(strMailCli, strSubject, strBody, strSmtpUser, strSmtpServer, strSmtpPort, strSmtpPass, strAttach)			
			
				intCntUsrN = intCntUsrN + 1		
				strResSend = strResSend & " - " & strRazSoc & " - " & strMailCli & "<br>"
				
			Else
			
				intCntUsrSN = intCntUsrSN + 1
				strResNSend = strResNSend & " - " & strRazSoc & "<br>"	
			
			End if		
			
		rsComp.MoveNext
		Loop
		
	End if
	
	rsComp.Close
	Set rsComp = Nothing
		
	if blnShow = True Then
	
		strRes = "<strong>Resumen Envio de Comprobantes</strong><br><br>"
		strRes = strRes & "<strong>-Comprobantes Pendientes: </strong>" & intCntUsrN + intCntUsrSN & "<br>"
		strRes = strRes & "<br><strong>-Comprobantes enviados via mail: </strong>" & intCntUsrN & "<br>"
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