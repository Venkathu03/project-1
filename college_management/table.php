<?php
    $con = mysqli_connect("localhost", "root", "", "college_management");
$sql = "SELECT id, Institution_Name,State,Institution_Category,Management_Type,Intake,Annual_Fee,Website,Contact_Person_Name,Contact_Person_Designation,Contact_Person_LinkedIn,Contact_Person_Contact_Number,Contact_Person_EmailId, Contact_Person_Name1,Contact_Person_Designation1,Contact_Person_LinkedIn1,Contact_Person_Contact_Number1,Contact_Person_EmailId1,Contact_Person_Name2,Contact_Person_Designation2,Contact_Person_LinkedIn2,Contact_Person_Contact_Number2,Contact_Person_EmailId2,Contact_Person_Name3,Contact_Person_Designation3,Contact_Person_LinkedIn3,Contact_Person_Contact_Number3,Contact_Person_EmailId3,Contact_Person_Name4,Contact_Person_Designation4,Contact_Person_LinkedIn4,Contact_Person_Contact_Number4,Contact_Person_EmailId4,Contact_Person_Name5,Contact_Person_Designation5,Contact_Person_LinkedIn5,Contact_Person_Contact_Number5,Contact_Person_EmailId5, Comments,College_Info FROM institution_details";
$result = mysqli_query($con, $sql);


 ?>
 <!DOCTYPE html>
 <html>
 <head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 

    <link href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
         rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>College Management</title>
    
 </head>
 <br>
 <body >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h1 class="text-center"> College Management </h1>
                    </div>
                    <div class="card-body pagination pagination">
                        <div class="table-responsive">
                        <table id="escalation" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                   <?php
                   while ($rows = mysqli_fetch_assoc($result))
                   {
                    ?>
                    <tr>
                       <td><?php echo $rows['id']  ?> </td>
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
                <?php
               }
                 ?>
                </table>
                        </div>
                    </div>
            </div>
                <a href="home.html"><button type="button" style="border-radius: 5px; border: none; font-size: 20px; background-color: lightskyblue; font-family: georgia; margin: 5px; padding: 8px;"> -- Go Back -- </button></a>
                <a href="download.php"><button type="button" style="border-radius: 5px; border: none; font-size: 20px; background-color: lightskyblue; font-family: georgia; margin: 5px; padding: 8px;"> Download </button></a>
                 
                <div class="card-footer">
                        <small class = "float-end">&copy; Medisim VR</small>
                    </div>
                </div>
            </div>
        </div>
    
            </div>
            
 <script  src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>
        <script src=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js">
        </script>
<script>
        $(document).ready(function () {
  $('#escalation').DataTable();
  $('.dataTables_length').addClass('bs-select');
});

</script>

</body>
 </html>
 