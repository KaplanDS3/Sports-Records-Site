<html><title>Redirecting...</title></html>

<?php
//Implemintation of the header and connection to the database
include 'connect.php';
include 'header.php';
?>

<h1>Administrator Access Only.</h1>
<h2>Redirecting back to the home page.</h2>

<!-- Redirect function back to the home page -->
<script>
let counter=1;

setInterval(()=>{
    counter++;
    if(counter==5) location.replace('/index.php');
},1000)
</script>

<?php
include 'footer.php';
?>