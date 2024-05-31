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
		<button class="admin-btn" onclick="toggleForm_2()">Get Order List</button>
		<form action="get_order_list_function.php" method="post"id="get_order_list_button" style="display: none;">
			<label>Enter_Order_date:</label>
			<input type="date" name="date"><br><br>
			<input type="submit" value="Submit">
		</form>
	</body>
	<script>
		function toggleForm_2() {
			var form = document.getElementById("get_order_list_button");
			if (form.style.display === "none") {
				form.style.display = "block";
			} else {
				form.style.display = "none";
			}
		}
	</script>
	
</html> 
