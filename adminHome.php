<html><title>Administrator Home</title></html>

<?php
//Implemintation of the header and connection to the database
include 'connect.php';
include 'header.php';
?>

<?php
//Checks if the user is logged in in order to provide access
if(isset($_SESSION['adminLogId'])){
?>
    <h1>Welcome <?php echo $_SESSION['adminLogId']?>!</h1>
    <div id="button-admin">
        <div class="flex-row">
            <a href="/editRecFilter.php">
                <div class="box-admin">
                    <div class="box-text">Edit Records</div>
                </div>
            </a>
            <a href="/sports.php">
                <div class="box-admin">
                    <div class="box-text">View Records</div>
                </div>
            </a>
        </div>
</div>

<?php
}
else{
    header("location: adminSignIn.php");
}
?>

<?php
include 'footer.php';
?>