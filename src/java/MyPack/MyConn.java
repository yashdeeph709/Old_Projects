package MyPack;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import javax.naming.Context;
import javax.naming.InitialContext;
import javax.sql.DataSource;

public class MyConn{
private static MyConn connector_ = null;

public static MyConn getInstance() throws Exception {
if(connector_ == null) {
connector_ = new MyConn();
}
return connector_;
}

public static Connection getConnection() throws Exception {
Context ctx = new InitialContext();
DataSource ds = (DataSource)ctx.lookup("java:comp/env/jdbc/lifecare");
Connection c = ds.getConnection();
return c;
}
}