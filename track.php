<html><title>Track Events</title></html>

<?php
//Implemintation of the header and connection to the database
include 'connect.php';
include 'header.php';
?>

<h1><b>Track Events</b></h1>

<div id="box-space" class="flex-column">
    <div class="flex-row">
    <a href="/60m.php">
    <div class="box">
        <div class="box-text">60 Meters</div>
    </div>
    </a>
    <a href="800m.php">
    <div class="box">
        <div class="box-text">800 Meters</div>
    </div>
    </a>
    <a href="/1500m.php">
    <div class="box">
        <div class="box-text">1500 Meters</div>
    </div>
    </a>
</div>
    <div class="flex-row">
    <a href="/1lap.php">
    <div class="box">
        <div class="box-text">1 Lap</div>
    </div>
    </a>
    <a href="/2laps.php">
    <div class="box">
        <div class="box-text">2 Laps</div>
    </div>
    </a>
    <a href="/relay.php">
    <div class="box">
        <div class="box-text">Relay</div>
    </div>
    </a>
    </div>
</div>

<?php
include 'footer.php';
?>