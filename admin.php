<html>
  <head>
    <link rel="stylesheet" type="text/css" href="add_user_data_form.css">
    <link rel="stylesheet" type="text/css" href="home.css">
   </head>
  <body>
	<div class="navbar">
		<div>
			<a href="profile.php">Profile</a>
			<a href="#">Home</a>
		</div>
		<div>
			<a href="login_form.php">Logout</a>
		</div>
	</div>
		

    <button class="admin-btn" id="add-user-data-button">Add User Data</button>
    <form id="add-user-data-form" style="display: none;" action="admin.php" method="post">
      <label>User ID:</label>
      <input type="text" name="userid" required>
      <br><br>
      <label>Name:</label>
      <input type="text" name="name" required>
      <br><br>
      <label>Phone Number:</label>
      <input type="text" name="phone_number" required>
      <br><br>
      <label>Department:</label>
      <input type="text" name="department" required>
      <br><br>
      <label>Academic Year:</label>
      <input type="text" name="academic_year" required>
      <br><br>
      <!--<label>Relative Aadhaar:</label>
      <input type="text" name="rel_aadhar" required>
      <br><br>-->
      <label>Hostel:</label>
      <input type="text" name="hostle" required>
      <br><br>
      <input type="submit" value="Submit" name = "submit">
    </form>

<?php
  if (isset($_POST['submit'])) {
    // form was submitted, call addUser function
    addUser($_POST);
  }

  function addUser($data) {
    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "project_main");

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare data for insertion
    $userid = mysqli_real_escape_string($conn, $data['userid']);
    $name = mysqli_real_escape_string($conn, $data['name']);
    $phone_number = mysqli_real_escape_string($conn, $data['phone_number']);
    $department = mysqli_real_escape_string($conn, $data['department']);
    $academic_year = mysqli_real_escape_string($conn, $data['academic_year']);
   // $rel_aadhar = mysqli_real_escape_string($conn, $data['rel_aadhar']);
    $hostle = mysqli_real_escape_string($conn, $data['hostle']);

    // Insert data into user_info table
    $sql = "INSERT INTO user_data (userid, name, phone_number, department, academic_year, hostle)
            VALUES ('$userid', '$name', '$phone_number', '$department', '$academic_year', '$hostle')";

    if (mysqli_query($conn, $sql)) {
      echo "Data inserted successfully.";
    } else {
      echo "Error inserting data: " . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
  }
?>		
<?php include('relative_input_form.php') ?> 
<?php include('medical_history_form.php') ?> 
<?php include('login_input_form.php') ?>  
<?php include('user_emergency_contacts_form.php') ?>   
<?php include('view_medical_history_form.php') ?>   
<?php include('get_all_relatives_form.php') ?>   
<?php include('get_from_order_list_form.php') ?>   
 
    <script>

	document.getElementById("add-user-data-button").addEventListener("click", function() {
  		var form = document.getElementById("add-user-data-form");
  		if (form.style.display === "block") {
    			form.style.display = "none";
  		} else {
    			form.style.display = "block";
 	 	}
	});

    </script>  
  </body>
</html>
