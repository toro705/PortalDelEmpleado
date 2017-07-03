<!--#include file="fStringDate.asp" -->
<!--#include file="sObjConnection.asp" -->
<%
Sub LogUser(strDesc, intIdUser, intIdEmp)
    
	Dim strSqlLog
 	Dim datFecha
	Dim strFecha
	Dim strHora
	
	datFecha = Date()
  	strFecha = StringDate(datFecha,"fechaInv")
	'strFecha = Right(datFecha,4) & Mid(datFecha,4,2) & Left(datFecha,2)
  	strHora = Right("00"& Trim(Cstr(Hour(Time()))),2) & ":" & Right("00"& Trim(Cstr(Minute(Time()))),2)
    
  	strSqlLog = "INSERT INTO Vitacora (id_empresa, id_usuario, descrip, fecha, hora) VALUES ("
	strSqlLog = strSqlLog & Cint(intIdEmp) & ","
	strSqlLog = strSqlLog & Cint(intIdUser) & ","
	strSqlLog = strSqlLog & "'" & strDesc & "',"
	strSqlLog = strSqlLog & "'" & strFecha & "',"
  	strSqlLog = strSqlLog & "'" & strHora & "')"
  	
	'DB CONNECTION
	objConnection() 
	
	objConn.Execute(strSqlLog)  
	
	objConn.Close
	Set objConn = Nothing
	
End Sub
%>