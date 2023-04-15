<html><title>Edit Records Home</title></html>

<?php
//Implemintation of the header and connection to the database
include 'connect.php';
include 'header.php';

//Checks if the user is logged in in order to provide access
if(isset($_SESSION['adminLogId'])){?>
<h2><b>Which event would you like to edit?</b></h2>

<!-- Link boxes for each category of records -->
<div id="box-space" class="flex-column">
    <div class="flex-row">
    <a href="/editRec.php?sport=60m" class="box-link">
    <div class="editRec-box">
        <div class="editRec-box-text">60 Meters</div>
    </div>
    </a>
    <a href="/editRec.php?sport=800m" class="box-link">
    <div class="editRec-box">
        <div class="editRec-box-text">800 Meters</div>
    </div>
    </a>
    <a href="/editRec.php?sport=1500m" class="box-link">
    <div class="editRec-box">
        <div class="editRec-box-text">1500 Meters</div>
    </div>
    </a>
    <a href="/editRec.php?sport=1_lap" class="box-link">
    <div class="editRec-box">
        <div class="editRec-box-text">1 Lap</div>
    </div>
    </a>
    <a href="/editRec.php?sport=2_lap" class="box-link">
    <div class="editRec-box">
        <div class="editRec-box-text">2 Lap</div>
    </div>
    </a>
</div>
    <div class="flex-row">
    <a href="/editRec.php?sport=relay" class="box-link">
    <div class="editRec-box">
        <div class="editRec-box-text">Relay</div>
    </div>
    </a>
    <a href="/editRec.php?sport=high_jump" class="box-link">
    <div class="editRec-box">
        <div class="editRec-box-text">High Jump</div>
    </div>
    </a>
    <a href="/editRec.php?sport=long_jump" class="box-link">
    <div class="editRec-box">
        <div class="editRec-box-text">Long Jump</div>
    </div>
    </a>
    <a href="/editRec.php?sport=javelin" class="box-link">
    <div class="editRec-box">
        <div class="editRec-box-text">Javelin</div>
    </div>
    </a>
    <a href="/editRec.php?sport=shot_put" class="box-link">
    <div class="editRec-box">
        <div class="editRec-box-text">Shot Put</div>
    </div>
    </a>
    </div>
</div>
<?php
}
else{
    header("location: noAccess.php");
}
include 'footer.php';
?>