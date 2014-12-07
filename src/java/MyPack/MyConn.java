package MyPack;

import java.sql.*;

    public class MyConn {
    private static Connection con;
    public static Connection getMySqlCon(){
       try{
        if(con==null||con.isClosed()){
            Class.forName("com.mysql.jdbc.Driver");
            con=DriverManager.getConnection("jdbc:mysql://localhost:3306/lifecare","root","");
        }
       }catch(Exception e){e.printStackTrace();}
        return con;
    }
}
