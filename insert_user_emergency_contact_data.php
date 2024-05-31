<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project_main";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST["submit"])) {
      $userid = $_POST["userid"];
      $rel_aadhar = $_POST["rel_aadhar"];
      $sql = "INSERT INTO related (userid, rel_aadhar) VALUES ('$userid', '$rel_aadhar')";

      if (mysqli_query($conn, $sql)) {
          echo "Record added successfully";
      } else {
          echo "Error adding record: " . mysqli_error($conn);
      }
  }

  mysqli_close($conn);
?>
