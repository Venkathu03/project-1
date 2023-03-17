<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> MedisimVr </title>
  <link rel="stylesheet" href="style.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>
<style>
	/* Styling for the button container */
/* .button-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 20vh;
} */
.btn_sec{
  position: relative;
    top: 20px;
    left: 44px;
}
/* Styling for the button */
.button {
  background:#46C7C7;
  color: #fff;
  border: none;
  padding: 10px 10px;
  margin: 0 10px;
  font-size: 18px;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
  transition : .5s;

}
body {
        background-image: linear-gradient(to right, #46BBD5, #8DC26F);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Times New Roman', Times, serif;
      }
      .logo {
        position: absolute;
        top: 20px;
        left: 20px;
        width: 150px;
        height: 40px;
        background-color: white;
        border-style: none;
        text-decoration: none;
        border-radius: 5px;
        padding-top: 20px;
      }
    
      .container {
        display: flex;
        flex-direction: column;
        width: 500px;
        align-items: center;
        background-color: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
        position: relative;
        height: 500px;
      }
      /* .btn {
        margin-top: 30px;
        padding: 10px 20px;
        font-size: 20px;
        background-color: #F44336;
        font-family: 'Times New Roman', Times, serif;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        border-style: none;
        cursor: pointer;
        margin-top: 140px;
         transition : .5s;

      } */
/* Hover effect for the button */
.button:hover {
  background-color: #009900;
transform: scale(1.1);
  transition : .5s;

}
.name {
  text-align: left;
  font-size: 30px;
  padding-top: 50px;
  font-weight: bold;
  color: brown;
}
.btn:hover{
transform: scale(1.2);
transition : .5s;
}

</style>
<body>
<div class="container">
  <div class="name">
     <?php
  session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  echo "Welcome, $username!";
} else {
  // redirect to the login page if the user is not logged in
  header("Location: login.php");
  exit;
}
?>
</div>
  <img src="https://www.linkpicture.com/q/LOGO_42.png" class="logo" alt="logo"><br>
    <h2 class = "heading"> College Managment System </h2>
 <div class="button-container">
  <div class="div">
    <div>
  <a href="add.php"><button class="button" id = "add_btn"> Add Institution </button></a>
  <a href="table_view.php"><button class="button" id = "view_btn"> View Institution </button></a>
  <a href="search.html"><button class="button" id = "find_btn"> Find Institution </button></a>
  </div>
  <div class = "btn_sec">
  <a href="report.html"><button class="button" style="font-size:20px;" id = "report_btn"> Reports </button></a>
  <a href="upload.php"><button class="button" style="font-size:20px;"id = "upload_btn"> Bulk Uploads </button></a>
  <a href="analytics.php"><button class="button" style="font-size:20px;" id = "analytic_btn"> Analytics </button></a>
  
  </div>
  </div>
</div>
<div>
    <a href="logout.php"><button class="btn logout-btn"> LogOut </button></a>
  </div>
</div>
</body>
</html>