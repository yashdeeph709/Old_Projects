package MyPack;
import java.sql.*;
  
public class MyConn{
public static Connection con;

    public static Connection getMySqlCon() {
        try{
    if(con==null){
          Class.forName("com.mysql.jdbc.Driver");
          con=DriverManager.getConnection("jdbc:mysql://localhost:3306/lifecare","root",""); 
      }}
    catch(Exception ex){
        ex.printStackTrace();
        }
         return con;
    }
}
