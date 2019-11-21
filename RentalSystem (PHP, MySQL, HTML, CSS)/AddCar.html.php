<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Car</title>
<link href="AddCar.css" rel="stylesheet" type="text/css">
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
<!--creates form-->
<form action ="AddCar.php" method="post">
<!--creates border of form-->
<fieldset>
	<h1>Add New Car</h1><br/>
	<!--Name field in form has autocomplete so that it automatically fills in name if form was used before-->
<div class="row">
	<div class="column">
		<label for="registrationNumber"><h2> Registration Number</h2></label>
		<input type="text" name="registrationNumber" required placeholder="e.g 07-CW-12345" id="registrationNumber" pattern="[0-9]{2,3}-[A-Z]{1,2}-[0-9]{1,5}"  required /> <br/><br/><br/>
							
		<h2> Model Name
		<?php include 'modellistbox.php' ?></h2><br/><br/><br/><br/><br/>

		<label for="colour"><h2> Colour</h2></label>
		<input type="text" name="colour" required placeholder="Enter colour of car" id="hours" required/><br/><br/><br/>

		<label for="chassisNumber"><h2> Chassis Number</h2></label>
		<input type="number" name="chassisNumber" required placeholder="Enter Chassis number" id="chassisNumber" pattern="[0-9]{6}" required/> <br/><br/><br/>
	</div>
	
	<div class="column">
		<h2> Body Style</h2>
		
		<select name="bodylist" id="bodylist">
			<option value="hatchback">Hatchback</option>
			<option value="saloon">Saloon</option>
			<option value="mpv">MPV</option>
			<option value="suv">SUV</option>
			<option value="crossover">Crossover</option>
			<option value="coupe">Coupe</option>
			<option value="convertable">Convertable</option>
		</select>
		
		<br/><br/><br/><br/><br/>
			

		<label for="numberOfDoors"><h2> Number of Doors</h2></label>
		<input type="number" name="numberOfDoors" required placeholder="Enter number of doors" id="numberOfDoors" required/> <br/><br/><br/>

		<label for="purchasePrice"><h2> Purchase Price</h2></label>
		<input type="number" name="purchasePrice" required placeholder="Enter price of car" id="purchasePrice" required min="0"/> <br/><br/><br/>
		
		
		<label for="dateAdded"><h2> Date Added to Fleet</h2></label>
		<input type="date" name="dateAdded" required placeholder="date car was added" id="dateAdded"required max="
			   <?php 
				echo date('Y-m-d');
			   ?>"
			   /> <br/><br/><br/>
		
		
	</div>
</div>
<!--div class for button to send form-->	
<div class="myButton">
<input type="button" value="Add New Car" id="mybutton" />
</div>
	<!--pop up box-->
	<div id ="myPopup" class="popup">
		<!--pop up box content -->
		<div class="popup-content">
			<span class="close">&times;</span>
			<div align="center">Are you sure you want to add these details?</div><br>
			<div class="myButton">
			<input type="submit" value="Submit" id="submit"/></div>
		</div>
	</div>
	<script type ="text/javascript" src = "js/popup.js"></script>
	
</fieldset>
</form>
</div>
</div>
</section>
</div>
<!-- Main Container Ends -->
</body>
</html>

