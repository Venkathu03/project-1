<?php  

$conn = mysqli_connect("localhost","root","","college_management");
    if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
	}
    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
        $page_no = $_GET['page_no'];
        } else {
            $page_no = 1;
            }
            
            $total_records_per_page = 10;

            $offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$result_count = mysqli_query(
    $conn,
    "SELECT COUNT(*) As total_records FROM `institution_details`"
    );
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1; // total pages minus 1

    // if (!isset($_GET['page_no'])) {
    //     $page_no = 1;
    //   } else {
    //     $page_no = $_GET['page_no'];
    //   }
    //   // Calculate the starting and ending limits for the SQL query
    //   $starting_limit = ($page_no - 1) * $total_no_of_pages;
    //   $ending_limit = $starting_limit + $total_no_of_pages;
    //   // Retrieve the data using a SQL query with the starting and ending limits
    //   if (isset($_GET['search'])) {
    //     $search_term = $_GET['search'];
    //     $sql = "SELECT * FROM institution_details WHERE Institution_Name LIKE '%$search_term%' OR State LIKE '%$search_term%' LIMIT $starting_limit, $ending_limit";
    //     $result = $con->query($sql);
    //   } else {
    //     $sql = "SELECT * FROM institution_details LIMIT $starting_limit, $ending_limit";
    //     $result = $con->query($sql);
    //   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- links -->
  <script src="jquery-3.6.3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <script src="/scripts/jquery.min.js"></script>
      <script src="/bootstrap/js/bootstrap.min.js"></script>
  <!-- links -->
</head>
<style>

.page_btns{
    margin-left: 7px;
    border:none;
    border-radius:10px;
    font-size: 20px;
}

a:hover{
    text-decoration : none;
}

#last_btn{
    
}
  </style>

  
<body>
    <div class="container mt-3">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-image: linear-gradient(to right, #46BBD5, #8DC26F);">
                        <h3 class = "text-center pt-2 pb-3">College Management</h3>
                    </div>
                    <div class="card-body">
                        <!-- Search box -->
                        <form method="get" action="">
    <input type="text" name="search">
    <input type="submit" value="Search">
    <span style = "float:right; " id="wrapper">
<span class="pagination d-flex">
<ul class="pagination">

<?php
if ($total_no_of_pages <= 10){  	 
        for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
        if ($counter == $page_no) {
        echo "<a class = page_btns>$counter</a>";	
                }else{
            echo "<a class = page_btns href='?page_no=$counter'>$counter</a>";
                    }
            }
    }
?>
<?php if($page_no < $total_no_of_pages){

} ?>
</ul>
</span>
</span>
  </form>
  <br>
                        <div class="table-responsive">
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
                       <th data-sortas="numeric"> S.No </th>
                       <th> Institution_Name </th>
                       <th> State </th>
                       <th> Institution_Category </th>
                       <th> Management </th>
                       <th> Intake </th>
                       <th> Annual_fee </th>
                       <th> Website </th>
                       <th> Contact_Person_Name </th>
                       <th> Contact_Person_Designation </th>
                       <th> Contact_Person_LinkedIn </th>
                       <th> Person_Contact_Number </th>
                       <th> Contact_Person_EmailId </th>
                       <th> Contact_Person_Name1 </th>
                       <th> Contact_Person_Designation1 </th>
                       <th> Contact_Person_LinkedIn1 </th>
                       <th> Person_Contact_Number1</th>
                       <th> Contact_Person_EmailId1 </th>
                       <th> Contact_Person_Name2 </th>
                       <th> Contact_Person_Designation2 </th>
                       <th> Contact_Person_LinkedIn2 </th>
                       <th> Person_Contact_Number2 </th>
                       <th> Contact_Person_EmailId2</th>
                       <th> Contact_Person_Name3 </th>
                       <th> Contact_Person_Designation3 </th>
                       <th> Contact_Person_LinkedIn3 </th>
                       <th> Person_Contact_Number3 </th>
                       <th> Contact_Person_EmailId3 </th>
                       <th> Contact_Person_Name4 </th>
                       <th> Contact_Person_Designation4 </th>
                       <th> Contact_Person_LinkedIn4 </th>
                       <th> Person_Contact_Number4 </th>
                       <th> Contact_Person_EmailId4 </th>
                       <th> Contact_Person_Name5 </th>
                       <th> Contact_Person_Designation5</th>
                       <th> Contact_Person_LinkedIn5 </th>
                       <th> Person_Contact_Number5 </th>
                       <th> Contact_Person_EmailId5 </th>
                       <th> Comments </th>
                       <th> College_Info </th> 
