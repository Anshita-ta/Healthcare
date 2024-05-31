<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_main";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the latest ID from the table
$sql = "SELECT MAX(order_id) as latest_id FROM order_list";
$result = mysqli_query($conn, $sql);
$current_date = date('Y-m-d');

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $latest_id = $row["latest_id"];
}

// Generate the new ID based on the latest ID
$new_id = $latest_id + 1;

if (isset($_POST['submit'])) {
    $userid = $_POST['userid'];
    $medicine_name= $_POST['name'];
    $quantity= $_POST['quantity'];
    $sql = "INSERT INTO order_list (order_id, userid, medicine_name, order_date, quantity)

    VALUES ('$new_id', '$userid', '$medicine_name', '$current_date', '$quantity')";

    if ($quantity > 0 && $conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>
