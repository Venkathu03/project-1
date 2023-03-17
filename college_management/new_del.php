<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_management";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Get the record ID that you want to delete
$management_id = $_GET['Institution_Name'];
// Query the main table to get the record that you want to delete

$sql = "INSERT INTO backup (id, Institution_Name) VALUES ('$column1_value', '$column2_value')";
$result = mysqli_query($conn, $sql);

// Get the record data and store it in variables

if (($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
    
    $column1_value = $row["id"];
    $column2_value = $row["Institution_Name"];

    }
    // Repeat for each column that you want to backup
}

// Delete the record from the main table
$sql = "DELETE FROM institution_details WHERE Institution_Name='$management_id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
// Close the database connection
mysqli_close($conn);
?>