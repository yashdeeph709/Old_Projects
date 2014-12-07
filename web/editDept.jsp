<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.sql.*" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Edit Department</title>
        <%@include file="includes.jsp" %>
    </head>
    <body>
        <%@include file="menu.jsp" %>
        <div class="span5">
        <table class="table table-striped">
        <%
        Connection conn=MyPack.MyConn.getMySqlCon();
        Statement st=conn.createStatement();
        ResultSet rs=st.executeQuery("select * from departments;");
         while(rs.next()){
                out.println("<tr>"
                        + "<td>"+rs.getString(1)+"</td>"
                        + "<td>"+rs.getString(2)+"</td>"
                        + "</tr>");
            }
        %>
        </table>
        <form action="editDept">
            <select name="did">
        <%
        rs.first();
         do{
                out.println("<option>"+rs.getString(1)+"</option>");
            }while(rs.next());
        %>
         </select>
         <input type="text" name="dname"/><br>
         <input type="submit"/>
         </form>
        </div>
    </body>
</html>
