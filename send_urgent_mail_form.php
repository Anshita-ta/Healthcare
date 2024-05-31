<!DOCTYPE html>
<html>
<head>
	<title>Send Location to Email</title>	
	<link rel="stylesheet" type="text/css" href="home.css">
	
	<script>
		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else {
				alert("Geolocation is not supported by this browser.");
			}
		}

		function showPosition(position) {
			document.getElementById("lat").value = position.coords.latitude;
			document.getElementById("lon").value = position.coords.longitude;
		}
	</script>
</head>
<body onload="getLocation()">
	<form id="admin-btn" class="button" action="send_urgent_mail_function.php" method="post">
		<input type="hidden" id="lat" name="lat">
		<input type="hidden" id="lon" name="lon">
		<input  style="background-color:#4CAF50  " type="submit" value="S.O.S" name="send_location">
	</form>
</body>
</html>
