<html><title>Edit Records</title></html>

<?php
//Implemintation of the header and connection to the database
include 'connect.php';
include 'header.php';
?>

<h2><b>Which event would you like to edit?</b></h2>

<div id="box-space" class="flex-column">
    <div class="flex-row">
    <a href="/60m.php">
    <div class="editRec-box">
        <div class="editRec-box-text">60 Meters</div>
    </div>
    </a>
    <a href="800m.php">
    <div class="editRec-box">
        <div class="editRec-box-text">800 Meters</div>
    </div>
    </a>
    <a href="/1500m.php">
    <div class="editRec-box">
        <div class="editRec-box-text">1500 Meters</div>
    </div>
    </a>
    <a href="/1500m.php">
    <div class="editRec-box">
        <div class="editRec-box-text">1 Lap</div>
    </div>
    </a>
    <a href="/1500m.php">
    <div class="editRec-box">
        <div class="editRec-box-text">2 Lap</div>
    </div>
    </a>
</div>
    <div class="flex-row">
    <a href="/1lap.php">
    <div class="editRec-box">
        <div class="editRec-box-text">Relay</div>
    </div>
    </a>
    <a href="/2laps.php">
    <div class="editRec-box">
        <div class="editRec-box-text">High Jump</div>
    </div>
    </a>
    <a href="/relay.php">
    <div class="editRec-box">
        <div class="editRec-box-text">Long Jump</div>
    </div>
    </a>
    <a href="/1500m.php">
    <div class="editRec-box">
        <div class="editRec-box-text">Javelin</div>
    </div>
    </a>
    <a href="/1500m.php">
    <div class="editRec-box">
        <div class="editRec-box-text">Shot Put</div>
    </div>
    </a>
    </div>
</div>

<?php
include 'footer.php';
?>