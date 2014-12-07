import java.io.IOException;
import java.io.PrintWriter;
import java.sql.*;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet(urlPatterns = {"/store"})
public class store extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {
        double days=Double.parseDouble(request.getParameter("days"));
        double did=Double.parseDouble(request.getParameter("did"));
        double bonus,basic,speall,TotalBasic,hra,medall,conv,perall,gross,epf=0,epfc=0,wc,ptax,netpay,ctc;
        double attendance,advance,eid,temp=0d;
        Connection c=MyPack.MyConn.getMySqlCon();
        Statement st=c.createStatement();
        Statement st1=c.createStatement();
        ResultSet rs=st.executeQuery("select em.*,ea.attendance,ea.advance from earning ea inner join "
                + "employees em on ea.eid=em.eid where ea.did='"+did+"'");
        while(rs.next()){
            eid=Double.parseDouble(rs.getString("eid"));
            did=Double.parseDouble(rs.getString("did"));
            attendance=Integer.parseInt(rs.getString("attendance"));
            advance=Integer.parseInt(rs.getString("advance"));
            basic=Double.parseDouble(rs.getString("basic"));
            basic=(basic/days)*attendance;
            speall=Double.parseDouble(rs.getString("speall"));
            speall=(speall/days)*attendance;
            TotalBasic=basic+speall;
            hra=Double.parseDouble(rs.getString("hra"));
            hra=(hra/days)*attendance;
            medall=Double.parseDouble(rs.getString("medall"));
            medall=(medall/days)*attendance;
            conv=Double.parseDouble(rs.getString("conv"));
            conv=(conv/days)*attendance;
            perall=Double.parseDouble(rs.getString("perall"));
            temp=perall;
            perall=(perall/days)*attendance;
             gross=TotalBasic+hra+medall+conv+perall;
            if(Integer.parseInt(rs.getString("epf"))!=-1){
                epf=(TotalBasic*12)/100;
                epfc=(int)(TotalBasic*13.61)/100;
            }
            bonus=(int)(TotalBasic*8.33)/100;
            wc=(100/days)*attendance;
            ptax=0;
            netpay=gross-epf-wc-ptax-advance;
            ctc=gross+epfc+bonus;
            st1.executeUpdate(
            "update earning set basic="+basic+",speall="+speall+",Totalbasic="+TotalBasic+",hra="+hra+",medall="+medall
            +",conv="+conv+",perall="+perall+",gross="+gross+",epf="
            +epf+",epfc="+epfc+",wc="+wc+",netpay="+netpay+",ctc="+ctc+" where eid="+eid+" and did="+did);
            }
        response.sendRedirect("showSheet.jsp?did="+did);
        }catch(SQLException ex){
            response.sendRedirect("Message.jsp?msg=dont refresh the page again and again&link=home.jsp");
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
