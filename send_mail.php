<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
	// Fetch the selected email ID from the database
	$email = "SELECT email_id FROM admin_email"; 
	$userid = $_POST["userid"];
	$location = $_POST['location'];
	$conn = mysqli_connect("localhost", "root", "", "project_main");

  	if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
  	}


	$result = mysqli_query($conn, $email);
	if(mysqli_num_rows($result )> 0 )
	{
		// Get the user's current location
	
		while($row = mysqli_fetch_assoc($result))
		{
			$email_id = $row['email_id'];


			// Compose the email
			$to = $email_id;
			$subject = "Alert";
			$message = "This is an alert from ".$userid." Their current location is: ".$location;
			$headers = "From: no-reply@example.com";
	
			// Send the email
			mail($to, $subject, $message, $headers);

			echo "Email sent to ".$email_id;
		}
	}
}
?>


