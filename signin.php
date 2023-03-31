<html><title>Sign In</title></html>

<?php
//signin.php
require 'connect.php';
include 'header.php';

echo '<h1>Sign In</h1>';

//first, check if the user is already signed in. If that is the case, there is no need to display this page
if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
	echo 'You are already signed in, you can <a href="signout.php">sign out</a> if you want.';
}
else
{
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		/*the form hasn't been posted yet, display it
		  note that the action="" will cause the form to post to the same page it is on */
		?>	

		  <form method="POST" action="" id="log-in-box">
			<div class="log-in-fields">
				<div class="username-heading"><b>Username:</b></div>
				<input class="username" type="text" name="user_name" required placeholder="..."/>
				<div class="password-heading"><b>Password:</b></div>
				<div class="password-box">
				<input id="password" type="password" name="user_pass" required placeholder="...">
				<img id="eye" src="img/eye-close.png" width="15" height="10">
				</div>
				<div id="sign-in-button">
			<input class="sign-in-button" type="submit" value="Sign in" />
		</div>
		<div>Only administrator credentials are allowed</div>
			</div>
			
		 </form>

		 <script>
			let eyeicon = document.getElementById("eye");
			let password = document.getElementById("password");

			eyeicon.onclick = function(){
				if (password.type == "password"){
					password.type = "text";
					eyeicon.src = "img/eye-open.png";
				}
				else{
					password.type = "password";
					eyeicon.src = "img/eye-close.png";
				}
			}

		</script>

		 

		 <?php
	}
	else
	{
			//the form has been posted without errors, so save it
			//notice the use of mysql_real_escape_string, keep everything safe!
			//also notice the sha1 function which hashes the password
			
			$username = $mysqli -> real_escape_string($_POST['user_name']);
			$userpass = sha1($_POST['user_pass']);
			$sql = "SELECT 
						user_name,
						user_level
					FROM
						users
					WHERE
						user_name = '" . $username . "'
					AND
						user_pass = '" . $userpass . "'";
						
			$result = $mysqli -> query($sql);
			if (!$result) {
				//something went wrong, display the error
				echo 'Something went wrong while signing in. Please try again later.';
				//echo mysql_error(); //debugging purposes, uncomment when needed
			}
			else {
				//the query was successfully executed, there are 2 possibilities
				//1. the query returned data, the user can be signed in
				//2. the query returned an empty result set, the credentials were wrong
				if($result -> num_rows == 0)
				{
					echo 'You have supplied a wrong user/password combination. Please try again.';
				}
				else
				{
					//set the $_SESSION['signed_in'] variable to TRUE
					$_SESSION['signed_in'] = true;
					
					//we also put the user_id and user_name values in the $_SESSION, so we can use it at various pages
					while($row = $result -> fetch_row())
					{
						$_SESSION['user_id'] 	= $row[0];
						$_SESSION['user_name'] 	= $row[1];
						$_SESSION['user_level'] = $row[2];
					}

					echo 'Welcome, ' . $_SESSION['user_name'] . ' <a href="index.php">Proceed to the forum overview</a>.';
				}
			}
		
	}
}

?>