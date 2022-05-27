<html>
<head><title>Login Page</title></head>
<body>
<br><br><br>
<form action="Prg9a.php" method="post">
<table align="center" border="1">
	<tr><th colspan="2">Login Page</th>
	<tr><td>User Name:</td><td><input type="text" name="uname"/></td></tr>
	<tr><td>Password:</td><td><input type="password" name="pwd"/></td></tr>
	<tr><td><input type="submit" value="Add User" name="cmd" /></td>
		<td><input type="submit" value="Check User" name="cmd" /></td></tr>
	<tr><td colspan="2">
<?php
	if(isset($_REQUEST["uname"])&&isset($_REQUEST["pwd"])&&isset($_REQUEST["cmd"]))
	{	$uname=$_REQUEST["uname"];
		$pwd=$_REQUEST["pwd"];
		$cmd=$_REQUEST["cmd"];
		if($cmd=="Add User")
		{	setcookie($uname,$pwd);
			echo "<font color='blue'>User details added to cookies...";
			print_r($_COOKIE);  		}
		else
		{	
                                               if(isset($_COOKIE[$uname]) && $_COOKIE[$uname]==$pwd)
		      echo "<font color='green'>Welcome  $uname!!!";
		      else
		     echo "<font color='red'>You are not an authenticated user...";
		}
	}
	else
		echo "Enter user name and password...";
?>	
	</td></tr>
</table>
</form>
</body>
</html>

