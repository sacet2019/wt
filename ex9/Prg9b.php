<!-- Example PHP program for registering users of a website and login-->
<html>
<body>
<br><br><br><br>
<table border=1 align=center>
<form name="login" action="Prg9.php">
<tr><th colspan=2>REGISTRATION PAGE</th></tr>
<tr><td>User Name:</td><td><input type="text" name="uname"/></td></tr>
<tr><td>Password:</td><td><input type="password" name="pwd"/></td></tr>
<tr><td>E-mail:</td><td><input type="text" name="email"/></td></tr>
<tr><td>Phone No.:</td><td><input type="text" name="phno"/></td></tr>
<tr><td>Address:</td><td><input type="text" name="addr"/></td></tr>

<tr><td colspan=2 align=center><input type="submit" value="Register User"/>
<input type="reset" value="Reset"/>
</td></tr>
<tr><td colspan="2">
<?php

	if(isset($_REQUEST["uname"])&&isset($_REQUEST["pwd"])&&isset($_REQUEST["email"])&&isset($_REQUEST["phno"])&&isset($_REQUEST["addr"]))
	{	$uname=$_REQUEST["uname"];
		$pwd=$_REQUEST["pwd"];
		$email=$_REQUEST["email"];
		$phno=$_REQUEST["phno"];
		$addr=$_REQUEST["addr"];
		echo "<tr><td colspan=2><b>User Registered and details are:</b></td></tr>";
		echo "<tr><td>User Name</td><td>$uname</td></tr>";
		echo "<tr><td>Password</td><td>$pwd</td></tr>";
		echo "<tr><td>Email</td><td>$email</td></tr>";
		echo "<tr><td>Phone No.</td><td>$phno</td></tr>";
		echo "<tr><td>Address</td><td>$addr</td></tr>";
		
	}
	else
		echo "Enter User details...";
?>
</td></tr>
</table>
</form>
</body>
</html>
 
