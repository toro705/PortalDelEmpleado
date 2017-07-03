<%
Sub objConnection()
		
	Set objConn = Server.CreateObject("ADODB.Connection")
	objConn.Open("Provider=SQLOLEDB; Data Source=DTCWIN067; Initial Catalog=PUBFACT;User ID=sa ;Password=Y0wXdour;")
	  	
End Sub
%>