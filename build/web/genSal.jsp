<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="MyPack.MyConn" %>
<%@page import="java.sql.*" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Generate Salary Sheet</title>
        <%@include file="includes.jsp" %>
    </head>
    <body>
        <%@include file="menu.jsp" %>
        <%if(request.getParameter("dept")==null){%>
        <form action="genSal.jsp" method="post">
            Department:<select name="dept">
                        <%
                            String sql="select * from departments";
                            Connection conn=MyConn.getMySqlCon();
                            Statement st=conn.createStatement();
                            ResultSet rs=st.executeQuery(sql);
                            while(rs.next()){
                                out.println("<option value='"+rs.getString(1)+"'>"+rs.getString(2)+"</option>");
                            }
                        %>
                       </select>
                       <input type="submit"  class="btn btn-success">
        </form>
        <%}else{%>
          <form action="generate?">
          <table class="table table-hover">
            <thead>
                <td>#</td>
                <td>Employee Name:</td>
                <td>attendance of month</td>
                <td>Advance</td>
            </thead>
            <%
                            String sql="select * from employees where did='"+request.getParameter("dept")+"';";
                            Connection conn=MyConn.getMySqlCon();
                            Statement st=conn.createStatement();
                            ResultSet rs=st.executeQuery(sql);
                            int i=0;
                            while(rs.next()){
                                out.println("<tr>");
                                out.println("<td><input type='text' style='display:none;' name='id"+i+"' value='"+rs.getString(1)+"' />"+rs.getString(1)+"</td>");
                                out.println("<td>"+rs.getString(3)+"</td>");
                                out.println("<td>");
                                out.println("<input type='text' "
                                        + "pattern='^[0-9]{1,20}' "
                                        + "required='true' "
                                        + "name='attendance"+i+"' "
                                        + "tabindex='"+rs.getString(1)+"'>");
                                out.println("</td>");
                                out.println("<td>");
                                out.println("<input type='text' "
                                        + "pattern='^[0-9]{1,20}' "
                                        + "required='true' "
                                        + "name='advance"+i+"' "
                                        + "tabindex='"+rs.getString(1)+"'>");
                                out.println("</td></tr>");
                                i++;
                            }
                            out.println("<input type='text' style='display:none;' name='num' hidden=\"true\" value='"+i+"'/>");
                            out.println("<input type='text' style='display:none;' name='did' hidden=\"true\" value='"+request.getParameter("dept")+"'/>");
             %>
        </table>
        <input  type="submit" value="Generate" class="btn btn-success btn-large" />
        </form>
        <% }%>
    </body>
</html>
