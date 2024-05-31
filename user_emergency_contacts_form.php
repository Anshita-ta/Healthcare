<html>
<head>
  <title>Add Contacts</title>
  <link rel="stylesheet" type="text/css" href="add_user_data_form.css">
</head>
<body>
  <button class="admin-btn" id="add-relative-form-button">Enter Relative Data</button>
  <form id="add-relative-data-form" action="insert_user_emergency_contact_data.php" method="post" style="display:none;">
    <label for="userid">User ID:</label>
    <input type="text" id="userid" name="userid"><br><br>
    <label for="rel_aadhar">Relative Aadhar:</label>
    <input type="text" id="rel_aadhar" name="rel_aadhar"><br><br>
    <input type="submit" value="Submit" name="submit">
  </form>
  <script>
    document.getElementById("add-relative-form-button").addEventListener("click", function(){
      var form = document.getElementById("add-relative-data-form");
      if (form.style.display === "none") {
        form.style.display = "block";
      } else {
        form.style.display = "none";
      }
    });
  </script>
</body>
</html>
