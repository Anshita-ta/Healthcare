<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        CONFIRMED BOOKINGS
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>B_id</th>
                    
                   
                </tr>
            </thead>
            <tbody>
            <?php
  if (isset($_POST['user_id']))
  {
    $user_id = $_POST['user_id'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_main";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
      die("Connection failed: " . $conn->connect_error);
    }

//$x=isset($_POST['accept']);
            
            
    

                $show = "SELECT user_data.user_id, user_data.name, relative_data.name,relative_data.rel_aadhar, relative_data.phone_number
    FROM user_data
    JOIN related ON user_data.user_id = related.user_id
    JOIN relative_data ON related.rel_aadhar = relative_data.rel_aadhar
    WHERE user_data.user_id='$user_id'";


            
            
            
         
           $query = mysqli_query($conn, $show);
            $nums=mysqli_num_rows($query);
            //

            while($res=mysqli_fetch_assoc($query))
            {
            ?>
            
            <tr>
                <th><?php echo $res['name'] ?></th>
                               
            </tr>
            
            

           <?php 
            }
}
           ?>
               
            </tbody>
    
</div>
</body>
</html>
