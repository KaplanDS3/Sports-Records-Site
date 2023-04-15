<?php
//Checks if the user is signed in to change the "sign in" button accordingly
session_start();
if(isset($_SESSION['adminLogId'])){
?>
    <!-- Changing the "sign in" button on the header to that of "sign out" and adding an additional "home" button whenever this page is called -->
    <div class="flex-signout">
        <a class="item-no-heading-2" id="sign-out" href="/adminSignOut.php">Sign Out</a>
        <a class="item-no-heading-2" id="admin-home-link" href="/adminHome.php">Admin HomePage</a>
    </div>
<?php
}
else{
?>
    <a class="item-no-heading-1" id="sign-in" href="/adminSignIn.php">Administrator Sign In</a>
<?php
}
?>