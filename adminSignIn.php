<html><title>Administrator Sign In</title></html>

<?php
//signin.php
require 'connect.php';
include 'header.php';

?>
<h1>Sign In</h1>
            <!-- Sign In form -->
		  <form method="POST" id="log-in-box">
			<div class="log-in-fields">
				<div class="username-heading"><b>Username:</b></div>
				<input class="username" type="text" name="user_name" required placeholder="..."/>
				<div class="password-heading"><b>Password:</b></div>
				<div class="password-box">
				<input id="password" type="password" name="user_pass" required placeholder="...">
				<img id="eye" src="img/eye-close.png" width="15" height="10">
				</div>
                <div class="forgot-pass"><a href="#">Forgot Password?</a></div>
				<div id="sign-in-button">
                <input class="sign-in-button" type="submit" value="Sign in" name="Signin">
		</div>
		<div>Only administrator credentials are allowed</div>
			</div>
			
		 </form>

		 <!-- Show and hide password function -->
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

if(isset($_POST['Signin'])){
    $query="SELECT * FROM `admin_login` WHERE `username`='".mysqli_real_escape_string($conn,$_POST['user_name'])."' AND `password`='".mysqli_real_escape_string($conn,$_POST['user_pass'])."'";
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result)==1){
            echo "correct";
        }
        else{
            echo "<script>alert('Incorrect Password');</script>";
        }
    }
    else{
        echo "Query failed: ".mysqli_error($conn);
    }
}
    

	
?>

<?php
include 'footer.php';
?>