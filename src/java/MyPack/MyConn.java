package MyPack;
import java.sql.*;
 
public class MyConn{
    public static Connection con;
    public static Connection getMySqlCon() {
        try{
            if(con==null){
            String host = System.getenv("OPENSHIFT_MYSQL_DB_HOST");
            String port = System.getenv("OPENSHIFT_MYSQL_DB_PORT");
            String username=System.getenv("OPENSHIFT_MYSQL_DB_USERNAME");
            String password=System.getenv("OPENSHIFT_MYSQL_DB_PASSWORD");
            
            String url = String.format("jdbc:mysql://%s:%s/", host, port);

            Class.forName("com.mysql.jdbc.Driver");
            con = DriverManager.getConnection(url, username, password);      }
            }
            catch(Exception ex){
            ex.printStackTrace();
            }
            return con;
        }
}
