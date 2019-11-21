<!--Kyle Hennessy
	C00227463
	CarReport.html.php-->
<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Car Report</title>
<link href="CarReport.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- Main Container -->
<div class="container"> 
  <!-- Navigation -->
  <header> <a href="">
    <h4 class="logo">Deans Cars</h4>
    </a>
    <nav>
      <ul>
		<li><a href="#rentals">RENTALS</a></li>
		<li><a href="#returns">RETURNS</a></li>
		<li><a href="#blacklist">BLACKLIST</a></li>
		<li><a href="#customer">CUSTOMER ACCOUNTS</a></li>
		<li><a href="#reports">REPORTS</a></li>
        <li><a href="#file">FILE MAINTENANCE</a></li>
        <li><a href="#setup">SET-UP</a></li>
        <li> <a href="#exit">EXIT</a></li>
      </ul>
    </nav>
  </header>
  <!-- Hero Section -->
  <section class="hero" id="hero">
    <div>

<!--creates border of form-->
<fieldset>
	<h1>Car Report</h1><br/>
<input type="text" id="searchbar" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
 
  <tr class="header">	
    <th style="width:12.5%;">Model Name</th>
	<th style="width:12.5%;">Manufacturer</th>  
	<th style="width:12.5%;">Registration</th>
	<th style="width:12.5%;">Status</th>
	<th style="width:12.5%;">Date Added</th>
	<th style="width:12.5%;">Cumulative Rentals</th>
  </tr>


<?php include 'db.inc.php';
$sql = "SELECT * FROM Cars ";
//error handling
if (!$result = mysqli_query($con, $sql))
{
	die ( 'Error in querying the database' . mysqli_error($con));
}
while ($row = mysqli_fetch_array($result)) {?>

	<tr>
    <td><?php echo $row['modelName'];?></td>
    <td><?php echo $row['manufacturer'];?></td>
    <td><?php echo $row['registrationNumber'];?></td>
	<td><?php echo $row['isRented'];?></td>
	<td><?php echo $row['dateAdded'];?></td>
	<td><?php echo $row['cumulativeRentals'];?></td>
   </tr>
  
<?php } ?>

</table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchbar");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

	<!--<script src ="js/filterbar.js"> searchFilter();</script>-->	
</fieldset>
</form>
</div>
</div>
</section>
</div>
<!-- Main Container Ends -->
</body>
</html>


	