<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Message</title>
    </head>
    <body>
               <%@include file="menu.jsp" %>

        <%
            String msg=request.getParameter("msg");
            String link=request.getParameter("link");
        %>
        <h1><%=msg%>
            <a href="<%=link%>">back</a></h1>
    </body>
</html>
