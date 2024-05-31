<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project_main";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) 
  {
      die("Connection failed: " . mysqli_connect_error());
  }
  if (isset($_POST['submit']))
  {
 	 $userid = $_POST['userid'];
  	 $password = $_POST['password'];

 	 $check_user_query = "SELECT * FROM login WHERE user_id = '$userid'";
  	 $result = $conn->query($check_user_query);

  	 if ($result->num_rows > 0) 
	 {
   		 // Update the password if the userid already exists
    	 	$update_query = "UPDATE login SET password = '$password' WHERE user_id = '$userid'";
    	 	if ($conn->query($update_query) === TRUE)
		{
      			echo "Password updated successfully for userid: $userid";
    		}
		else
		{
		        echo "Error updating password: " . $conn->error;
    		}
  	}
	else
	{
    		// Insert a new user if the userid does not exist
    		$insert_query = "INSERT INTO login (user_id, password) VALUES ('$userid', '$password')";
    		if ($conn->query($insert_query) === TRUE) 
		{
      			echo "New user added successfully with userid: $userid";
    		}
		else
		{
      			echo "Error adding user: " . $conn->error;
    		}
  	}

 	 $conn->close();
 }
