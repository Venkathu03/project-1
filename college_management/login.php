<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
// assume $username contains the username retrieved from the database
$_SESSION['username'] = $username;


 // $conn = mysqli_connect("localhost", "medi", "medisim#2022$143", "college_management"); 
  // $conn = mysqli_connect("collegemanagement.cbmmrisq24o6.us-west-2.rds.amazonaws.com", "medisim", "vlXjGyhlMdsOfB2Azt5G", "College_Management"); //Prod Aws
//$conn = mysqli_connect("162.241.130.47", "dxvrncmy_dxvrncmy_medisimvr", "Yixc;]5dKt3Q", "dxvrncmy_MedisimVr"); // ---> Prod

$conn = mysqli_connect("localhost", "root", "", "college_management"); 

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

  // Check if the username and password match a record in the database
  $sql = "SELECT user_name, password, user_type FROM user_details WHERE user_name = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $user_type = $row['user_type'];

    if ($user_type == 'Admin') {
      header("Location: home.php");
      exit;
    } else {
      header("Location: view.html");
      exit;
    }
  } else {
    echo 'Login failed';
  }
mysqli_close($conn);
}
?>
<html>
  <head>
    <title> MedisimVr </title>
  </head>
  <style>
    .form-group {
        margin: 20px 0 auto;
        display: flex;
        flex-direction: column;
        width: 500px;
        
      }
      
      label {
        display: block;
        font-size: 20px;
        margin-bottom: 10px;
      }
      
      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        font-size: 20px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 2px;
      }
      
      button[type="submit"] {
        padding: 10px 20px;
        font-size: 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 10px;
      }

      button[type="button"] {
        padding: 10px 20px;
        font-size: 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 10px;
      }

      body {
        background-image: linear-gradient(to right, #46BBD5, #8DC26F);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Times New Roman', Times, serif;
      }

      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
        position: relative;
      }
      
  </style>
  <body>
    <form action="login.php" method="post" autocomplete="off">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
      </div>

      <button type="submit">Login</button> 
      <a href="index.html"><button type="button">Go Back</button></a> 
    </form>
  </body>
</html>