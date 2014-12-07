<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.sql.*" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <%@include file="includes.jsp" %>
    </head>
    <body>
        <%@include file="menu.jsp" %>
        <%
        if(request.getParameter("history")==null){
        Connection c=MyPack.MyConn.getMySqlCon();
        Statement st=c.createStatement();
        ResultSet rs=st.executeQuery("select * from history");
        out.println("<table class='table table-condensed'>");
        out.println("<thead>");
        out.println("<th>#</th>");
        out.println("<th>Name of Department</th>");
        out.println("<tr>");
        while(rs.next()){
            out.println("<tr>");
                out.println("<td>"+rs.getString(1)+"</td>");
                out.println("<td>"+rs.getString(2)+"</td>");
                out.println("<td><a href='seeOld.jsp?history="+rs.getString(1)+"'>see history</a></td>");
            out.println("</tr>");
        }}else{
        Connection c=MyPack.MyConn.getMySqlCon();
        Statement st=c.createStatement();
        ResultSet rs=st.executeQuery("select historyname from history where hid="+request.getParameter("history"));
        rs.next();
        String tablename=rs.getString(1);
        rs=st.executeQuery("select * from "+tablename);
        ResultSetMetaData rsm=rs.getMetaData();
        out.println("<table class='table table-hover'>");
        int i=1;
        out.println("<thead>");
        while(i<=rsm.getColumnCount()){
        out.println("<th>"+rsm.getColumnName(i)+"</th>");
        i++;
        }
        out.println("</thead>");
        while(rs.next()){
            out.println("<tr class='success'>");
            for(int j=1;j<=rsm.getColumnCount();j++){
            out.println("<td>"+rs.getString(j)+"</td>");
            }
            out.println("</tr>");
        }
        out.println("</table>");
        out.println("<form action='pdf'>");
        out.println("<input type='text' value='"+tablename+"' style='display:none;' name='tablename' />");
        out.println("Path:<input type='text' name='path' />");
        out.println("<input type='submit' />");
        }
        %>
    </body>
</html>
