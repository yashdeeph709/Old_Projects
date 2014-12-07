import java.io.IOException;
import java.io.PrintWriter;
import java.sql.*;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet(urlPatterns = {"/addEmp"})
public class addEmp extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {
            String ename=request.getParameter("ename");
            String desig=request.getParameter("desig");
            int dept=Integer.parseInt(request.getParameter("dept"));
            int basic=Integer.parseInt(request.getParameter("basic"));
            int hra=Integer.parseInt(request.getParameter("hra"));
            int ma=Integer.parseInt(request.getParameter("medall"));
            int speall=Integer.parseInt(request.getParameter("speall"));
            int conv=Integer.parseInt(request.getParameter("conv"));
            int perf=Integer.parseInt(request.getParameter("perf"));
            int gross=basic+hra+ma+speall+conv+perf;
            double bonus=((basic+speall)*8.33)/100;
            int epf=Integer.parseInt(request.getParameter("epf"));
            out.println(ename+desig+dept+basic+hra+ma+speall+conv+perf+gross+bonus);
            Connection conn=MyPack.MyConn.getMySqlCon();
            Statement st=conn.createStatement();
            st.executeUpdate("insert into employees values(NULL,"+dept+",'"+ename+"','"+desig+"',"+basic+","+speall+","+hra+","+ma+","+conv+","+perf+","+gross+","+bonus+","+epf+");");
            response.sendRedirect("addElot.jsp");
        }catch(Exception ex){
            out.println(ex.getMessage());
            ex.printStackTrace();
        } 
        finally {            
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
