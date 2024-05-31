<?php
  $userid = $_POST["userid"];

  // Connect to database
  $conn = mysqli_connect("localhost", "root", "", "project_main");

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
	
  // Join three tables
$sql = "SELECT user_data.userid user_id, user_data.name user_name, relative_data.name relative_name, relative_data.phone_number
FROM user_data
JOIN related ON related.userid = user_data.userid
JOIN relative_data ON relative_data.rel_aadhar = related.rel_aadhar
WHERE user_data.userid = '$userid'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "user_id: " . $row["user_id"] . " - user_name: " . $row["user_name"] . " - relative_name: " . $row["relative_name"] . " - phone_number: " . $row["phone_number"] . "<br>";
    }
} else {
    echo "0 results";
}
  mysqli_close($conn);
?>
