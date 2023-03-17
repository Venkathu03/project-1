<?php

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "college_management";

    $mysqli = new mysqli($servername, $username, $password, $dbname);
    // $state = mysqli_real_escape_string($mysqli, $_POST['states']);
    // $sql = "SELECT * FROM institution_details WHERE State = '$state'";
    // $result = mysqli_query($mysqli, $sql);

    $query ="SELECT institution_name FROM institution_details";
    $result = $mysqli->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

?>