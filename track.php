<html><title>Track Events</title></html>

<?php
//Implemintation of the header and connection to the database
include 'connect.php';
include 'header.php';
?>

<h1><b>Track Events</b></h1>

<!-- Link boxes for each category of records -->
<div id="box-space" class="flex-column">
    <div class="flex-row">
    <a href="/viewRec.php?sport=60m" class="box-link">
    <div class="box">
        <div class="box-text">60 Meters</div>
    </div>
    </a>
    <a href="/viewRec.php?sport=800m" class="box-link">
    <div class="box">
        <div class="box-text">800 Meters</div>
    </div>
    </a>
    <a href="/viewRec.php?sport=1500m" class="box-link">
    <div class="box">
        <div class="box-text">1500 Meters</div>
    </div>
    </a>
</div>
    <div class="flex-row">
    <a href="/viewRec.php?sport=1_lap" class="box-link">
    <div class="box">
        <div class="box-text">1 Lap</div>
    </div>
    </a>
    <a href="/viewRec.php?sport=2_lap" class="box-link">
    <div class="box">
        <div class="box-text">2 Laps</div>
    </div>
    </a>
    <a href="/viewRec.php?sport=relay" class="box-link">
    <div class="box">
        <div class="box-text">Relay</div>
    </div>
    </a>
    </div>
</div>

<?php
include 'footer.php';
?>