<?php

include 'connect.php';
include 'header.php';  

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
        //Save the information stored to the database
        $sport = $conn->real_escape_string($_POST['sport']);
        $sport_id = $conn->real_escape_string($_POST['sport_id']);
        $holder = $conn->real_escape_string($_POST['holder']);
        $record = $conn->real_escape_string($_POST['record']);
        $year = $conn->real_escape_string($_POST['year']);
        $sport_type = $conn->real_escape_string($_POST['sport_type']);

        $sql = "UPDATE sports SET holder = '" . $holder . "', record = '" . $record . "', year = '" . $year . "'  WHERE ID = " . $sport_id;

        $result = $conn->query($sql);
        if (!$result) {
            //Error message
            echo 'Something went wrong while signing in. Please try again later.';
            echo $conn->$errors;
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

$result = $conn->query($sql);

if (!$result) {
    echo 'The sports could not be displayed, please try again later.';
//Records Table
} else {
    if ($result->num_rows == 0) {
        echo 'No categories defined yet.';
    } else {
        echo '<div class="table_container">';
        echo '<form action="editRec.php" method="post">';
        echo '<table  class="sports_table">';
        echo '<thead><tr><th>ID</th><th>Sport</th><th>Sport Type</th><th>Event</th><th>Holder</th><th>Record</th><th>Year</th></tr></thead>';
        while($row = $result -> fetch_assoc())
        {
            echo '<tr>';
            echo '<td><input type="radio" name="sport_id" value="'. $row['ID'] .'">'. $row['ID'] .'</td>';
            echo '<td>'. $row['Sport'] .'</td>';
            echo '<td>'. $row['Sport_Type'] .'</td>';
            echo '<td>'. $row['Event'] .'</td>';
            echo '<td>'. $row['Holder'] .'</td>';
            echo '<td>'. $row['Record'] .'</td>';
            echo '<td>'. $row['Year'] .'</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '<div class="update_fields">';
        echo '<input type="hidden" name="sport_type" id="sport_type" value="'. $sport_type .'"><br>';
        echo '<input type="hidden" name="sport" id="sport" value="'. $sport .'"><br>';
        echo '<label for="holder">HOLDER</label><input type="text" name="holder" id="holder" value=""><br>';
        echo '<label for="record">RECORD</label><input type="text" name="record" id="record" value=""><br>';
        echo '<label for="year">YEAR</label><input type="text" name="year" id="year" value=""><br>';
        echo '<input type="submit" name="Update" id="year" value="Update"><br>';
        echo '</div>';
        echo '</form>';
        echo '</div>';
    }
}

include 'footer.php'
?>