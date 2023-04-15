<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!-- Link to the stylesheet -->
	<link rel="stylesheet" href="css\style.css" type="text/css">
</head>
<body>
	<!-- Start of header -->
	<div id="header">
	<a href="/index.php" id="header">
	
		<div id="header" class="heading">
			<img class="logo-heading" src="images/header_logo.png">
				<div class="inner-heading">
					<div class="first-line">School</div>
					<div class="second-line">Athletic Records</div>
				</div>
		</div>

		
		</a>
	<div id="wrapper">
	    <div id="menu"> <!-- Heading menu buttons -->
		    <a class="item-no-heading-1" href="/index.php">Home</a>
		<div class="section-block">
			 <div class="item-heading">Athletic Records</div>
			 <a class="item" href="sports.php">Sports</a>
		</div>
		<div class="section-block">
			<div class="item-heading">About</div>
			 <a class="item" href="about.php">About Us</a>
		</div>
		
<?php
//Checks if the user is signed in and changes the "Administrator Sign In" button accordingly
include '/adminHeader.php';

?>
	    </div>
    </div>
</div>
<div><hr></div>

<!-- End of Header -->
		<div id="content">