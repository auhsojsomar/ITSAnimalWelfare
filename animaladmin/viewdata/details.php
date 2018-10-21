<?php

session_start();

$pet_id = $_GET['pet_id'];
include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php
$admin_session = $_SESSION['username'];
$query = "SELECT * from user_tbl where username = '$admin_session'";

$direct = mysqli_query($conn,$query);

$rows = mysqli_fetch_array($direct);

$adminID = $rows['userid'];

// $names = $rows['Name'];

$firstname = $rows['firstname'];

$lastname = $rows['lastname'];

$aemail = $rows['aemail'];

$acontact = $rows['acontact'];

$branch = $rows['branch'];

?>
<?php
$username = $_SESSION['username'];
$parameter = "SELECT * from user_tbl where username = '$username'";
$condi = mysqli_query($conn,$parameter);

$ros = mysqli_fetch_array($condi);


$userid = $ros['userid'];
$userlvl = $ros['user_type'];
$userid = $ros['user_id'];
$namess = $ros['Name'];

?>

<?php

   $sql = mysqli_query($conn, "SELECT * from tbl_pets inner join user_tbl on tbl_pets.user = user_tbl.user_id where tbl_pets.pet_id = '$pet_id'");

   $row = mysqli_fetch_array($sql);


   $users = $row['user'];

   $petsid = $row['pet_id'];

   $pet_name = $row['pet_name'];

   $pet_age = $row['pet_age'];

   $pet_type = $row['pet_type'];

   $vax = $row['vax'];

   $dex = $row['dex'];

   $pet_image = $row['pet_image'];

   $names_owner = $row['Name'];

   $pet_details = $row['pet_details'];

   $pet_location = $row['pet_location'];

   $pet_category = $row['pet_category'];

   $pet_gender = $row['pet_gender'];

   $date_created = $row['date_created'];

   $user = $row['user'];


?>

  <?php 

      if($userlvl == "admin"){

         include("include/superadmin_header.php");

      }elseif($userlvl == "user"){

         include("include/headers.php");

      }

    ?>

<!-- page content -->
<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">

</div>
<?php
error_reporting(0);
define('INCLUDE_CHECK',1);
include("function/functions.php");
?>
<div class="title_right">
<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

</div>
</div>
</div>
<br>
<!-- <button type="button" style="float: right; background: #6cb76e; color: white; border-color: #6cb76e;" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Add</button><br> -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content" style="width: 500px; margin-left: 200px;">

<div class="modal-header">
<form action="" method="post" enctype="multipart/form-data">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
</button>
<h4 class="modal-title" id="myModalLabel">Add Member</h4>
</div>

<div class="modal-body">

<input type="hidden" name="adminID" value="<?php echo $adminID; ?>">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>First Name:</b></label>
<input type="text" name="firstname" required class="form-control" id="field-1" placeholder="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Last Name:</b></label>
<input type="text" name="lastname" required class="form-control" id="field-1" placeholder="">

</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Select Level:</b></label>

<select name="user_level" class="form-control">
  <option>----Select Level----</option>
  <?php
     
     $sql = mysqli_query($conn, "SELECT * from user_level where enabled = 1");

     while ($rows = mysqli_fetch_array($sql)) {
        
  ?>

  <option value="<?php echo $rows['title_userlevel']; ?>"><?php echo $rows['title_userlevel']; ?></option>

<?php } ?>
  
</select>

</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Username:</b></label>
<input type="text" name="username" required class="form-control" id="field-1" placeholder="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Password:</b></label>
<input type="text" name="password" required class="form-control" id="field-1" placeholder="">

</div>
</div>
</div>
</div>
<div class="modal-footer">

<input type="submit" class="btn btn-primary" name="adds" style="background: #6cb76e; color: white; border-color: #6cb76e;" value="Add">

</div>

</div>

</div>
</form>
</div>
<br>
<br>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-8">
<div class="x_panel">
<div class="x_title">
<h2>Details<small style="color: #6cb76e;">Online Animal Welfare.</small></h2>

<div class="clearfix"></div>
</div>
<form action="" method="post">
  <input type="hidden" name="userid" value="<?php echo $userid; ?>">
  <input type="hidden" name="petsid" value="<?php echo $petsid; ?>">
  <input type="hidden" name="namess" value="<?php echo $namess; ?>">
<div class="x_content">
   <b style="float: left;"><?php echo $names_owner; ?> (Owner)</b> <p style="float: right;"><?php echo $date_created; ?></p>
   <br>
<p class="text-muted font-13 m-b-30">
</p>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<img src="profilepet/<?php echo $pet_image; ?>" class="col-md-3" style="width: 300px; height: 250px; margin-left: 10px;"><br>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<br>
<label for="field-1" class="control-label"><b>Name: <?php echo $pet_name; ?></b></label><br>
<label for="field-1" class="control-label"><b>Age: <?php echo $pet_age; ?></b></label><br>
<label for="field-1" class="control-label"><b>Breed: <?php echo $pet_type; ?></b></label><br>
<label for="field-1" class="control-label"><b>Vaccine: <?php echo $vax; ?></b></label><br>
<label for="field-1" class="control-label"><b>Dewormed: <?php echo $dex; ?></b></label>
<label for="field-1" class="control-label"><b>Category: <?php echo $pet_category; ?></b></label>
<label for="field-1" class="control-label"><b>Location: <?php echo $pet_location; ?></b></label>
<label for="field-1" class="control-label"><b>Description:</b><br>
<b style="margin-left: 40px;"><?php echo $pet_details; ?></b></label><br>
<hr>
<label for="field-1" class="control-label"><b><a href="send_message.php?userid=<?php echo $petsid; ?>" style="color: #438b45;">Message</a></b></label>
<div style="margin-left: 250px; margin-top: 0px;">
  
  <hr>
  <input type="submit" name="submits" class="btn btn-default submit" style="color: white; float: right; margin-right: -80px; background: #438b45; width: 100px;" value="Adopt">

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
<div class="pull-right">
Online Animal Welfare © 2018. All Rights Reserved <a href="https://colorlib.com"></a>
</div>
<div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>
<script>
  
function adopt(delid){

if (confirm("Are you sure you want to Adopt this?")) {

window.location.href = 'deactive.php?deactive='+delid+'';

  }
}

</script>
<script>

 function create(delid){
    
    if ("Are you sure you want to Adopt this") {
 
        window.location.href = 'create_message.php?sending='+delid+'';

    }
 }

</script>
<?php

if (isset($_POST['submits'])) {

$querys = "INSERT into adoption(adopt_id,pets,users_id,fullname_adoption) VALUES('','$petsid','$userid','$namess')";

$processs = mysqli_query($conn, $querys);

$querys = "UPDATE tbl_pets set status = '0', get_adopt = '1' where pet_id = '$pet_id'";

$processs = mysqli_query($conn, $querys);

if ($processs) {
echo "<script>alert('Successfully Adopt')</script>";
echo "<script>window.open('index.php','_self')</script>";

}else{

echo "<script>alert('Something went wrong')</script>";
}

}

?>

<?php  } ?>