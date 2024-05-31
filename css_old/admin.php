<html>
  <head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="add_user_data_form.css">
  </head>
  <body>
    <div id="content">
 	<button id="showFormButton">Add User Data</button>
    </div>
  </body>
</html>  

<script type="text/javascript">
  document.getElementById("showFormButton").onclick = function() {
    location.href = "add_user_data_form.php";
  };
</script>
