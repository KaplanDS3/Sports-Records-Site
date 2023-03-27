<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="A short description." />
	<meta name="keywords" content="put, keywords, here" />
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<div class="header">
	<a href="/index.php" class="heading-top">
	
		<ul id="header" class="header-logo">
			<li><img src="greengates-school-logo.png" width="100" height="100"></li>
			<li>
				<ul>
					<li><h1>Sample School</h1></li>
					<li><h2>Sports Records</h2></li>
				</ul>
			</li>
		</ul>
		
		</a>
	<div id="wrapper">
	    <div id="menu">
		    <a class="item" id="home" href="/index.php">Home</a>
<?php

  session_start();

if (isset($_SESSION['signed_in'])) {
	echo 'Hello' . $_SESSION['user_name'];
	echo '<a class="item" id="sign-in" href="/signout.php" style="float: right;">Sign out</a>';
} else {
    echo '<a class="item" id="sign-in" href="/signin.php" style="float: right;">Administrator Sign In</a>';
}
?>
	    </div>
    </div>
</div> <!-- Close Header -->

<!--  HEADER ENDS  -->
		<div id="content">