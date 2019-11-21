
<?php
include "db.inc.php";
$sql = "SELECT  carID,registrationNumber, modelName, manufacturer, version, chassisNumber,colour, bodyStyle, dateAdded FROM Cars";
//error handling
if (!$result = mysqli_query($con, $sql))
{
	die ( 'Error in querying the database' . mysqli_error($con));
}

echo "<BR><select name='listbox' id= 'listbox' onclick= 'populate()'>";

while ($row = mysqli_fetch_array($result))
{
	$id= $row['carID'];
	$registrationnumber= $row['registrationNumber'];
	$modelname= $row['modelName'];
	$manufacturer = $row['manufacturer'];
	$version = $row['version'];
	$chassis= $row['chassisNumber'];
	$colour= $row['colour'];
	$bodystyle= $row['bodyStyle'];
	$dateadded= $row['dateAdded'];
	$date = date_create( $row['dateAdded']);
	$date = date_format($date,"Y-m-d");

	
$allText="$id,$registrationnumber, $modelname, $manufacturer, $version, $chassis, $colour, $bodystyle, $dateadded";
	echo "<option value= '$allText'>$manufacturer $modelname, $registrationnumber, $colour</option>";
}
echo "</select>";
mysqli_close($con);
?>