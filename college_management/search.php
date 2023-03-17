<?php
if (isset($_POST['states'])) {
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "college_management";

    $mysqli = new mysqli($servername, $username, $password, $dbname);
  $state = mysqli_real_escape_string($mysqli, $_POST['states']);
        // echo $row['id'],$row['Institution_Name'],$row['State'],$row['Institution_Category']."<br>";
  $sql = "SELECT id,Institution_Name,State,Institution_Category FROM institution_details WHERE State = '$state'";
  // Query the database for the record with the matching ID
  $result = mysqli_query($mysqli, $sql);
  if (mysqli_num_rows($result) > 0) {
    // Output the data for the matching record
    while ($row = mysqli_fetch_assoc($result)) {

        echo $row['id'],$row['Institution_Name'],$row['State'],$row['Institution_Category']."<br>";
    //   echo "ID: " . $row['id'] . "<br>";
    //   echo "Name: " . $row['institution_name'] . "<br>";
    //   echo "<a href='" . $row['website'] . "'>" . $row['website'] . "</a>";
      // ... and so on for other columns
    }
  } else {
    echo "No results found.";
  }
  // Close the database connection
  mysqli_close($mysqli);
}
?>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Asset Management Portal </title>
 </head>
 <br>
 <body>
 <form class="needs-validation mt-5 text-start" id='submit-form' action="search.php" method="post">
 <div class="form-outline col-sm-5">
                                    <label for="lastname" class="form-label">State</label>
                                    <select class="form-select" id="states" name="states" required>
                                        <option selected></option>
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
                                        <option value="West Bengal ">West Bengal </option>

                                    </select>
                                </div>
                                <div class="row ">
                            <div class="mt-3">
                                <button class="btn btn-primary"  id="btns" type="submit">submit</button>
                                <button class="btn btn-danger" onClick="window.location.reload()" type="button">Reset</button>
                                <!-- <input type="button" name="clear" style="font-size: 12px;" class="btn btn-danger"
                                    value="clear" id="btnclear" onclick="return resetForm();"> -->
                                <button onclick="window.location.href='home.html'" class="btn btn-primary float-end"
                                    type="button">Back</button>
                            </div>
                        </div>
</form>
</body>
</html>