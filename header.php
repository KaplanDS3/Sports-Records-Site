<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<!-- Start of Header -->
	<div id="header">
	<a href="/index.php" id="header">
	
		<div id="header" class="heading">
			<img class="logo-heading" src="header_logo.png">
				<div class="inner-heading">
					<div class="first-line">School</div>
					<div class="second-line">Athletic Records</div>
				</div>
		</div>

		
		</a>
	<div id="wrapper">
	    <div id="menu">
		    <a class="item-home" href="/index.php">Home</a>
		<div class="section-block">
			 <div class="item-heading">Athletic Records</div>
			 <a class="item" href="/sports">Sports</a>
		</div>
<?php

  session_start();

if (isset($_SESSION['signed_in'])) {
	echo '<a class="item" id="sign-in" href="/signout.php" style="float: right;">Sign Out</a>';
} else {
    echo '<a class="item" id="sign-in" href="/signin.php" style="float: right;">Administrator Sign In</a>';
}
?>
	    </div>
    </div>
</div>

<!-- End of Header -->
		<div id="content">