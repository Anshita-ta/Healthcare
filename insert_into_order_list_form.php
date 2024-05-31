<html>
<head>
  <title>Insert Medicine Data</title>
  <link rel="stylesheet" type="text/css" href="add_user_data_form.css"> 
</head>
<body>
  <button class="button" id="insert-medicine-button">Order Medicine</button>
  <form style="display: none" id="insert-medicine-form" action="insert_into_order_list_function.php" method="post">
    <label for="name">Medicine Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="quantity">quantity</label>
    <input type="number" id="quantity" name="quantity"><br><br>
    <label for="userid">User-Id</label>
    <input type="text" id="userid" name="userid"><br><br>
    <input type="submit" value="Submit" name="submit">
  </form>
  <script>
    document.getElementById("insert-medicine-button").addEventListener("click", function() {
      document.getElementById("insert-medicine-form").style.display =
        document.getElementById("insert-medicine-form").style.display === "none"
          ? "block"
          : "none";
    });
  </script>
</body>
</html>

