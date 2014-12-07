<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.sql.*" %>
<%@page import="MyPack.MyConn" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add a Department</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>
    <body>
        <%@include file="menu.jsp" %>
        <div class="span5">
            <table class="table">
        <%
            Connection conn=MyConn.getMySqlCon();
            Statement st=conn.createStatement();
            ResultSet rs=st.executeQuery("select * from departments");
            while(rs.next()){
                out.println("<tr>"
                        + "<td>"+rs.getString(1)+"</td>"
                        + "<td>"+rs.getString(2)+"</td>"
                        + "</tr>");
            }
        %>
        </table>
        <form action="addDept">
            <label class="btn">Department Name :</label><br> <input type="text" placeholder="Enter a depo name" name="dname"/><br>
            <input type="submit"/>
        </form>
        </div>
    </body>
</html>
