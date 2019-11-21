<!--Kyle Hennessy
	C00227463
	AmendCarDetails.html.php-->
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Amend/Car Details</title>
<link href="AmendCarDetails.css" rel="stylesheet" type="text/css">

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
<form name="AmendForm" action="AmendCarDetails.php" onsubmit="return confirmCheck()" method="post">
<!--creates fieldset-->
	
<fieldset>
<h1>Amend/View Car</h1><br/>
	
<h2>Please select a car and then click the amend button if you wish to update
	
<?php include 'listbox.php'; ?></h2>
<script>
function populate()
{
var sel= document.getElementById("listbox");
var result;
result =sel.options[sel.selectedIndex].value;
var carDetails=result.split(',');
document.getElementById("display").innerHTML="The details of the selected car are: "+result;
document.getElementById("amendid").value=carDetails[0];
document.getElementById("amendregistration").value=carDetails[1];
document.getElementById("amendmodel").value=carDetails[2];
document.getElementById("amendmanufacturer").value=carDetails[3];
document.getElementById("amendversion").value=carDetails[4];
document.getElementById("amendchassis").value=carDetails[5];
document.getElementById("amendcolour").value=carDetails[6];
document.getElementById("amendbody").value=carDetails[7];
document.getElementById("amenddate").value=carDetails[8];
}
function toggleLock()
{
if (document.getElementById("amendViewbutton").value=="Amend Details")
{
 document.getElementById("amendmodel").disabled=false;
 document.getElementById("amendchassis").disabled=false;
 document.getElementById("amendcolour").disabled=false;
 document.getElementById("amendbody").disabled=false;
 document.getElementById("amenddate").disabled=false;
 document.getElementById("amendViewbutton").value="View Details";
}
else
{
 document.getElementById("amendmodel").disabled=true;
 document.getElementById("amendchassis").disabled=true;
 document.getElementById("amendcolour").disabled=true;
 document.getElementById("amendbody").disabled=true;
 document.getElementById("amenddate").disabled=true;
 document.getElementById("amendViewbutton").value="Amend Details";
}
}
function confirmCheck()
{
var response;
response = confirm('Are you sure you want to save these changes?');
if(response)
{

 document.getElementById("amendmodel").disabled=false;
 document.getElementById("amendchassis").disabled=false;
 document.getElementById("amendcolour").disabled=false;
 document.getElementById("amendbody").disabled=false;
 document.getElementById("amenddate").disabled=false;
 return true;
}
else
{
 populate();
 toggleLock();
 return false;
}
}
</script>
<p id="display">should be displayed here</p>
<div class="amendbutton">
<input type = "button" value = "Amend Details" id = "amendViewbutton" onclick = "toggleLock()"/>

</div>
<div class="row">
	<div class="column">
		<!--<label for="amendid"><h2>ID number</h2> </label>
		<input type = "text" name ="amendid" id = "amendid" disabled/><br/><br/><br/>-->
		
		<label for="amendregistration"><h2>Registration Number</h2> </label>
		<input type = "text" name ="amendregistration" id = "amendregistration" disabled/><br/><br/><br/>

		<label for="amendmodel"><h2>Model Name</h2></label>
		<input type = "text" name = "amendmodel" id = "amendmodel" disabled /> <br/><br/><br/>

		<label for="amendmanufacturer"><h2>Manufactuerer</h2></label>
		<input type = "text" name = "amendmanufactuerer" id = "amendmanufacturer" disabled/><br/><br/><br/>

		<label for="amendversion"><h2>Version</h2> </label>
		<input type = "text" name = "amendversion" id = "amendversion"  disabled/><br/><br/><br/>
	</div>
	<div class ="column">

		<label for="amendchassis"><h2>Chassis Number</h2> </label>
		<input type = "text" name = "amendchassis" id = "amendchassis"  disabled/><br/><br/><br/>

		<label for="amendcolour"><h2>Colour</h2> </label>
		<input type = "text" name = "amendcolour" id = "amendcolour"  disabled/><br/><br/><br/>
		
		<label for="amendbody"><h2>Body Style</h2></label>
		<input type = "text" name = "amendbody" id="amendbody" disabled/><br/><br/><br/>

		<label for="amenddate"><h2>Date Added to Fleet</h2> </label>
		<input type = "date" name = "amenddate" id = "amenddate"  max="<?php echo date('Y-m-d');?>" disabled/>
	</div>
</div>

<span class="myButton">
<input type="button" value="Save" id="mybutton" />
</span>
	<!--pop up box-->
	<div id ="myPopup" class="popup">
		<!--pop up box content -->
		<div class="popup-content">
			<span class="close">&times;</span>
			<div align="center">Are you sure you want to amend carID
		<input type = "number" name ="amendid" id = "amendid" disabled/><br/><br/><br/> </div><br>
			<div class="myButton">
			<input type="submit" value="Submit" id="submit"/></div>
		</div>
	</div>
	<script type ="text/javascript" src = "js/popup.js"></script>
	
</fieldset>
</form>
</section>
</div>
<!-- Main Container Ends -->
</body>
</html>
