<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project_main";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $rel_aadhar = $_POST["rel_aadhar"];
    $phone_number = $_POST["phone_number"];

    $sql = "INSERT INTO relative_data (name, rel_aadhar, phone_number)
    VALUES ('$name', '$rel_aadhar', '$phone_number')";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  mysqli_close($conn);
?>

