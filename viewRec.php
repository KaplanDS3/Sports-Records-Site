<html><title>View Records</title></html>
<?php

//index.php
include 'connect.php';  // Database setting and connection
include 'header.php';   // The header for the page

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = array(); /* declare the array for later use */

    if (!isset($_POST['sport_type'])) {
        $errors[] = 'You must select a record to update';
    }

    if (!isset($_POST['sport_id'])) {
        $errors[] = 'You must select a record to update';
    }

    if (!isset($_POST['holder'])) {
        $errors[] = 'The holder of the record must not be empty.';
    }

    if (!isset($_POST['record'])) {
        $errors[] = 'The record value must not be empty.';
    }

    if (!isset($_POST['year'])) {
        $errors[] = 'The year value must not be empty.';
    }

    if (!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/ {
        echo 'Uh-oh.. a couple of fields are not filled in correctly..';
        echo '<ul>';
        foreach ($errors as $key => $value) /* walk through the array so all the errors get displayed */ {
            echo '<li>' . $value . '</li>'; /* this generates a nice error list */
        }
        echo '</ul>';
    } else {
        //the form has been posted without errors, so save it
        //notice the use of mysql_real_escape_string, keep everything safe!
        //also notice the sha1 function which hashes the password
        $sport = $conn->real_escape_string($_POST['sport']);
        $sport_id = $conn->real_escape_string($_POST['sport_id']);
        $holder = $conn->real_escape_string($_POST['holder']);
        $record = $conn->real_escape_string($_POST['record']);
        $year = $conn->real_escape_string($_POST['year']);
        $sport_type = $conn->real_escape_string($_POST['sport_type']);

        $sql = "UPDATE sports SET holder = '" . $holder . "', record = '" . $record . "', year = '" . $year . "'  WHERE ID = " . $sport_id;

        $result = $conn->query($sql);
        if (!$result) {
            //something went wrong, display the error
            echo 'Something went wrong while signing in. Please try again later.';
        } else {
            echo "<h3>Record successfully updated</h3>";
        }

    }
} else {
    if (isset($_GET['sport_type'])) {
        $sport_type =  $conn->real_escape_string($_GET['sport_type']);
    } else {
        $sport_type = '%';
    }
    if (isset($_GET['sport'])) {
        $sport =  $conn->real_escape_string($_GET['sport']);
    } else {
        $sport = '%';
    }
}

$sql = "SELECT
            `ID`,
	        `Sport`,
	        `Sport_Type`,
	        `Event`,
	        `Holder`,
	        `Record`,
	        `Year`
        FROM
            sports
        WHERE
            Sport_type LIKE '". $sport_type."'
            AND sport LIKE '". $sport."'";

// echo $sql;
$result = $conn->query($sql);

if (!$result) {
    echo 'The sports could not be displayed, please try again later.';
} else {
    if ($result->num_rows == 0) {
        echo 'No categories defined yet.';
    } else {
        echo '<div class="view-table_container">';
        echo '<form action="editRec.php" method="post">';
        echo '<table class="view-sports_table">';
        echo '<thead><tr><th>Sport</th><th>Grade</th><th>Type</th><th>Holder</th><th>Record</th><th>Year</th></tr></thead>';
        while($row = $result -> fetch_assoc())
        {
            echo '<tr>';
            echo '<td>'. $row['Sport'] .'</td>';
            echo '<td>'. $row['Event'] .'</td>';
            echo '<td>'. $row['Sport_Type'] .'</td>';
            echo '<td>'. $row['Holder'] .'</td>';
            echo '<td>'. $row['Record'] .'</td>';
            echo '<td>'. $row['Year'] .'</td>';
            echo '</tr>';
        }
    }
}
?>