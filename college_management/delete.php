<?php
session_start();

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "college_management";

$mysqli = new mysqli($servername, $username, $password, $dbname);
                    if(isset($_GET['Institution_Name'])) {
                    $management_id = mysqli_real_escape_string($mysqli,$_GET['Institution_Name']);
                    $query = "DELETE FROM institution_details WHERE Institution_Name='$management_id'";
                    $query_run = mysqli_query($mysqli, $query);
                    
                    if ($query_run) {
                        // Store deleted record in backup table
                        $_SESSION['message'] = "Successfully Deleted...!";
                        header('Location: coll_edit.php');
                        exit(0);
                    } else {
                        $_SESSION['message'] = "Delete Not Success...!";
                        header('Location: coll_edit.php');
                        exit(0);
                    }
                    // Close connection
                    mysqli_close($mysqli);
                }
                    ?>