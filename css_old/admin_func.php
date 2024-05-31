<?php
// Connect to the database
$conn = mysqli_connect("hostname", "username", "password", "database_name");

// Function to add user data
function addUserData($userid, $name, $phone_number, $department, $academic_year, $rel_aadhar, $hostle) {
  global $conn;
  $sql = "INSERT INTO user_data (userid, name, phone_number, department, academic_year, rel_aadhar, hostle)
          VALUES ('$userid', '$name', '$phone_number', '$department', '$academic_year', '$rel_aadhar', '$hostle')";
  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}

// Function to add relative data
function addRelativeData($name, $rel_aadhar, $phone_number) {
  global $conn;
  $sql = "INSERT INTO relative_data (name, rel_aadhar, phone_number)
          VALUES ('$name', '$rel_aadhar', '$phone_number')";
  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}

function addMedicalHistory($MHID, $Description, $Date, $userid) {
    global $conn;

    $sql = "INSERT INTO medical_history (MHID, Description, Date, userid)
    VALUES ('$MHID', '$Description', '$Date', '$userid')";

    if ($conn->query($sql) === TRUE) {
        return "Medical history added successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to add login information
function addLoginInfo($username, $password, $user_type) {
  global $conn;
  $sql = "INSERT INTO login_info (username, password, user_type)
          VALUES ('$username', '$password', '$user_type')";
  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}

// Function to add medicine
function addMedicine($Med_ID, $name, $price) {
    global $conn;

    $sql = "INSERT INTO medicine (Med_ID, name, price)
    VALUES ('$Med_ID', '$name', '$price')";

    if ($conn->query($sql) === TRUE) {
        return "Medicine added successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to add relative table
function addRelativeTable($rel_aadhar, $userid) {
  global $conn;
  $sql = "INSERT INTO relative_table (rel_aadhar, userid)
          VALUES ('$rel_aadhar', '$userid')";
  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}


function getUserDataAndRelatives($userid) {
    global $conn;

    $sql = "SELECT user_data.*, relative_data.* 
    FROM user_data 
    INNER JOIN relative_table ON relative_table.userid = user_data.userid 
    INNER JOIN relative_data ON relative_data.rel_aadhar = relative_table.rel_aadhar 
    WHERE user_data.userid = '$userid'";

    $result = $conn->query($sql);

    return $result;
}

function getMedicalHistory($userid, $Date = NULL) {
    global $conn;

    if ($Date) {
        $sql = "SELECT * FROM medical_history WHERE userid = '$userid' AND Date = '$Date'";
    } else {
        $sql = "SELECT * FROM medical_history WHERE userid = '$userid'";
    }

    $result = $conn->query($sql);

    return $result;
}

function showOrderDetails($userid) {
    global $conn;

    $sql = "SELECT user_data.userid, user_data.name, medicine_record.name AS medicine_name, medicine_record.price, has_ordered_table.quantity, (medicine_record.price * has_ordered_table.quantity) AS total_price
            FROM user_data
            JOIN has_ordered_table ON user_data.userid = has_ordered_table.userid
            JOIN medicine_record ON has_ordered_table.medicine_name = medicine_record.name
            WHERE user_data.userid = '$userid'";
    
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>User ID</th>";
        echo "<th>User Name</th>";
        echo "<th>Medicine Name</th>";
        echo "<th>Price</th>";
        echo "<th>Quantity</th>";
        echo "<th>Total Price</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['userid'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['medicine_name'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "<td>" . $row['total_price'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No order details found";
    }

    mysqli_close($conn);
}

function addMedicine($medicine_name) {
  global $conn;
  $sql = "INSERT INTO medicine (medicine_name)
          VALUES ('$medicine_name')";
  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}

?>
