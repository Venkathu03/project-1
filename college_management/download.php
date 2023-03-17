<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_management";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM institution_details";
$result = $conn->query($sql);
header('Content-type: application/vnd-ms-excel');
$filename = "Employee_Attendance.xls";
header("Content-Disposition:attachment;filename=\"$filename\"");
?>