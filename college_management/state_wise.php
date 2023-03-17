<?php
if (isset($_POST['states'])) {
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "college_management";

    $mysqli = new mysqli($servername, $username, $password, $dbname);
    $state = mysqli_real_escape_string($mysqli, $_POST['states']);
$sql = "SELECT * FROM institution_details WHERE State = '$state'";
$result = mysqli_query($mysqli, $sql);
}
?>

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
                    <div class="card-header "style="background-image: linear-gradient(to right, #46BBD5, #8DC26F);">
                        <h3 class="text-center" >Search Colleges</h3>
                    </div>
                    <div class="card-body">
                    <form class="needs-validation mt-2 text-start" id='submit-form' action="dwnldstatewise.php" method="get">
 <div class="form-outline col-sm-5">

                                <label for="lastname" class="form-label"><b>Search States</b></label>
                                    <select class="form-select" id="states" name="states" required>
                                        <option selected></option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh ">Chandigarh </option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadra & Nagar Haveli and Daman & Diu">Dadra & Nagar Haveli and Daman & Diu </option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Ladakh">Ladakh</option>  
                                        <option value="Lakshadweep ">Lakshadweep </option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal ">West Bengal </option>

                                    </select>
                                </div>
                                <div class="row ">
                            <div class="mt-3">
                               
                                <a href="dwnldstatewise.php?State=<?=  $rows['State'];  ?>"> <button class= "btn float-end" style = "background:#87AFC7; color:white;"> Download </button></a> 
                                <!-- <input type="button" name="clear" style="font-size: 12px;" class="btn btn-danger"
                                    value="clear" id="btnclear" onclick="return resetForm();"> -->
                                <button onclick="window.location.href='report.html'" class="btn btn-primary "
                                    type="button">Back</button>
                            </div>
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