</tr>  
<thead>  
<tbody>  
<?php  
 $result = mysqli_query(
    $con,
    "SELECT * FROM `institution_details` LIMIT $offset, $total_records_per_page"
    );
while($rows = mysqli_fetch_array($result)){
     
?>  
          <tr>
        <td><?php echo $rows["id"]  ?> </td>
        <td><?php echo $rows['Institution_Name']  ?> </td>
       <td><?php echo $rows['State']  ?> </td>
       <td><?php echo $rows['Institution_Category']  ?> </td>
       <td><?php echo $rows['Management_Type']  ?> </td>
       <td><?php echo $rows['Intake']  ?> </td>
       <td><?php echo $rows['Annual_Fee']  ?> </td>
       <td><?php echo $rows['Website']  ?> </td>
       <td><?php echo $rows['Contact_Person_Name']  ?> </td>
       <td><?php echo $rows['Contact_Person_Designation']  ?> </td>
       <td><?php echo $rows['Contact_Person_LinkedIn']  ?> </td>
       <td><?php echo $rows['Contact_Person_Contact_Number']  ?> </td>
       <td><?php echo $rows['Contact_Person_EmailId']  ?> </td>
       <td><?php echo $rows['Contact_Person_Name1']  ?> </td>
       <td><?php echo $rows['Contact_Person_Designation1']  ?> </td>
       <td><?php echo $rows['Contact_Person_LinkedIn1']  ?> </td>
       <td><?php echo $rows['Contact_Person_Contact_Number1']  ?> </td>
       <td><?php echo $rows['Contact_Person_EmailId1']  ?> </td>
       <td><?php echo $rows['Contact_Person_Name2']  ?> </td>
       <td><?php echo $rows['Contact_Person_Designation2']  ?> </td>
       <td><?php echo $rows['Contact_Person_LinkedIn2']  ?> </td>
       <td><?php echo $rows['Contact_Person_Contact_Number2']  ?> </td>
       <td><?php echo $rows['Contact_Person_EmailId2']  ?> </td>
       <td><?php echo $rows['Contact_Person_Name3']  ?> </td>
       <td><?php echo $rows['Contact_Person_Designation3']  ?> </td>
       <td><?php echo $rows['Contact_Person_LinkedIn3']  ?> </td>
       <td><?php echo $rows['Contact_Person_Contact_Number3']  ?> </td>
       <td><?php echo $rows['Contact_Person_EmailId3']  ?> </td>
       <td><?php echo $rows['Contact_Person_Name4']  ?> </td>
       <td><?php echo $rows['Contact_Person_Designation4']  ?> </td>
       <td><?php echo $rows['Contact_Person_LinkedIn4']  ?> </td>
       <td><?php echo $rows['Contact_Person_Contact_Number4']  ?> </td>
       <td><?php echo $rows['Contact_Person_EmailId4']  ?> </td>
       <td><?php echo $rows['Contact_Person_Name5']  ?> </td>
       <td><?php echo $rows['Contact_Person_Designation5']  ?> </td>
       <td><?php echo $rows['Contact_Person_LinkedIn5']  ?> </td>
       <td><?php echo $rows['Contact_Person_Contact_Number5']  ?> </td>
       <td><?php echo $rows['Contact_Person_EmailId5']  ?> </td>
       <td><?php echo $rows['Comments']  ?> </td>
       <td><?php echo $rows['College_Info']  ?> </td>
         </tr>

            <?php } ?>
        
    </tbody>
  </table>
  <!-- Pagination -->
 

  
  </div>
  <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>


<?php
// Close the connection
$con->close();
?>
<div>

<a href="home.php"><button type="button" style="border-radius: 5px; border: none; font-size: 20px; background-color: lightskyblue; font-family: georgia; margin: 5px; padding: 8px;"> -- Go Back -- </button></a>
<a href="download.php"><button type="button" style="border-radius: 5px; border: none; font-size: 20px; background-color: lightskyblue; font-family: georgia; margin: 5px; padding: 8px;"> Download </button></a>
</div>
<div class="card-footer">
   
    <small style = "float:right; ">&copy; Medisim VR</small>
</div>
</div>
</div>
</div>
</div>

<script>
  $('button').on('click', function(){
    $('button').removeClass('selected');
    $(this).addClass('selected');
});
</script>
</body>
</html>