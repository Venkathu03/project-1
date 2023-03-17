<?php
session_start();

if (isset($_POST['edit'])) { 

    // $id = $_POST['id'];
    $name = $_POST['institute_name'];
    // $state = $_POST['states'];
    // $instcat = $_POST['inscat'];
    // $Management = $_POST['management'];
    // $Intake = $_POST['intake'];
    $annual_fee = $_POST['annual_fee'];
    // $website = $_POST['website'];
    $Management_name = $_POST['management_name'];
    $Management_designation = $_POST['management_designation'];
    $Management_linkedin = $_POST['management_linkedin'];
    $Management_contact = $_POST['management_contact'];
    $Management_email = $_POST['management_email'];
    $Management_name1 = $_POST['name1'];
    $Management_designation1 = $_POST['design1'];
    $Management_linkedin1 = $_POST['linked1'];
    $Management_contact1 = $_POST['conct1'];
    $Management_email1 = $_POST['email1'];
    $Management_name2 = $_POST['name2'];
    $Management_designation2 = $_POST['design2'];
    $Management_linkedin2 = $_POST['linked2'];
    $Management_contact2 = $_POST['conct2'];
    $Management_email2 = $_POST['email2'];
    $Management_name3 = $_POST['name3'];
    $Management_designation3 = $_POST['design3'];
    $Management_linkedin3 = $_POST['linked3'];
    $Management_contact3 = $_POST['conct3'];
    $Management_email3 = $_POST['email3'];
    $Management_name4 = $_POST['name4'];
    $Management_designation4 = $_POST['design4'];
    $Management_linkedin4 = $_POST['linked4'];
    $Management_contact4 = $_POST['conct4'];
    $Management_email4 = $_POST['email4'];
    $Management_name5 = $_POST['name5'];
    $Management_designation5 = $_POST['design5'];
    $Management_linkedin5 = $_POST['linked5'];
    $Management_contact5 = $_POST['conct5'];
    $Management_email5 = $_POST['email5'];
    $comments = $_POST['comments'];
    $college_info = $_POST['college_info'];
    //$Added_By = 'Vengadesh';
  $conn = mysqli_connect("localhost", "root", "", "college_management"); //---->Test

  $query = "UPDATE institution_details SET  Annual_Fee = '$annual_fee', Contact_Person_Name  = '$Management_name', Contact_Person_Designation = '$Management_designation', Contact_Person_LinkedIn = '$Management_linkedin', Contact_Person_Contact_Number = '$Management_contact', Contact_Person_EmailId = '$Management_email', Contact_Person_Name1 = '$Management_name1', Contact_Person_Designation1 = '$Management_designation1', Contact_Person_LinkedIn1 = '$Management_linkedin1', Contact_Person_Contact_Number1 = '$Management_contact1', Contact_Person_EmailId1 = '$Management_email1', Contact_Person_Name2  = '$Management_name2', Contact_Person_Designation2 = '$Management_designation2', Contact_Person_LinkedIn2 = '$Management_linkedin2', Contact_Person_Contact_Number2 = '$Management_contact2', Contact_Person_EmailId2 = '$Management_email2',Contact_Person_Name3 = '$Management_name3', Contact_Person_Designation3 = '$Management_designation3', Contact_Person_LinkedIn3 = '$Management_linkedin3', Contact_Person_Contact_Number3 = '$Management_contact3', Contact_Person_EmailId3 = '$Management_email3', Contact_Person_Name4 = '$Management_name4', Contact_Person_Designation4 = '$Management_designation4', Contact_Person_LinkedIn4 = '$Management_linkedin4', Contact_Person_Contact_Number4 = '$Management_contact4', Contact_Person_EmailId4 = '$Management_email4',Contact_Person_Name5 = '$Management_name5', Contact_Person_Designation5 = '$Management_designation5', Contact_Person_LinkedIn5 = '$Management_linkedin5', Contact_Person_Contact_Number5 = '$Management_contact5', Contact_Person_EmailId5 = '$Management_email5', Comments ='$comments' , College_Info='$college_info' where institution_name= '$name' ";
  if (mysqli_query($conn, $query)) {
    // echo "Updated Successfully";
    $_SESSION['message'] = "Successfully Updated...!";
    header('Location: coll_edit.php');
    exit(0);

    // header('Location: edit_form.php');
  }
  else  {
    $_SESSION['message'] = "Update Not Success...!";
    header('Location: coll_edit.php');
    exit(0);
  }
  // Insert form data into database
//   $sql = "INSERT INTO institution_details(Institution_Name, State, Institution_Category, Management_Type, Intake, Annual_Fee, Website, Contact_Person_Name, Contact_Person_Designation, Contact_Person_LinkedIn, Contact_Person_Contact_Number, Contact_Person_EmailId,Contact_Person_Name1, Contact_Person_Designation1, Contact_Person_LinkedIn1, Contact_Person_Contact_Number1, Contact_Person_EmailId1,Contact_Person_Name2, Contact_Person_Designation2, Contact_Person_LinkedIn2, Contact_Person_Contact_Number2, Contact_Person_EmailId2,Contact_Person_Name3, Contact_Person_Designation3, Contact_Person_LinkedIn3, Contact_Person_Contact_Number3, Contact_Person_EmailId3,Contact_Person_Name4, Contact_Person_Designation4, Contact_Person_LinkedIn4, Contact_Person_Contact_Number4, Contact_Person_EmailId4,Contact_Person_Name5, Contact_Person_Designation5, Contact_Person_LinkedIn5, Contact_Person_Contact_Number5, Contact_Person_EmailId5, Comments, College_Info)
//           VALUES ('$name','$state','$instcat','$Management','$Intake','$annual_fee','$website','$Management_name','$Management_designation','$Management_linkedin','$Management_contact','$Management_email','$Management_name1','$Management_designation1','$Management_linkedin1','$Management_contact1','$Management_email1','$Management_name2','$Management_designation2','$Management_linkedin2','$Management_contact2','$Management_email2','$Management_name3','$Management_designation3','$Management_linkedin3','$Management_contact3','$Management_email3','$Management_name4','$Management_designation4','$Management_linkedin4','$Management_contact4','$Management_email4','$Management_name5','$Management_designation5','$Management_linkedin5','$Management_contact5','$Management_email5','$comments','$college_info')"; // Added_By,'$Added_By' )
//   if (mysqli_query($conn, $sql)) {
//     $_SESSION['status'] = true;
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }
//   mysqli_close($conn);
// }
}

?>
