import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import java.sql.*;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet(urlPatterns = {"/generate"})
public class generate extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try{
            int[] attendance=new int[Integer.parseInt(request.getParameter("num"))];
            int[] advance=new int[Integer.parseInt(request.getParameter("num"))];
            int[] id=new int[Integer.parseInt(request.getParameter("num"))];
            int did=Integer.parseInt(request.getParameter("did"));
            int i;
            for(i=0;i<attendance.length;i++){
                attendance[i]=Integer.parseInt(request.getParameter("attendance"+i));
                advance[i]=Integer.parseInt(request.getParameter("advance"+i));
                id[i]=Integer.parseInt(request.getParameter("id"+i));
            }
            Connection conn=MyPack.MyConn.getMySqlCon();
            Statement st=conn.createStatement();
            for(i=0;i<attendance.length;i++){
            st.executeUpdate("insert into Earning(eid,did,attendance,advance) values("+id[i]+","+did+","+attendance[i]+","+advance[i]+")");
            }
            java.util.Calendar c;
            c =java.util.Calendar.getInstance();
            int days;
            days = c.getActualMaximum(java.util.Calendar.DAY_OF_MONTH);
            conn.close();
            
            response.sendRedirect("store?days="+days+"&did="+did);
        }catch(SQLException ex){
        out.println("please donot try to generate same data again");
        }finally {            
            out.close();
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP
     * <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP
     * <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>
}
