<html>
	<head>
		<title>Home</title>
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
		
		<div class="buttons">
			<!-- <a href="#" class="button"id="main1">Emergency</a>
			<a href="#" class="button"id="main2">Medical Need</a>
			<a href="#" class="button"id="main3">Medical History</a>
			<a href="#" class="button"id="main4">Request Medicine</a> -->
			<?php include ('send_urgent_mail_form.php') ?>	
			<?php include ('normal_medical_problem.php') ?>
			<?php include ('view_medical_history_form.php') ?>
			<?php include ('insert_into_order_list_form.php') ?>
		</div>
	</body>
</html>
