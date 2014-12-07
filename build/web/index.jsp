<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Lifecare Logistics</title>
<%@include file="includes.jsp" %>
</head>
<body>
<%@include file="menu.jsp" %>
<div class="span5">
    <%
        out.println(System.getenv("OPENSHIFT_MYSQL_DB_HOST"));
    %>
<table class="table table-condensed">
        <tr>
            <td><a href="addDept.jsp"><img src="img/Groups-icon.png"/></a></td>
            <td><a href="addElot.jsp"><img src="img/Actions-list-add-user-icon.png"/></a></td>
	    <td><a href="genSal.jsp"><img src="img/Generate-tables-icon.png"/></a></td>
            <td><a href="seeOld.jsp"><img src="img/History-Folder-Graphite-icon.png"></a></td>
        </tr>
        <tr>
	<td>Add a department</td>
	<td>Add a employee</td>
	<td>Generate Salary Sheet</td>
	<td>History Salaries</td>
	</tr>
	
</table>
</div>
</body>
</html>