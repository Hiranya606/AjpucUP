<?php
extract($_REQUEST);
include("dbconfig.php");
// $type = explode('.', $_FILES['userImage']['name']);
//     $type = $type[count($type) - 1];

// $url = "../img/students/$usn.$type";
// move_uploaded_file($_FILES['userImage']['tmp_name'], $url);

// if(empty($studnum))
// {
//     $studnum=0;
// }

$sql = "INSERT INTO student (Fname, Lname, Roll_No, Gender, Phone_No,Email_ID,Reg_No,SATS_No,Enroll_No, Fathers_Name, Mothers_Name,DOB, Address_1, Address_2,City,Pincode,Password,URL) 
       				 VALUES ('$fname','$lname','$rollno','$ge','$contactno','$email','$regno', '$sno','$eno','$fathersname','$mothersname','$dob','$add1', '$add2', '$city', '$pincode','$pass','$url')";
$result = $con->query($sql);

// Fname	Lname	Student_ID	Roll_No	Gender	Phone_No	Email_ID	Reg_No	SATS_No	Enroll_No	Fathers_Name	Mothers_Name	DOB	Address_1	Address_2	City	Pincode	



// $last_id = $con->insert_id;
if($result){
	echo "<script>window.location.assign('Student_list.php?asuccess=true');</script>";
}
else{
	echo "<script>window.location.assign('Student_list.php?error=true');</script>";
}
?>