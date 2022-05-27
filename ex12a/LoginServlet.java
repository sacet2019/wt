import jakarta.servlet.*;
import java.io.*;
public class LoginServlet extends GenericServlet
{
  public void service(ServletRequest req, ServletResponse res) throws ServletException,
  IOException
{
 String name=req.getParameter("uname");
 String password=req.getParameter("pwd");
res.setContentType("text/html");	//It is used to send your data in html format.
PrintWriter pw=res.getWriter();	           //PrintWriter object that can send character text to the client.
if((name.equals("stanns"))&&(password.equals("sacet")))
pw.println("<b><font color='blue'>Hello</font></b>"+"<b>"+name+"<br>Successfully logged into the System");
else
pw.println("Hello"+name+"Invalid Username or Password");
}
}
