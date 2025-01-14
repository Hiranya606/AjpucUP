<?php include('header.php');
include('sidebar.php');
include('dbconfig.php');
extract($_REQUEST);
$sql = "SELECT * FROM faculty where Fac_ID='$oldid'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Update Faculty
      </h1>
      <ol class="breadcrumb">
         <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Faculty Enroll</li>
      </ol>
      <div class="content">
         <div class="container-fluid">
            <?php
            if (isset($upsuccess)) { ?>
               <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Faculty Updated sucessfully</strong>
               </div>
            <?php }
            ?>
            <?php
            if (isset($uperror)) { ?>
               <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Faculty Update Failed</strong>
               </div>
            <?php }
            ?>
            <?php
            if (isset($success)) { ?>
               <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Faculty is added sucessfully</strong>
               </div>
            <?php }
            ?>
            <?php
            if (isset($error)) { ?>
               <div class="alert alert-warning" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Faculty is not added at this time try again!</strong>
               </div>
            <?php }
            ?>
            <a href="Faculty_List.php" class="btn btn-primary pull-right">List Faculties</a>
            <br /><br />
            <div class="panel panel-info">
               <div class="panel-heading">Add Faculty </div>
               <div class="panel-body">
                  <form class="form-horizontal" role="form" method="post" action="updatepics.php" enctype="multipart/form-data">
                     <input type="number" style="visibility:hidden;" name="oldid" value="<?php echo $oldid; ?>">


                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label>Photo</label>
                        </div>
                        <div class="col-md-6 col-sm-4 col-sx-12">
                           <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>

                           <div class="kv-avatar center-block" style="width:200px">
                              <div class="file-loading">
                                 <input id="avatar-2" name="userImage" type="file" class="file-loading">
                              </div>
                           </div>
                        </div>
                     </div> 


                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="name" class="control-label">Fname </label><span id="sp">:</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                           <input type="text" class="form-control" value="<?php echo $row['Fname']; ?>" name="fname" required>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="name" class="control-label">Lname </label><span id="sp">:</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                           <input type="text" class="form-control" value="<?php echo $row['Lname']; ?>" name="lname" required>
                        </div>
                     </div>





                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12 row-4">
                           <label for="name" class="control-label">Phone_No</label><span id="sp">:</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                           <input type="text" class="form-control" value="<?php echo $row['Phone_No']; ?>" name="phoneno">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12 row-4">
                           <label for="femail" class="control-label">Email_ID</label><span id="sp">:</span>
                        </div>
                        <div class="col-md-2 col-sm-2 col-sx-2">
                           <input type="text" size="6" maxlength="6" class="form-control" value="<?php echo $row['Email_ID']; ?>" name="email" required>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12 row-4">
                           <label for="name" class="control-label">Status</label><span id="sp">:</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                           <input type="text" class="form-control" value="<?php echo $row['Status']; ?>" name="status" required>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="name" class="control-label">Gender</label><span id="sp">:</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                          
                           <select name="gender">
                           <option value="<?php $row['Gender']; ?>"></option> 
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Others">Others</option>
                           </select>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="name" class="control-label">Qualification</label><span id="sp">:</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                           <select name="qualification">
                              <option value="<?php $row['Qualification']; ?>"></option>
                              <option value="B.Sc/M.Sc/B.Ed">B.Sc/M.Sc/B.Ed</option>
                              <option value="B.Com/M.Com/B.Ed">B.Com/M.Com/B.Ed</option>
                              <option value="B.A/M.A/B.Ed">B.A/M.A/B.Ed</option>
                              <option value="BCA/MCA/B.Ed">BCA/MCA/B.Ed</option>
                              <option value="Ph.D">Ph.D</option>
                              <option value="Ph.D">other</option>
                           </select>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="name" class="control-label">Password</label><span id="sp">:</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                           <input type="password" minlength="5" value="<?php echo $row['Password']; ?>" class="form-control" name="pass" autocomplete="off" required>
                        </div>
                     </div> 

                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="name" class="control-label">Add_1</label><span id="sp">:</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                           <input type="text" class="form-control" value="<?php echo $row['Add_1']; ?>" name="add1" required>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="name" class="control-label">Add_2</label><span id="sp">:</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                           <input type="text" class="form-control" value="<?php echo $row['Add_2']; ?>" name="add2" required>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="name" class="control-label">Pincode</label><span id="sp">:</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                           <input type="number" class="form-control" value="<?php echo $row['Pincode']; ?>" name="pincode" required>
                        </div>
                     </div>




                     <!-- <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="desig" class="control-label">Faculty Designation</label><span id="sp">:</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                           <select name="desig">
                              <option value="<?php $row['designation']; ?>"><?php echo $row['designation']; ?></option>
                              <option value="Principal">Principal</option>
                              <option value="Professor">Professor</option>
                              <option value="Asst.Professor">Asst.Professor</option>
                              <option value="Assoc.Professor">Assoc.Professor</option>
                              <option value="Lecturer">Lecturer</option>
                           </select>
                        </div>
                     </div>

                     

                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="fcemail" class="control-label">Email</label><span id="sp">:</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-sx-12">
                           <input type="text" class="form-control" value="<?php echo $row['email']; ?>" name="fcemail" autocomplete="off" required>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="expr" class="control-label">Experience in Years</label><span id="sp">:</span>
                        </div>
                        <div class="col-md-2 col-sm-2 col-sx-12">
                           <input type="number" class="form-control" value="<?php echo $row['expr']; ?>" name="expr" autocomplete="off" required>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="doj" class="control-label">Date Of Join</label><span id="sp">:</span>
                        </div>
                        <div class="col-md-2 col-sm-2 col-sx-12">
                           <input type="date" name="doj" value="<?php echo $row['doj']; ?>" data-date-inline-picker="true" required>
                        </div>
                     </div> -->



                     <br>
                     <div class="col-md-10 col-sm-10 col-sx-12">
                        <input id="submit" name="submit" type="submit" value="Update Faculty" class="btn btn-success pull-right">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<?php include("footer.php"); ?>