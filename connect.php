<?php
date_default_timezone_set('America/Mexico_City');
//connect.php

mysqli_connect("127.0.0.1","root","","account");

if(mysqli_connect_error()){
    echo "Cannot Connect";
}
else{
    echo "Successful Connection!";
}

?>