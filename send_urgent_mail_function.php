<?php
if (isset($_POST['send_location'])) {
	$lat = $_POST['lat'];
	$lon = $_POST['lon'];
	$location = "Latitude: " . $lat . " Longitude: " . $lon;

	// Connect to the database
	$conn = mysqli_connect("localhost", "root", "", "project_main");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Fetch the selected email ID from the database
	$email = "SELECT email_id FROM admin_email";
	$result = mysqli_query($conn, $email);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$email_id = $row['email_id'];

			// Compose the email
			$to = $email_id;
			$subject = "Location Alert";
			$message = "The user's current location is: " . $location;
			$headers = "From: no-reply@example.com";

			// Send the email
			mail($to, $subject, $message, $headers);
			echo "Location sent to " . $email_id . "<br>";
		}
	}
}
?>
