<html>
<body>
<br><br><br><br>
<table border=1 align=center>
<form name="login" action="register11.php" method="get">
<tr><th colspan=2>Registration Page</th></tr>
<tr><td>User Name:</td><td><input type="text" name="uname"/></td></tr>
<tr><td>Password:</td><td><input type="password" name="pwd"/></td></tr>
<tr><td>E-mail:</td><td><input type="text" name="email"/></td></tr>
<tr><td>Phone No.:</td><td><input type="text" name="phno"/></td></tr>
<tr><td>Address:</td><td><input type="text" name="addr"/></td></tr>

<tr><td colspan=2 align=center><input type="submit" value="Register user"/>
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
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
		if(! $conn ) 
      		die('Connect Error: ' . mysqli_error());
		mysqli_select_db($conn,'wtlab');
		$sql = "INSERT INTO register VALUES('".$uname."','".$pwd."','".		$email."','".$phno."','".$addr."')";
		$result = mysqli_query($conn,$sql);
		if(! $result ) 
      		die('Query Error: ' . mysqli_error());
		echo "User Registered Successfully.."; 
		mysqli_close($conn);
	}
	else
		echo "Enter User details...";
?>
</td></tr>
</table>
</form>
</body>
</html>

