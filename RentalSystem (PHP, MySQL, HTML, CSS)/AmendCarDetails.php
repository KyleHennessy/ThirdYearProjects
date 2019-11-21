<?php
include 'db.inc.php';

date_default_timezone_set('UTC');

$sql="UPDATE Cars SET registrationNumber='$_POST[amendregistration]', modelName='$_POST[amendmodel]', colour='$_POST[amendcolour]', chassisNumber='$_POST[amendchassis]', bodyStyle='$_POST[amendbody]',numberOfDoors='$_POST[amenddoors]',purchasePrice='$_POST[amendprice]',dateAdded='$_POST[amenddate]' WHERE carID = '$_POST[amendid]'";
/*error handling*/
if(!mysqli_query($con,$sql))
{
	echo "Error ".mysql_error();
}
else
{
	if (mysqli_affected_rows($con) != 0)
	{
		echo mysqli_affected_rows($con)." record(s) updated <BR>";
		echo "Car ID ".$_POST['amendid']. "(".$_POST['amendmodel'].")". "has been updated";
	}
	else
	{
		echo "No records were changed";
	}
}
mysqli_close($con);
?>

<form action="AmendCar.html.php" method="Post" />

<input type="submit" value="Return to previous screen">
</form>