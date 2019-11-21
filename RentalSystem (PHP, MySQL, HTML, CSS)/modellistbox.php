
<?php
include "db.inc.php";
$sql = "SELECT modelName,manufacturer,version,engineSize FROM Models";
//error handling
if (!$result = mysqli_query($con, $sql))
{
	die ( 'Error in querying the database' . mysqli_error($con));
}

echo "<BR><select name='listbox' id= 'listbox' onclick= 'produce()'>";

while ($row = mysqli_fetch_array($result))
{
	$modelname= $row['modelName'];
	$manufacturer= $row['manufacturer'];
	$ver=$row['version'];
	$engine=$row['engineSize'];
	$allText="$manufacturer,$modelname,$ver,$engine";
	echo "<option value= '$allText'>$manufacturer $modelname $ver $engine</option>";
}
echo "</select>";
mysqli_close($con);
?>