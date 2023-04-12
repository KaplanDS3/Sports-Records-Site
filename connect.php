<?php
date_default_timezone_set('America/Mexico_City');

//Database connection
$conn = mysqli_connect("127.0.0.1","root","","sports");

//Debug
if(mysqli_connect_error()){
    echo "Cannot Connect";
}

?>