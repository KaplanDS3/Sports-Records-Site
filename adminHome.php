<html><title>Admin Home</title>

<?php
//Implemintation of the header and connection to the database
include 'connect.php';
include 'header.php';
?>

<?php
if(isset($_SESSION['adminLogId'])){
?>
    <h1>Welcome <?php echo $_SESSION['adminLogId']?>!</h1>
<a href="/editRec.php">
    <div class="box-admin">
        <div class="box-text">Edit Records</div>
    </div>
</a>




<?php
}
else{
    header("location: adminSignIn.php");
}
?>

<?php
include 'footer.php';
?>
</html>