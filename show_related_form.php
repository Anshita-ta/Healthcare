<!DOCTYPE html>
<html>
  <head>
   <link rel="stylesheet" type="text/css" href="add_user_data.css"> 
   <style>
      #toggleFormButton {
        font-size: 20px;
        padding: 10px 20px;
        background-color: lightblue;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 20px 0;
      }
      
      #formContainer {
        display: none;
        background-color: lightgray;
        padding: 20px;
        border-radius: 5px;
        margin-top: 20px;
      }
      
      input[type="text"] {
        font-size: 18px;
        padding: 10px;
        width: 300px;
        border-radius: 5px;
        border: 1px solid gray;
        margin-top: 10px;
      }
      
      input[type="submit"] {
        font-size: 18px;
        padding: 10px 20px;
        background-color: lightblue;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <button id="toggleFormButton">Toggle Form</button>
    
    <div id="formContainer">
      <form action="process_user_and_related.php" method="post">
        <label>Enter User ID:</label>
        <input type="text" name="user_id">
        <input type="submit" value="Submit">
      </form>
    </div>
    
    <script>
      const toggleFormButton = document.querySelector("#toggleFormButton");
      const formContainer = document.querySelector("#formContainer");
      
      toggleFormButton.addEventListener("click", function() {
        if (formContainer.style.display === "none") {
          formContainer.style.display = "block";
        } else {
          formContainer.style.display = "none";
        }
      });
    </script>
  </body>
</html>
