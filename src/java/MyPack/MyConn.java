package MyPack;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException; 

    public class MyConn {
    public static final String MYSQL_USERNAME = "root";
    public static final String MYSQL_PASSWORD = "";
    private static Connection con;
    
    public static String initConnection(){
        String ur = "";
        if(con==null){
            try {
                ur = "jdbc:mysql://localhost:3306/lifecare";
                con = DriverManager.getConnection(ur, MYSQL_USERNAME, MYSQL_PASSWORD);
            } catch (SQLException e) {
                e.printStackTrace();
                return e.getMessage();
            }
        }
        return "Connection Initialized!";
    }

    public static Connection getMySqlCon() {
        if (con == null) {
            initConnection();
        }
        return con;
    }
}