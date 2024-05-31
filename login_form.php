<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="login_form.css">
</head>
<body>
	
	<form action="login.php" method="post">
		<h1>Login Form</h1>
		<label for="user_type">User Type:</label>
		<input type="radio" id="Admin" name="user_type" value="admin">
		<label for="admin">Admin</label>
		<input type="radio" id="Student" name="user_type" value="student" checked>
		<label for="employee">Student</label>
		<!-- <input type="radio" id="Facalty" name="user_type" value="facalty"> -->
		<label for="customer">/ Faculty</label>

		<!-- <label for="username">Username:</label> -->
		<input type="text" id="username" name="username" placeholder="Username">

		<br><br>

		<!-- <label for="password">Password:</label> -->
		<input type="password" id="password" name="password" placeholder="Password">

		<br><br>

		<input type="submit" value="Login">
	</form>
</body>
</html>
