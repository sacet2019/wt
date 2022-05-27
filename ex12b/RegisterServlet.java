import jakarta.servlet.*;
import java.io.*;
import java.util.*;
public class RegisterServlet extends GenericServlet
{
  public void service(ServletRequest request, ServletResponse response) throws ServletException,
  IOException
{
        PrintWriter pw = response.getWriter();
        Enumeration en=request.getParameterNames();              //Enumeration containing the attribute names 					available within this servlet context. getParameterNames()                                                                                       to get the list of allform parameters in the current request.
       while(en.hasMoreElements())             //hasMoreElements() Tests if enumeration contains more elements.
        {
         String pname=(String)en.nextElement();  //nextElement() Returns the next element of this enumeration.
         pw.print(pname+" : ");
         String pvalue= request.getParameter(pname);        //getParameter() method to get the value of a form 							    parameter. 
         pw.println(pvalue);
         pw.println(" ");
          }
         pw.close();
}
}



 
