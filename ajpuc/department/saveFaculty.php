<?php
extract($_REQUEST);
include("dbconfig.php");

//$url = "../img/faculty/$fnum.$type";
//move_uploaded_file($_FILES['userImage']['tmp_name'], $url);

$sql = "INSERT INTO faculty(Fname,Lname,Phone_No,Email_ID,Status,Gender,Qualification,Password, Add_1 ,Add_2,Pincode,URL) 
                    VALUES ('$fname', '$lname', '$phoneno', '$email', '$status', '$gender','$qualification','$pass','$add1','$add2','$pincode','$url')";
$result = $con->query($sql);
//$last_id = $con->insert_id;
if($result == True ){
   echo "<script>window.location.assign('Faculty_List.php?success=true');</script>";
}
else{
    echo "<script>window.location.assign('Faculty_List.php?error=true');</script>";
}
?>