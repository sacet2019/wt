<html>
<body>
<br><br><br><br>
<table border=1 align=center>
<tr><th colspan=5>Registered User Information</th></tr>
<tr><th>User Name</th><th>E-mail</th><th>Phone No</th><th>Address</th></tr>
<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	if(!$conn ) 
      die('Connect Error: ' .mysqli_error());
	mysqli_select_db($conn,'wtlab');
	$sql = "select * from useer";
	$result = mysqli_query( $conn,$sql);
	if(!$result ) 
      die('Query Error: ' . mysqli_error());
	while($row = mysqli_fetch_row($result) ) 
	{   
	echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row                                       	 [2]."</td><td>".$row[3]."</td></tr>";
	}
	mysqli_close($conn); 
?>
</td></tr>
</table>
</body>
</html>
 
