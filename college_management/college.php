<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "college_management";

$mysqli = new mysqli($servername, $username, $password, $dbname);
include("fetch-data.php");
?>




   <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>College Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"style="background-image: linear-gradient(to right, #46BBD5, #8DC26F);">
                        <h3 class="text-center" >Search Colleges</h3>
                    </div>
                    <div class="card-body">
                    <form class="needs-validation mt-2 text-start" id='submit-form' action="newcollege.php" method="post">
                     <div class = "col-md-10">
                     <label for="lastname" class="form-label"><b>Search Colleges</b></label>
                               <select class="form-select" name="institution_name">
                                  <option>Select College</option>
                <?php
                        foreach ($options as $option) {
                ?>
                          <option><?php echo $option['institution_name']; ?> </option>
                         
                           <?php
                           
    }
   ?>
</select>
</div>
<div class="mt-3">
 <button class="btn btn-primary float-end"  id="btns" type="submit">submit</button>
 <!-- <a href="dwnldstate.php?State=<?=  $rows['State'];  ?>"> <button class= "btn" style = "background:#87AFC7; color:white;"> Download </button></a>  -->

<button onclick="window.location.href='search.html'" class="btn btn-primary "type="button">Back</button>
</div>
   </form>
                    </div>
                    <div class="card-footer">
                        <small class="float-end">&copy; Medisim VR</small>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
