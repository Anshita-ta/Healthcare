<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_main";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $mhid = $_POST['mhid'];
    $userid = $_POST['userid'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $date_arr = explode("-", $date);
    $sql = "INSERT INTO medical_history (mhid, userid, _date, description)
    VALUES ('$mhid', '$userid', '$date', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>
