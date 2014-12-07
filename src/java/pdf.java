import com.itextpdf.text.BaseColor;
import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Element;
import com.itextpdf.text.Font;
import com.itextpdf.text.PageSize;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.TabStop;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.*;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import com.itextpdf.text.pdf.PdfWriter;

@WebServlet(urlPatterns = {"/pdf"})
public class pdf extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
  try {
           String filepath=request.getParameter("path");
           String tablename=request.getParameter("tablename");
           Document document=new Document(PageSize.A4.rotate());
           PdfWriter.getInstance(document,new FileOutputStream(filepath+"\\"+tablename+".pdf"));
           Connection conn=MyPack.MyConn.getMySqlCon();
           Statement st=conn.createStatement();
           ResultSet rs=st.executeQuery("select * from "+tablename);
           ResultSetMetaData rsm=rs.getMetaData();
           document.open();
           Paragraph p=new Paragraph();
           Font f=new Font(Font.FontFamily.HELVETICA, 20,Font.BOLD, BaseColor.DARK_GRAY);
           p.setFont(f);
           p.setSpacingBefore(10.0f);
           p.add("M/s. Life Care Logistic Pvt Ltd.\n\n");
           p.add("37-38 Lasudiya Mori Dewas Naka\n\n");
           p.add("Indore (M.P)\n\n");
           p.add("\n\n\n");
           p.setAlignment(1);
           document.add(p);
           PdfPTable table=new PdfPTable(rsm.getColumnCount());
           float[] width={10.0f,10.0f,4.0f,8.0f,8.0f,8.0f,6.0f,6.0f,6.0f,6.0f,.0f,6.0f,6.0f,6.0f,6.0f,8.0f,8.0f};
           table.setTotalWidth(width);
           int i=1;
           table.setHeaderRows(1);
           document.setMargins(2.0f, 2.0f, 15.0f, 15.0f);
                   table.addCell("Ename");
                   table.addCell("Desi.");
                   table.addCell("Attn.");
                   table.addCell("Basic");
                   table.addCell("SA");
                   table.addCell("TotBa.");
                   table.addCell("HRA");
                   table.addCell("MA");
                   table.addCell("Conv.");
                   table.addCell("PA");
                   table.addCell("Gross");
                   table.addCell("EPF@\n12%");
                   table.addCell("EPF@\n13.61%");
                   table.addCell("WC");
                   table.addCell("Adv.");
                   table.addCell("Net");
                   table.addCell("CTC");
           while(rs.next()){
               for(i=1;i<=rsm.getColumnCount();i++){
                   table.addCell(rs.getString(i));
               }
           }
           document.add(table);
           document.addAuthor("Vengicx");
           document.close();
       } catch (FileNotFoundException ex) {
       } catch (DocumentException ex) {
       } catch (SQLException ex) {
            Logger.getLogger(pdf.class.getName()).log(Level.SEVERE, null, ex);
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
