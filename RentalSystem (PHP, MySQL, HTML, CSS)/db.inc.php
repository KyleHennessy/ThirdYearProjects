<HTML>

<BODY>

<?php
	$hostname="localhost";
	$username="Ted";
	$password="password";
	$dbname="DeansCars";
	
	$con=mysqli_connect($hostname, $username, $password, $dbname);
	
	if(!$con)
	{
		die ("Failed to connect to MySQL: ".mysqli_connect_error());
	}
?>	
</body>
</html>
	