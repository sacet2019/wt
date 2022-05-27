<html>
<head><title>Login Page</title></head>
<body>
<br><br><br><br>
<form action="login11.php" method="post">
<table align="center" border="1">
	<tr><th colspan="2">Login Page</th>
	<tr><td>User Name:</td><td><input type="text" name="uname"/></td></tr>
	<tr><td>Password:</td><td><input type="password" name="pwd"/></td></tr>
	<tr><td colspan="2"><input type="submit" value="Login" name="cmd" /></td></tr>
	<tr><td colspan="2">
<?php
	if(isset($_REQUEST["uname"])&&isset($_REQUEST["pwd"]))
	{	$uname=$_REQUEST["uname"];
		$pwd=$_REQUEST["pwd"];
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
		if(! $conn ) 
      		die('Connect Error: ' . mysqli_error());
		mysqli_select_db($conn,'wtlab');
		$sql = "SELECT * FROM user WHERE uname='".$uname."' and 				pwd='".$pwd."'";
		$result = mysqli_query($conn,$sql);
		if(!($row = mysqli_fetch_row($result) )) 
      		echo "<font  color='red'>Invalid User...</font>";
		else 
		{
		 echo "Welcome to ".$uname;
		} 
		mysqli_close($conn);
	}
	
	else
		echo "Enter user name and password...";
?>	
	</td></tr>
</table>
</form>
</body>
</html>
