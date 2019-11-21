<!--Kyle Hennessy
	C00227463
	DeleteCar.php-->
<?php session_start();
	
?><BR><BR>
<?php
	//link to database
	include 'db.inc.php';
	
	//SQL Statement to update the Cars table
	$sql= "UPDATE Cars SET deletedFlag = 1 WHERE carID = '$_POST[delid]'  ";
	//Error Handling
	if (!mysqli_query($con, $sql))
	{
		echo "ERROR ".mysqli_error($con);
	}
	//Sets Session Variables From The Car Database
	$_SESSION['carID'] = $_POST['delid'];
	$_SESSION['modelName'] = $_POST['del,odel'];
	$_SESSION['manufactuerer'] = $_POST['delmanufacturer'];
	$_SESSION['version'] = $_POST['delversion'];
	$_SESSION['registrationNumber'] = $_POST['delregistration'];
	$_SESSION['colour'] = $_POST['delcolour'];
	$_SESSION['bodyStyle'] = $_POST['delbody'];
	$_SESSION['numberOfDoors'] = $_POST['deldoors'];
	//Closes down connection
	mysqli_close($con);
	?>
<script>
window.location="DeleteCar.html.php"
</script>