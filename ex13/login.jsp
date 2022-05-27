<%@ page import ="java.sql.*" %>
<%@ page import ="javax.sql.*" %>
<%@ page import ="java.io.*" %>
<%
String userid=request.getParameter("uname");
String pwd=request.getParameter("pwd");
Class.forName("com.mysql.jdbc.Driver");
java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root","root");
Statement st= con.createStatement();
ResultSet rs=st.executeQuery("select * from users where user_id='"+userid+"'");
if(rs.next())
{
if(rs.getString(2).equals(pwd))
{
out.println("welcome"+userid);

}
else
{
out.println("Invalid password try again");
}
}
%>