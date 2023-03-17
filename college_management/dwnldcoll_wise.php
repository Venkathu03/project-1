<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "college_management";

$mysqli = new mysqli($servername, $username, $password, $dbname);
                    if(isset($_GET['institution_name'])) {
                    $management_id = mysqli_real_escape_string($mysqli,$_GET['institution_name']);
                    $sql = "SELECT * FROM institution_details WHERE State='$management_id'";
                    //$query_run = mysqli_query($mysqli, $query);
                    $result = $mysqli->query($sql);

                    header('Content-type: application/vnd-ms-excel');
                    $filename = "Institution_Report.xls";
                    header("Content-Disposition:attachment;filename=\"$filename\"");
                    
?>

<table align="center" border="1px" style="width: 500px; line-height: 50px; font-family: timesnewroman;" >
                 <tr>
                    <t>
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
</t>
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
                   </table>
                   <?php 
}
}
?>
