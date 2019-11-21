<!--Kyle Hennessy
	C00227463
	DeleteCar.html.php-->
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Delete CAr</title>
<link href="DeleteCar.css" rel="stylesheet" type="text/css">

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
  <!-- body Section -->
  <section class="hero" id="hero">



<!--creates form-->
<form name="DeleteForm" action="DeleteCar.php" onsubmit="return confirmCheck()" method="post">
<!--creates fieldset-->
	
<fieldset>
<h1>Delete Car</h1><br/>
	
<h2>Please select a car and then click the delete button if you wish to delete
	
<?php include 'listbox.php'; ?></h2>
<script>
function populate()
{
var sel= document.getElementById("listbox");
var result;
result =sel.options[sel.selectedIndex].value;
var carDetails=result.split(',');
document.getElementById("display").innerHTML="The details of the selected car are: "+result;
document.getElementById("delid").value=carDetails[0];
document.getElementById("delmodel").value=carDetails[1];
document.getElementById("delmanufacturer").value=carDetails[2];
document.getElementById("delversion").value=carDetails[3];
document.getElementById("delengine").value=carDetails[4];
document.getElementById("delregistration").value=carDetails[5];
document.getElementById("delcolour").value=carDetails[6];
document.getElementById("delbody").value=carDetails[7];
document.getElementById("deldoors").value=carDetails[8];

}

function confirmCheck()
{
var response;
response = confirm('Are you sure you want to save these changes?');
if(response)
{

 document.getElementById("delid").disabled=false;
 document.getElementById("delmodel").disabled=false;
 document.getElementById("delmanufacturer").disabled=false;
 document.getElementById("delversion").disabled=false;
 document.getElementById("delengine").disabled=false;
 document.getElementById("delregistration").disabled=false;
 document.getElementById("delcolour").disabled=false;
 document.getElementById("delbody").disabled=false;
 document.getElementById("deldoors").disabled=false;
 return true;
}
else
{
 populate();
 return false;
}
}
</script>
<p id="display">should be displayed here</p>
<div class="amendbutton">

</div>
<div class="row">
	<div class="column">
		
		<label for="delmodel"><h2>Model Name</h2> </label>
		<input type = "text" name ="delmodel" id = "delmodel" disabled/><br/><br/><br/>

		<label for="delmanufacturer"><h2>Model Name</h2></label>
		<input type = "text" name = "delmanufacturer" id = "delmanufacturer" disabled /> <br/><br/><br/>

		<label for="delversion"><h2>Version</h2></label>
		<input type = "text" name = "delversion" id = "delversion" disabled/><br/><br/><br/>

		<label for="delengine"><h2>Engine Size</h2> </label>
		<input type = "text" name = "delengine" id = "delengine"  disabled/><br/><br/><br/>
	</div>
	<div class ="column">

		<label for="delregistration"><h2>Registration Number</h2> </label>
		<input type = "text" name = "delregistration" id = "delregistration"  disabled/><br/><br/><br/>

		<label for="delcolour"><h2>Colour</h2> </label>
		<input type = "text" name = "delcolour" id = "delcolour"  disabled/><br/><br/><br/>
		
		<label for="delbody"><h2>Body Style</h2></label>
		<input type = "text" name = "delbody" id="delbody" disabled/><br/><br/><br/>

		<label for="deldoors"><h2>Number Of Doors</h2> </label>
		<input type = "text" name = "deldoors" id = "deldoors" disabled/>
	</div>
</div>

<span class="myButton">
<input type="button" value="Delete" id="mybutton" />
</span>
	<!--pop up box-->
	<div id ="myPopup" class="popup">
		<!--pop up box content -->
		<div class="popup-content">
			<span class="close">&times;</span>
			<div align="center">Are you sure you want to delete carID
			<input type = "number" name ="delid" id = "delid" disabled/><br/><br/><br/> </div><br>
			<div class="myButton">
			<input type="submit" value="Submit" id="submit"/></div>
			<?php
			//Confirm that the said data is deleted and displays a message to confirm
			if(ISSET($_SESSION["carID"])) {echo "<h2> Record deleted for". $_SESSION["modelName"]." </h2>";}
			session_destroy();
			?>
		</div>
	</div>
	<script type ="text/javascript" src = "js/popup.js"></script>
	<?php
	//Confirm that the said data is deleted and displays a message to confirm
	if(ISSET($_SESSION["carID"])) {echo "<h2> Record deleted for". $_SESSION["modelName"]." </h2>";}
	session_destroy();
	?>
	
</fieldset>
</form>
</section>
</div>
<!-- Main Container Ends -->
</body>
</html>
