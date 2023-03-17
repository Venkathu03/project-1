<?php
session_start();
?>
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

<!DOCTYPE html>
 <html>
 <head>
    <!-- links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
         rel="stylesheet">
    <!-- links -->
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title> Medisim VR </title>
 	<!-- <h1 align="center" style="padding-top: 50px;"> Assets Management </h1> -->
    <!-- icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<!-- icon --> 
    <style>
        .update:hover{
            background: yellow;
            color:black;
            transform: scale(1.2);
            transition: .5s;
        }
        .home_btn{
    font-size: 36px;
    position: relative;
    top: 9px;
    right: 380px;
    color: #20798d;
    transition: 1s;
 }
 @media screen and (max-width: 768px) {
    .home_btn{
        right: 16px;
    }
 }
 .home_btn:hover{
    color: #fff;
    transform: scale(1.1);
    transition: 1s;
    /* border: solid 1px #67ff10; */
 }
 .btns{
    border : none;
    transition: .6s;
 }
 .btns:hover{
    color: #fff;
    background : #00BFFF;
    transform: scale(1.1);
    transition: .6s;
    /* border: solid 1px #67ff10; */
 }
 .back_arrow{
    font-size: 30px;
 }
 .back{
    font-size: 14px;
    position: relative;
    bottom: 9px;
    /* right: 9px; */
    font-weight: 700;
 }
    </style>
 </head>
 <br>
 <body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
 <?php include('message.php'); ?>

                <div class="card">
                <div class="card-header" style="background-image: linear-gradient(to right, #46BBD5, #8DC26F);">
                        <h1 class = "text-center pt-4 pb-4"><a href="home.php"><span class="material-symbols-outlined home_btn">house </span></a> College Management</h1>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
 <table  border="1px" style="line-height: 50px;"  id="mytableID" class="table table-striped sampleTable">
 	<tr>
 	<!-- <h2 class="text-center"> Assets View </h2> -->
 	</tr>
 	<t>
 		<th> Id  </th>
 		<th> State </th>
 		<th> Name of the Institution </th>
 		<th> Institution_Category </th>
        <th> Management_Type </th>
        <th> Intake </th>
        <th> Annual_Fee </th>
        <th> Website </th>
        <th> Contact_Person_Name </th>
        <th> Contact_Person_Designation </th>
        <th> Contact_Person_LinkedIn </th>
        <th> Contact_Person_Contact_Number </th>
        <th> Contact_Person_EmailId </th>
        <th> Contact_Person_Name1 </th>
        <th> Contact_Person_Designation1 </th>
        <th> Contact_Person_LinkedIn1 </th>
        <th> Contact_Person_Contact_Number1</th>
        <th> Contact_Person_EmailId1 </th>
        <th> Contact_Person_Name2 </th>
        <th> Contact_Person_Designation2 </th>
        <th> Contact_Person_LinkedIn2 </th>
        <th> Contact_Person_Contact_Number2</th>
        <th> Contact_Person_EmailId2 </th>
        <th> Contact_Person_Name3 </th>
        <th> Contact_Person_Designation3 </th>
        <th> Contact_Person_LinkedIn3 </th>
        <th> Contact_Person_Contact_Number3</th>
        <th> Contact_Person_EmailId3 </th>
        <th> Contact_Person_Name4 </th>
        <th> Contact_Person_Designation4 </th>
        <th> Contact_Person_LinkedIn4 </th>
        <th> Contact_Person_Contact_Number4</th>
        <th> Contact_Person_EmailId4 </th>
        <th> Contact_Person_Name5 </th>
        <th> Contact_Person_Designation5 </th>
        <th> Contact_Person_LinkedIn5 </th>
        <th> Contact_Person_Contact_Number5</th>
        <th> Contact_Person_EmailId5 </th>
        <th> Comments </th>
        <th> College_Info </th>
        <th> File </th>
        
        <th> Actions </th>
        

 	</t>
 	<?php
 	while ($rows = mysqli_fetch_assoc($result))
 	{
 	 ?>
 	 <tr>
 	 	<td><?php echo $rows['id']  ?> </td>
 	 	<td><?php echo $rows['State']  ?> </td>
 	 	<td><?php echo $rows['Institution_Name']  ?> </td>
 	 	<td><?php echo $rows['Institution_Category']  ?> </td>
 	 	<td><?php echo $rows['Management_Type']  ?> </td>
 	 	<td><?php echo $rows['Intake']  ?> </td>
 	 	<td><?php echo $rows['Annual_Fee']  ?> </td>
        <td><?php echo "<a href='" . $rows['Website'] . "'>" . $rows['Website'] . "</a>"; ?></td>
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
 	 	<td><?php echo $rows['File']  ?> </td>

    <td><a href="<?php echo $rows['File']; ?>"><button style="color:white; border-style:none; border-radius:5px; padding:5px 10px; cursor: pointer; background-color:green;"> Download </button></a></td>     
    <td> <a href="edit_form.php?State=<?= $rows['State'];  ?>"> <button class= "btn update" style = "background:#3DDCB3; color:white; transition: .5s;"> update </button></a></td>
    <td> <a href="delete.php?Institution_Name=<?= $rows['Institution_Name'];  ?>"> <button class= "btn update" onclick="return deleletconfig()" style = "background:#ff0000; color:white; transition: .5s;"> Delete </button></a> </td>
 	</tr>
 <?php
}
  ?>
 </table>
 </div>
<div class = "mt-3">

<button class = "btns" onclick="window.location.href='sear.html'">
<i><span class="material-symbols-outlined back_arrow">
undo 
</span></i>
<small class = "back">Go Back</small>
</button>
</div>

 <!-- <a href="home.php"><button type="button" style="border-radius: 5px; border: none; font-size: 20px; background-color: lightskyblue; font-family: georgia; margin: 10px; padding: 15px;"> --- Go Back --- </button></a> -->
 </div>
 <div class="card-footer">
    <small class = 'float-end'>&copy; Medisim VR</small>
 </div>
</div> 
</div> 
</div> 
</div>
 <script>
    
function deleletconfig(){

var del=confirm("Are you sure you want to delete this record?");
if (del==true){
   alert ("record deleted...!")
}
return del;
}

    </script>


</body>
 </html>