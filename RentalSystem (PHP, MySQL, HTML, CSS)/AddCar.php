<!--Kyle Hennessy
	C00227463
	AddCar.php-->
<?php
 include 'db.inc.php';
date_default_timezone_set("UTC");
echo "The details sent down are: <br>";

list($part1, $part2, $part3, $part4) = explode(',', $_POST['listbox']);

echo "Registration is :" . $_POST['registrationNumber'] . "<br>";
echo "Model Name is :" . $_POST['listbox'] . "<br>";
echo "Colour is :" . $_POST['colour'] . "<br>";
echo "Chassis Number is :" . $_POST['chassisNumber'] . "<br>";
echo "Body Style is :" . $_POST['bodyStyle'] . "<br>";
echo "Number Of Doors is :" . $_POST['numberOfDoors'] . "<br>";
echo "Purchase Price is :" . $_POST['purchasePrice'] . "<br>";
$date=date_create($_POST['dateAdded']);
echo "Date of Birth is :" . date_format($date,"d/m/Y") . "<br>";

$sql = "INSERT INTO Cars (registrationNumber,modelName,manufacturer,version,engineSize,colour,chassisNumber,bodyStyle,numberOfDoors,purchasePrice,dateAdded) VALUES ('$_POST[registrationNumber]','$part1','$part2','$part3','$part4','$_POST[colour]','$_POST[chassisNumber]','$_POST[bodyStyle]','$_POST[numberOfDoors]','$_POST[purchasePrice]','$_POST[dateAdded]')";


if (!mysqli_query($con,$sql))
{
	die ("An Error in the SQL Query: " . mysqli_error($con) );
}
echo "<br>A record has been added for " . $_POST['listbox'] . "." ;

mysqli_close($con);

?>
<form action="AddCar.html.php" method="Post">
<br>

<input type="submit" value="Return to insert page">