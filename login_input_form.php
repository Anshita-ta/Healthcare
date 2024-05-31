<html>
  <head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="add_user_data_form.css">
  </head>
  <body>
    <button class="admin-btn" id="login-form-button">Insert New User Login Info</button>
    <form id="login-form" action="insert_login_data.php" method="post" style="display: none;">
      <label for="userid">User ID:</label>
      <input type="text" id="userid" name="userid"><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Submit" name="submit">
    </form>
    <script>
      document.getElementById("login-form-button").addEventListener("click", function() {
        var loginForm = document.getElementById("login-form");
        if (loginForm.style.display === "none") {
          loginForm.style.display = "block";
        } else {
          loginForm.style.display = "none";
        }
      });
    </script>
  </body>
</html>
