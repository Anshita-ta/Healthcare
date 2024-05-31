<html>
	<head>
	</head>
	<style>
		.admin-btn {
	margin: 10px 20px 0px 20px;
	display: block;
	width: 92%;
	font-size: 20px;
	padding: 10px;
}
</style>

	<body>
		<button class="button" class="admin-btn" onclick="toggleForm()">Get Medical History</button>
		<form action="history_output.php" method="post"id="form" style="display: none;">
			<label>User ID:</label>
			<input type="text" name="userid"><br><br>
			
			<label>Date:</label>
			<input type="date" name="date" ><br><br>
			
			<input type="submit" value="Submit">
		</form>
	</body>
	<script>
		function toggleForm() {
			var form = document.getElementById("form");
			if (form.style.display === "none") {
				form.style.display = "block";
			} else {
				form.style.display = "none";
			}
		}
	</script>
	
</html>
