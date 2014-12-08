package MyPack;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.naming.Context;
import javax.naming.InitialContext;
import javax.naming.NamingException;
import javax.sql.DataSource;

public class MyConn{
private static MyConn connector_ = null;

public static MyConn getInstance() throws Exception {
if(connector_ == null) {
connector_ = new MyConn();
}
return connector_;
}

    public static Connection getMySqlCon() throws SQLException {
        Connection c=null;
    try {
        Context ctx = new InitialContext();
        DataSource ds = (DataSource)ctx.lookup("java:comp/env/jdbc/lifecare");
        c = ds.getConnection();
        return c;
    } catch (NamingException ex) {
        Logger.getLogger(MyConn.class.getName()).log(Level.SEVERE, null, ex);
    }
    return c;
    }
}