<?php
extract($_REQUEST);
include("dbconfig.php");

$sql1 = "select * FROM subject WHERE  Sub_Code='$Sub_Code'";
$result1 = $con->query($sql1);

if($row1 = $result1->fetch_assoc())
{
    
  $sql = "DELETE FROM subject WHERE  Sub_Code='$subjectcode'";
  $result = $con->query($sql);


   if($result == True )
   {
   echo "<script>window.location.assign('listsubs.php?success=true');</script>";
   }
   else
   {
    echo "<script>window.location.assign('listsubs.php?deasucc=true');</script>";
   }
}
else
{
    $sql2 = "DELETE FROM subject WHERE  Sub_Code='$subjectcode'";
     $result2 = $con->query($sql2);
     
      if($result2 == True )
   {
   echo "<script>window.location.assign('listsubs.php?success=true');</script>";
   }
   else
   {
    echo "<script>window.location.assign('listsubs.php?deasucc=true');</script>";
   }
}