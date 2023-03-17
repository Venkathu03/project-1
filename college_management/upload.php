<?php
if (isset($_POST['submit'])) {
    $filename = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $allowed_extensions = array('xlsx', 'csv');
    if (in_array($ext, $allowed_extensions)) {
        require 'vendor/autoload.php';
        // use PhpOffice\PhpSpreadsheet\IOFactory;
        // $reader = IOFactory::createReader('Xlsx');
        // $spreadsheet = $reader->load($tmp_name);
        // $worksheet = $spreadsheet->getActiveSheet();
        // $rows = $worksheet->toArray();
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load($tmp_name);
        $worksheet = $spreadsheet->getActiveSheet();
        $rows = $worksheet->toArray();
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "college_management";
        $conn = mysqli_connect($host, $username, $password, $dbname);
        foreach ($rows as $row) {
            $user_name= $row[0];
            $email = $row[1];
            $password = $row[2];
            $user_type = $row[3];
            $sql = "INSERT INTO user_details (user_name, email, password, user_type) VALUES ('$user_name', '$email', '$password', '$user_type')";
            mysqli_query($conn, $sql);
        }
        mysqli_close($conn);
        echo "Data inserted successfully";
    } else {
        echo "Please upload a file with one of the following extensions: " . implode(", ", $allowed_extensions);
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> MedisimVr </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
    <!-- icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<!-- icon --> 

    <style>
    .home_btn{
    font-size: 36px;
    position: relative;
    bottom: 17px;
    color: #20798d;
    transition: 1s;

 }
 .home_btn:hover{
    color: #fff;
    transform: scale(1.1);
    transition: 1s;
 }
</style>



</head>
  <body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pt-3" style="background-image: linear-gradient(to right, #46BBD5, #8DC26F);" >
                   <h3 class = "text-center pt-2 pb-2">Upload Files</h3>
                   <a href="home.php"><span class="material-symbols-outlined home_btn">house </span></a>
                    </div>
                    <div class="card-body">
                   <div class = "mt-3">
                    <form action="up.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                    <label for="lastname" class="form-label"><b>Choose Here</b></label>
                        <input class="form-control" type="file" name = "file" id="formFile">
                        </div>
                      <input type="submit" class = "btn btn-primary float-end" name="submit" value="Upload">
                      <!-- <button type="button" onclick="window.location.href='home.php'" class="btn " style = "background:#00827F; color:white;">Home</button> -->

                      
                      </form>
                      </div>
                    </div>

                    <div class="card-footer">
                        <small class = "float-end">&copy; Medisim VR</small>
                    </div>
                </div>
            </div>
        </div>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>