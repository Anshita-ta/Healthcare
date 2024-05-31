<html>
<head>
  <title>non_urgent_email</title>
  <link rel="stylesheet" type="text/css" href="add_user_data_form.css"> 
</head>
<body>
  	<button class="button" id="non-urgent-button">Medical Issue</button> 
		<form style="display:none" id="non-urgent-form" action="send_mail.php" method="post">
		<label for="location">User ID</label>
		<input type="text" id="userid" name="userid">
		<label for="location">Enter your current location:</label>
		<input type="text" id="location" name="location">
		<input type="submit" name="submit" value="Send">
	</form>

  <script>
    document.getElementById("non-urgent-button").addEventListener("click", function() {
      document.getElementById("non-urgent-form").style.display =
        document.getElementById("non-urgent-form").style.display === "none"
          ? "block"
          : "none";
    });
  </script>
</body>
</html>
