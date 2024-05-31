<?php
  $userid = $_POST["userid"];
  $date = $_POST["date"];

  // Connect to database
  $conn = mysqli_connect("localhost", "root", "", "project_main");

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Check if date is given or not
    if($userid == "*")
    {
	$sql = "SELECT * FROM medical_history"; 
    } 
    else if ($date != "") {
    // Query to get medical history data for the given user ID and date
    $sql = "SELECT * FROM medical_history WHERE userid = '$userid' AND _date = '$date'";
  } else {
    // Query to get all medical history data for the given user ID
    $sql = "SELECT * FROM medical_history WHERE userid = '$userid'";
  }

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // Print the medical history data
    while ($row = mysqli_fetch_assoc($result)) {
      echo "User ID: " . $row["userid"] . "<br>";
      echo "Date: " . $row["_date"] . "<br>";
      echo "Description: " . $row["description"] . "<br>";
      echo "<br>";
    }
  } else {
    echo "No medical history data found for user ID " . $userid;
  }

  mysqli_close($conn);
?>
