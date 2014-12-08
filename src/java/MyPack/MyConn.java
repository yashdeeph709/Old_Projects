package com;
import java.sql.*;
  
public class MyConn{
public static Connection con;
public static Connection getcon()
{
try{
    if(con==null){
          Class.forName("com.mysql.jdbc.Driver");
          con=DriverManager.getConnection("jdbc:mysql://localhost:3306/callit","root","root"); 
      }}
    catch(Exception ex){
        ex.printStackTrace();
        }
         return con;
    }
}