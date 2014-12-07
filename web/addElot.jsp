<%@page import="MyPack.MyConn"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.sql.*" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add Employee Lot</title>
        <%@include file="includes.jsp" %>
    </head>
    <body>
        <%@include file="menu.jsp" %>
        <div class="span5">
        <form method="post" action="addEmp">
            <table class="table table-bordered">
        <fieldset>
            <tr>
                <td>
        <label>Employee Name:</label>
        <input type="text" pattern="^[a-zA-Z\s]{1,20}" autofocus="true" required="true" placeholder="Enter Employee name" name="ename">
        <label>Designation:</label>
        <input type="text" pattern="^[a-zA-Z\s]{1,20}" required="true" placeholder="Enter Designation" name="desig">
        <label>Designation:</label>
        <select name="dept">
            <%
            Connection conn=MyPack.MyConn.getMySqlCon();
            Statement st=conn.createStatement();
            ResultSet rs=st.executeQuery("select * from departments;");
            while(rs.next()){
                out.print("<option value='"+rs.getString(1)+"'>"+rs.getString(2)+"</option>");
            }
            %>
        </select>
        <label>Basic Salary:</label>
        <input type="text" pattern="^[0-9]{1,20}" required="true" placeholder="Enter Basic Salary"  name="basic">
        <label>Special allowance:</label>
        <input type="text"  pattern="^[0-9]{1,20}"  required="true" placeholder="Enter Special Allowance" name="speall">
        </td>
        <td>
        <label>House Rental Allowance:</label>
        <input type="text"  pattern="^[0-9]{1,20}"  required="true" placeholder="Enter HRA" name="hra">
        <label>Medical Allowance</label>
        <input type="text" pattern="^[0-9]{1,20}"  required="true" placeholder="Enter Medical Allowance" name="medall">
        <label>Conventional Allowance:</label>
        <input type="text" pattern="^[0-9]{1,20}"  required="true" placeholder="Enter Conventional Allowance" name="conv">
        <label>Performance Allowance:</label>
        <input type="text" pattern="^[0-9]{1,20}" required="true" placeholder="Enter Performance Allowance" name="perf">
        <label>EPF</label>
        <select name="epf">
            <option value="1">True</option>
            <option value="-1">False</option>
        </select>
         </td>
        </tr>
        <tr><td colspan="2">
        <input type="submit" accesskey="m" value="Add Employee" class="btn btn-large input-xxlarge btn-success" >
        </fieldset>
        </td>
            </tr>
        </table>
        </form>
        </div>
    </body>
    </html>
