<html>
<head>
  <title>Display User Data</title>

  <link rel="stylesheet" type="text/css" href="add_user_data_form.css">
   <style type="text/css">
    .form-container {
      display: none;
      background-color: lightgray;
      padding: 20px;
      border: 1px solid black;
      border-radius: 5px;
      width: 400px;
      margin: 0 auto;
    }

    .toggle-button {
      background-color: green;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      border: 1px solid black;
      cursor: pointer;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div>
    <button class="toggle-button">Toggle Form</button>
  </div>
  <div class="form-container">
    <h2>Enter User ID</h2>
    <form action="display_data_1.php" method="post">
      <input type="text" name="user_id" required>
      <input type="submit" value="Submit">
    </form> 
<script>
  const toggleFormButton = document.querySelector(".toggle-button");
  const formContainer = document.querySelector(".form-container");
  
  toggleFormButton.addEventListener("click", function() {
    if (formContainer.style.display === "none") {
      formContainer.style.display = "block";
    } else {
      formContainer.style.display = "none";
    }
  });
</script>
