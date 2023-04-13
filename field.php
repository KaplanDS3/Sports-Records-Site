<html><title>Field Events</title></html>

<?php
//Implemintation of the header and connection to the database
include 'connect.php';
include 'header.php';
?>

<h1><b>Field Events</b></h1>

<div id="box-space" class="flex-column">
    <div class="flex-row">
    <a href="/viewRec.php?sport=high_jump">
    <div class="box">
        <div class="box-text">High Jump</div>
    </div>
    </a>
    <a href="/viewRec.php?sport=long_jump">
    <div class="box">
        <div class="box-text">Long Jump</div>
    </div>
</div>
    <div class="flex-row-bottom">
    <a href="/viewRec.php?sport=javelin">
    <div class="box">
        <div class="box-text">Javelin</div>
    </div>
    </a>
    <a href="/viewRec.php?sport=shot_put">
    <div class="box">
        <div class="box-text">Shot Put</div>
    </div>
    </a>
</div>

<?php
include 'footer.php';
?>