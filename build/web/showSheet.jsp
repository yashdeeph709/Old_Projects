<%@page import="java.util.StringTokenizer"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.sql.*" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Salary Sheet</title>
        <%@include file="includes.jsp" %>
    </head>
    <body>
        <%@include file="menu.jsp" %>
        <%
        Connection c=MyPack.MyConn.getMySqlCon();
        Statement st=c.createStatement();
        ResultSet rs=st.executeQuery("select em.ename,ea.* from earning ea inner join "
                + "employees em on ea.eid=em.eid");
        out.println("<table class='table table-condensed'>");
        ResultSetMetaData rsm=rs.getMetaData();
        int i=1;
        out.println("<thead>");
        while(i<=rsm.getColumnCount()){
        out.println("<th>"+rsm.getColumnName(i)+"</th>");
        i++;
        }
        out.println("</thead>");
        while(rs.next()){
            out.println("<tr>");
            for(i=1;i<=18;i++){
                out.println("<td>"+rs.getString(i)+"</td>");
            }
            out.println("</tr>");
        }
        out.println("</table>");
        rs=st.executeQuery("select dname from departments where did="+request.getParameter("did"));
        rs.next();
        String t=rs.getString(1);
        StringTokenizer tokenizer=new StringTokenizer(t);
        String dept="";
        while(tokenizer.hasMoreTokens()){
            dept=dept+tokenizer.nextToken();
        }
	java.util.Calendar date;
        date =java.util.Calendar.getInstance();
        int month=date.get(java.util.Calendar.MONTH);
        int year=date.get(java.util.Calendar.YEAR);
        st.executeUpdate("drop table if exists "+dept+"_"+month+year);
        st.executeUpdate("create table "+dept+"_"+month+year+" as select em.ename,em.designation,ea.attendance,ea.basic,ea.speall,ea.totalbasic,ea.hra,ea.medall,"
        + "ea.conv,ea.perall,ea.gross,ea.epf,ea.epfc,ea.wc,ea.advance,ea.netpay,ea.ctc from employees em inner join earning ea on em.eid=ea.eid;");
        st.executeUpdate("truncate earning");
        try{
        st.executeUpdate("insert into history(historyname) values('"+dept+"_"+month+year+"')");
        }catch(Exception ex){} 
        out.println("<form action='pdf?tablename="+dept+"_"+month+year+"' method='post'>"
                + "<input type='text' name='path'/>"
                + "<input type='submit' > ");
        
        %> 
    </body>
</html>
