<?php

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "project_main");

// Function to add user data
function addUserData($userid, $name, $phone_number = NULL, $department = NULL, $academic_year, $rel_aadhar = NULL, $hostle) {
  global $conn;

  //$hostle = $hostle ? true : false; 
 
  $sql = "INSERT INTO user_data (userid, name, phone_number, department, academic_year, rel_aadhar, hostle)
          VALUES ('$userid', '$name', '$phone_number', '$department', '$academic_year', '$rel_aadhar', '$hostle')";
  if (mysqli_query($conn, $sql)) {
      return true;
  } else {
   return false;
  }
}

if(isset($_POST['userid']) && isset($_POST['name']) && isset($_POST['hostle']) && isset($_POST['academic_year']))
{
	$userid = $_POST['userid'];
	$name = $_POST['name'];
	$phone_number = $_POST['phone_number'];
	$department = $_POST['department'];
	$academic_year = $_POST['academic_year'];
	$rel_aadhar = $_POST['rel_aadhar'];
	$hostle = $_POST['hostle'];

	$success = addUserData($userid, $name, $phone_number, $department, $academic_year, $rel_aadhar, $hostle);
	if($success)
	{
	   echo "User Data Successfully Inserted";
	}
	else
	{
	   echo "User Data Insertion failed";
	}
}  

?>
