<html>
	<head>
	<style>
		.admin-btn {
	margin: 10px 20px 0px 20px;
	display: block;
	width: 92%;
	font-size: 20px;
	padding: 10px;
}
</style>
	</head>
	<body>
		<button class="admin-btn" onclick="toggleForm_3()">Get All Relatives</button>
		<form action="get_all_relative_function.php" method="post"id="form_get_relative_joins" style="display: none;">
			<label>User ID:</label>
			<input type="text" name="userid"><br><br>
			<input type="submit" value="Submit">
		</form>
	</body>
	<script>
		function toggleForm_3() {
			var form = document.getElementById("form_get_relative_joins");
			if (form.style.display === "none") {
				form.style.display = "block";
			} else {
				form.style.display = "none";
			}
		}
	</script>
	
</html> 
