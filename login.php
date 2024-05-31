<?php
$servername = "localhost";
$username = "root";
$password = "";
//$dbname = "login_info";
$dbname = "project_main";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$user_type = $_POST['user_type'];

	$query = "SELECT * FROM login WHERE user_id = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $query);
	
	if (mysqli_num_rows($result) > 0)
	{

		if($user_type == 'admin')
		{
			header("Location: admin.php");
		}
		else
		{
			header("Location: home.php");
		}
		exit();
	} 
	else 
	{
		echo "Login failed";
	}
}
?>
