<html><title>Sports</title></html>

<?php
//Implemintation of the header and connection to the database
include 'connect.php';
include 'header.php';
?>

<div id="sports" class="flex-sports">
    <div>
        <div><b>Track Events</b></div>
        <a href="/track.php"><img class="track-img" src="images/track.png" width="300" height="300"></a>
    </div>
    <div>
        <div><b>Field Events</b></div>
        <a href="/field.php"><img class="field-img" src="images/field.jpg" width="300" height="300"></a>
    </div>
</div>
        


<?php
include 'footer.php';
?>