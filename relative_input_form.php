<html>
<head>
  <title>Add Relative Data</title>
  <link rel="stylesheet" type="text/css" href="add_user_data_form.css"> 
</head>
<body>
  <button class="admin-btn" id="relative-form-button">Enter Relative Data</button>
  <form style="display: none" id="relative-data-form" action="insert_relative_data.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="rel_aadhar">Relative Aadhar:</label>
    <input type="text" id="rel_aadhar" name="rel_aadhar"><br><br>
    <label for="phone_number">Phone Number:</label>
    <input type="text" id="phone_number" name="phone_number"><br><br>
    <input type="submit" value="Submit" name="submit">
  </form>
  <script>
    document.getElementById("relative-form-button").addEventListener("click", function() {
      document.getElementById("relative-data-form").style.display =
        document.getElementById("relative-data-form").style.display === "none"
          ? "block"
          : "none";
    });
  </script>
</body>
</html>

