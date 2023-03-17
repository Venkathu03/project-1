<!-- addpage -->
<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>College Management</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <!-- jQuery library file -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js">
    </script>

    <!-- Datatable plugin JS library file -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    </script>

    <style>
        .hide{
            display: none;
        }
    </style>
</head>
 
<body>
    <div class="container mt-3">

<?php include('message.php'); ?>
    

        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <!-- <div class="card-header" style="background-image: linear-gradient(to right, #46BBD5, #8DC26F);">
                        <h2 class="h2 text-center pt-3 pb-3">Edit Form</h2>
                    </div> -->
                    <div class="card-body">
                        <div class="text-center">
                    <?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "college_management";

$mysqli = new mysqli($servername, $username, $password, $dbname);
                    if(isset($_GET['Institution_Name'])) {
                    $institution_name = mysqli_real_escape_string($mysqli,$_GET['Institution_Name']);
                    $query = "SELECT * FROM institution_details WHERE institution_name='$institution_name'";
                    $query_run = mysqli_query($mysqli, $query);

                    if (mysqli_num_rows($query_run)>0)
                    {
                        $management = mysqli_fetch_array($query_run);

                        ?>
                    
                   
                            <form class="needs-validation mt-5 text-start" id='submit-form' action="edit.php" method="post">
                            <div class="card-header" style="background-image: linear-gradient(to right, #46BBD5, #8DC26F);">
                        <h2 class="h2 text-center pt-3 pb-3">Edit Form</h2>
                    </div>
                                <div class="form-outline col-sm-5">
                                    <label for="lastname" class="form-label">Institution Name</label>
                                    <input type="text" class="form-control" name="institute_name" value="<?= $management['Institution_Name']  ?>" readonly>
                                </div>
                                <!-- <div class="form-outline col-sm-3">
                                    <label for="lastname" class="form-label">State</label>
                                    <input type="text" class="form-control" name="states" required>
                                </div> -->
                                <div class="form-outline col-sm-5">
                                    <label for="lastname" class="form-label">State</label>
                                    <select class="form-select" id="states" name="states" value="<?= $management['State']  ?>" disabled>
                                        <!-- <option selected ></option> -->
                                        <option value="<?= $management['State']  ?>" selected><?= $management['State']  ?> </option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal </option>

                                    </select>
                                </div>
                               
                                <div class="form-outline col-sm-5">
                                    <label for="lastname" class="form-label">Institution Category</label>
                                    <select class="form-select" id="inscat" name="inscat" disabled>
                                        <!-- <option selected></option> -->
                                        <option value="<?= $management['Institution_Category']  ?>" selected><?= $management['Institution_Category']  ?> </option>
                                        <option value="Medical College">Medical College</option>
                                        <option value="Nursing College">Nursing College</option>
                                    </select>
                                </div>
                                <div class="form-outline col-sm-5">
                                    <label for="lastname" class="form-label">Management</label>
                                    <select class="form-select" id="management" name="management" disabled>
                                       <option selected></option> 
                                        <option value="<?= $management['Management_Type']  ?>" selected><?= $management['Management_Type']  ?> </option>
                                        <option value="Private">Private</option>
                                        <option value="Trust">Trust</option>
                                        <option value="Society">Society</option>
                                        <option value="Government">Government</option>
                                    </select>
                                </div>
                                <div class="form-outline col-sm-5">
                                    <label for="lastname" class="form-label">Intake</label>
                                    <input type="number" class="form-control" name="intake" value="<?= $management['Intake']  ?>"  readonly>
                                </div>
                                <div class="form-outline col-sm-5">
                                    <label for="lastname" class="form-label">Annual Fee</label>
                                    <input type="number" class="form-control" name="annual_fee"  value="<?= $management['Annual_Fee']  ?>" required>
                                </div>
                                <div class="form-outline col-sm-5">
                                    <label for="lastname" class="form-label">Website</label>
                                    <input type="text" class="form-control" name="website" value="<?= $management['Website']  ?>" readonly>
                                </div>
                                <ul style="list-style: none;" >
                                    <div class="form-outline col-md-5">
                                        <h3> Management Contact Details</h3>
                                        <li><label for="lastname" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="management_name"  value="<?= $management['Contact_Person_Name']  ?>"   required>
                                        </li>

                                        <li><label for="lastname" class="form-label">Designation</label>
                                            <input type="text" class="form-control" name="management_designation"  value="<?= $management['Contact_Person_Designation']  ?>"  required>
                                        </li>

                                        <li><label for="lastname" class="form-label">Linkedin Profile</label>
                                            <input type="text" class="form-control" name="management_linkedin"  value="<?= $management['Contact_Person_LinkedIn']  ?>"  required>
                                        </li>

                                        <li><label for="lastname" class="form-label">Contact Number</label>
                                            <input type="number" class="form-control" name="management_contact"  value="<?= $management['Contact_Person_Contact_Number']  ?>"  required>
                                        </li>
                                        <li><label for="lastname" class="form-label">Email Id</label>   
                                            <input type="email" class="form-control" name="management_email"  value="<?= $management['Contact_Person_EmailId']  ?>"  required>
                                        </li>
                                    </div>
                                   
                                </ul>
                                <div>   
                                    <button id="theButton" onclick="addOne()" class="btn btn-primary" type="button">Add More</button>
                                    <div class="w-50 ms-5">
                                    <div class="mt-3">
                                    <label for="lastname" id="lable_1" class="form-label hide">Name</label>
                                    <input type="text" name="name1" id="popup_1" class="form-control hide w-75" value="<?= $management['Contact_Person_Name1']  ?>" >
                                </div>
                                <div class="mt-3">
                                    <label for="lastname" id="lable_2" class="form-label hide">Designation</label>
                                    <input type="text" name="design1" id="popup_2" class="form-control hide w-75" value="<?= $management['Contact_Person_Designation1']  ?>">
                                </div>
                                <div class="mt-3">
                                    <label for="lastname" id="lable_3" class="form-label hide">Linkedin Profile</label>
                                    <input type="text" name="linked1" id="popup_3" class="form-control hide w-75" value="<?= $management['Contact_Person_LinkedIn1']  ?>" >
                                </div >
                                <div class="mt-3">
                                    <label for="lastname" id="lable_4" class="form-label hide">Contact Number</label>
                                    <input type="number" name="conct1" id="popup_4" class="form-control hide w-75" value="<?= $management['Contact_Person_Contact_Number1']  ?>">
                                </div>
                                <div class="mt-3">
                                    <label for="lastname" id="lable_5" class="form-label hide">Email Id</label>
                                    <input type="email" name="email1" id="popup_5" class="form-control hide w-75" value="<?= $management['Contact_Person_EmailId1']  ?>">
                                </div>
                            </div>
                                <button id="add_btn" onclick="addTwo()" class="btn btn-primary hide mt-3" type="button">Add More</button>
                                <div class="w-50 ms-5">
                                    <div class="mt-3">
                                    <label for="lastname" id="lable_6" class="form-label hide">Name</label>
                                    <input type="text" name="name2" id="popup_6" class="form-control hide w-75" value="<?= $management['Contact_Person_Name2']  ?>">
                                </div>
                                <div class="mt-3">
                                    <label for="lastname" id="lable_7" class="form-label hide">Designation</label>
                                    <input type="text" name="design2" id="popup_7" class="form-control hide w-75" value="<?= $management['Contact_Person_Designation2']  ?>">
                                </div>
                                <div class="mt-3">
                                    <label for="lastname" id="lable_8" class="form-label hide">Linkedin Profile</label>
                                    <input type="text" name="linked2" id="popup_8" class="form-control hide w-75" value="<?= $management['Contact_Person_LinkedIn2']  ?>">
                                </div >
                                <div class="mt-3">
                                    <label for="lastname" id="lable_9" class="form-label hide">Contact Number</label>
                                    <input type="number" name="conct2" id="popup_9" class="form-control hide w-75" value="<?= $management['Contact_Person_Contact_Number2']  ?>">
                                </div>
                                <div class="mt-3">
                                    <label for="lastname" id="lable_10" class="form-label hide">Email Id</label>
                                    <input type="email" name="email2" id="popup_10" class="form-control hide w-75"  value="<?= $management['Contact_Person_EmailId2']  ?>">
                                </div>
                            </div>
                            <button id="add_btn1" onclick="addThree()" class="btn btn-primary hide mt-3" type="button">Add More</button>
                            <div class="w-50 ms-5">
                                <div class="mt-3">
                                <label for="lastname" id="lable_11" class="form-label hide">Name</label>
                                <input type="text" name="name3" id="popup_11" class="form-control hide w-75" value="<?= $management['Contact_Person_Name3']  ?>">
                            </div>
                            <div class="mt-3">
                                <label for="lastname" id="lable_12" class="form-label hide">Designation</label>
                                <input type="text" name="design3" id="popup_12" class="form-control hide w-75" value="<?= $management['Contact_Person_Designation3']  ?>">
                            </div>
                            <div class="mt-3">
                                <label for="lastname" id="lable_13" class="form-label hide">Linkedin Profile</label>
                                <input type="text" name="linked3" id="popup_13" class="form-control hide w-75" value="<?= $management['Contact_Person_LinkedIn3']  ?>">
                            </div >
                            <div class="mt-3">
                                <label for="lastname" id="lable_14" class="form-label hide">Contact Number</label>
                                <input type="number" name="conct3" id="popup_14" class="form-control hide w-75" value="<?= $management['Contact_Person_Contact_Number3']  ?>">
                            </div>
                            <div class="mt-3">
                                <label for="lastname" id="lable_15" class="form-label hide">Email Id</label>
                                <input type="email" name="email3" id="popup_15" class="form-control hide w-75" value="<?= $management['Contact_Person_EmailId3']  ?>">
                            </div>
                        </div>
                        <button id="add_btn2" onclick="addFour()" class="btn btn-primary hide mt-3" type="button">Add More</button>
                        <div class="w-50 ms-5">
                            <div class="mt-3">
                            <label for="lastname" id="lable_16" class="form-label hide">Name</label>
                            <input type="text" name="name4" id="popup_16" class="form-control hide w-75" value="<?= $management['Contact_Person_Name4']  ?>">
                        </div>
                        <div class="mt-3">
                            <label for="lastname" id="lable_17" class="form-label hide">Designation</label>
                            <input type="text" name="design4" id="popup_17" class="form-control hide w-75" value="<?= $management['Contact_Person_Designation4']  ?>">
                        </div>
                        <div class="mt-3">
                            <label for="lastname" id="lable_18" class="form-label hide">Linkedin Profile</label>
                            <input type="text" name="linked4" id="popup_18" class="form-control hide w-75" value="<?= $management['Contact_Person_LinkedIn4']  ?>">
                        </div >
                        <div class="mt-3">
                            <label for="lastname" id="lable_19" class="form-label hide">Contact Number</label>
                            <input type="number" name="conct4" id="popup_19" class="form-control hide w-75" value="<?= $management['Contact_Person_Contact_Number4']  ?>">
                        </div>
                        <div class="mt-3">
                            <label for="lastname" id="lable_20" class="form-label hide">Email Id</label>
                            <input type="email" name="email4" id="popup_20" class="form-control hide w-75" value="<?= $management['Contact_Person_EmailId4']  ?>">
                        </div>
                    </div>
                    <button id="add_btn3" onclick="addFive()" class="btn btn-primary hide mt-3" type="button">Add More</button>
                    <div class="w-50 ms-5">
                        <div class="mt-3">
                        <label for="lastname" id="lable_21" class="form-label hide">Name</label>
                        <input type="text" name="name5" id="popup_21" class="form-control hide w-75"value="<?= $management['Contact_Person_Name5']  ?>">
                    </div>
                    <div class="mt-3">
                        <label for="lastname" id="lable_22" class="form-label hide">Designation</label>
                        <input type="text" name="design5" id="popup_22" class="form-control hide w-75" value="<?= $management['Contact_Person_Designation5']  ?>">
                    </div>
                    <div class="mt-3">
                        <label for="lastname" id="lable_23" class="form-label hide">Linkedin Profile</label>
                        <input type="text" name="linked5" id="popup_23" class="form-control hide w-75" value="<?= $management['Contact_Person_LinkedIn5']  ?>">
                    </div >
                    <div class="mt-3">
                        <label for="lastname" id="lable_24" class="form-label hide">Contact Number</label>
                        <input type="number" name="conct5" id="popup_24" class="form-control hide w-75" value="<?= $management['Contact_Person_Contact_Number5']  ?>">
                    </div>
                    <div class="mt-3">
                        <label for="lastname" id="lable_25" class="form-label hide">Email Id</label>
                        <input type="email" name="email5" id="popup_25" class="form-control hide w-75" value="<?= $management['Contact_Person_EmailId5']  ?>">
                    </div>
                </div>
                                </div>
                               
                                <div class="form-outline col-sm-10">
                                    <label for="lastname" class="form-label">Comments</label>
                                    <div class="form-floating">
                                        <textarea class="form-control"  id="floatingTextarea1" name="comments" style="height: 100px"><?php echo $management['Comments']; ?></textarea>
                                      </div>
                                </div>
                               
                                <div class="form-outline col-sm-10">
                                    <label for="inputAddress">College Info</label>
                                    <div class="form-floating">
                                    <textarea class="form-control"  id="floatingTextarea1" name="college_info" style="height: 100px"><?php echo $management['College_Info']; ?></textarea>
                                      </div>
                                </div>
                        </div>
                        <!-- <div class="mt-3">
                            <input type="file">
                        </div> -->

                        <div class="row ">
                            <div class="mt-3">
                                <button class="btn btn-primary"  id="btns" type="submit" name="edit">Update</button>
                                <button class="btn btn-danger" onClick="window.location.reload()" type="button">Reset</button>
                                <!-- <input type="button" name="clear" style="font-size: 12px;" class="btn btn-danger"
                                    value="clear" id="btnclear" onclick="return resetForm();"> -->
                                <button onclick="window.location.href='home.html'" class="btn btn-primary float-end"
                                    type="button">Back</button>
                            </div>
                        </div>

                        </form>

                        <?php
                    }
                    else{
                       echo "<h4>No Such Id Found</h4>";
                    }
                }
                        ?>
                    </div>
                    <div class="card-footer">
                        <small class="float-end ">&copy; Medisim VR</small>
                    </div>

                </div>

            </div>

        </div>

    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <!-- <script src="main.js"></script> -->
    <!-- <script src="login.js"></script> -->
    <script src="add.js"></script>

    <!-- <script>
        document.getElementById("floatingTextarea1").value = "$management['Comments']";
        document.getElementById("floatingTextarea2").value = "$management['College_Info']";
    </script> -->
    <!-- <script src="reload.js"></script> -->
</body>

</html>
<!-- addpage -->