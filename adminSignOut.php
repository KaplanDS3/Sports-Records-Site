<?php
    //Ends the session and immediatelly sends the user to the home page
    session_start();
    session_destroy();
    header("location: index.php");
?>