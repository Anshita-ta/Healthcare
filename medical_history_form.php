<html>
  <head>
    <title>Add Data</title>
    <link rel="stylesheet" type="text/css" href="medical_history_form.css">
  </head>
  <body>
    <button class="admin-btn" id="toggle-form-button">Insert Medical History</button>
    <form id="input-form" action="insert_medical_history.php" method="post" style="display: none;">
      <label for="mhid">MHID:</label>
      <input type="text" id="mhid" name="mhid"><br><br>
      <label for="userid">UserID:</label>
      <input type="text" id="userid" name="userid"><br><br>
      <label for="date">Date:</label>
      <input type="date" id="date" name="date"><br><br>
      <label for="description">Description:</label>
      <input type="text" id="description" name="description"><br><br>
      <input type="submit" value="Submit" name="submit">
    </form>
    <script>
      document.getElementById("toggle-form-button").addEventListener("click", function() {
        var form = document.getElementById("input-form");
        if (form.style.display === "none") {
          form.style.display = "block";
        } else {
          form.style.display = "none";
        }
      });
    </script>
  </body>
</html>
