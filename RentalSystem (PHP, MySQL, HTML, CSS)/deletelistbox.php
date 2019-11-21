<!--Kyle Hennessy
	C00227463
	deletelistbox.php-->
<?php
include "db.inc.php";
$sql = "SELECT  carID, modelName, manufacturer, version, engineSize, registrationNumber, colour, bodyStyle, numberOfDoors FROM Cars WHERE deletedFlag IS NULL";
//error handling
if (!$result = mysqli_query($con, $sql))
{
	die ( 'Error in querying the database' . mysqli_error($con));
}

echo "<BR><select name='listbox' id= 'listbox' onclick= 'populate()'>";

while ($row = mysqli_fetch_array($result))
{
	$id= $row['carID'];
	$modelname= $row['modelName'];
	$manufacturer = $row['manufacturer'];
	$version = $row['version'];
	$enginesize= $row['engineSize'];
	$registration= $row['registrationNumber'];
	$colour= $row['colour'];
	$bodystyle= $row['bodyStyle'];
	$numberofdoors= $row['numberOfDoors'];
	

	
$allText="$id,$modelname, $manufacturer, $version, $enginesize, $registration, $colour, $bodystyle, $numberofdoors";
	echo "<option value= '$allText'>$manufacturer $modelname, $registrationnumber, $colour</option>";
}
echo "</select>";
mysqli_close($con);
?>