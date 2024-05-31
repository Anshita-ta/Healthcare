<?php
  $date = $_POST["date"];

  // Connect to database
  $conn = mysqli_connect("localhost", "root", "", "project_main");

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Check if date is given or not
  
  if ($date != "") {
    // Query to get medical history data for the given user ID and date
    $sql = "SELECT order_id, medicine_name, quantity, order_date FROM order_list WHERE order_date = '$date'";
  } else {
    // Query to get all medical history data for the given user ID
    $sql = "SELECT order_id, medicine_name, quantity, order_date FROM order_list";
  }

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // Print the medical history data
    while ($row = mysqli_fetch_assoc($result)) {
      echo "Order ID: " . $row["order_id"] . "<br>";
      echo "Medicine Name " . $row["medicine_name"] . "<br>";
      echo "Quantity " . $row["quantity"] . "<br>";
      echo "Date" . $row["order_date"] . "<br>";
      echo "<br>";
    }
  } else {
    echo "No medical history data found for user ID " . $userid;
  }

  mysqli_close($conn);
?>
