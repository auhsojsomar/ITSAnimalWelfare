<?php

session_start();

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

$names = $rows['Name'];

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


$user_id = $ros['user_id'];

$userlvl = $ros['user_type'];

$proved = $ros['proved'];

?>


  <?php 

      if($userlvl == "admin"){

         include("include/superadmin_header.php");

      }elseif($userlvl == "super"){

         include("include/header_admin.php");

      }elseif($userlvl == "user"){

          if ($proved == "0") {
           
              echo "<script>alert('Please send for your identification')</script>";
              echo "<script>window.open('send_attached.php','_self')</script>";

          }elseif($proved == "1"){
              
             echo "<script>window.open('please_wait.php','_self')</script>";
                
          }else{

              include("include/headers.php");

          }
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
<button type="button" style="float: right; background: #6cb76e; color: white; border-color: #6cb76e;" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Add</button><br>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content" style="width: 500px; margin-left: 200px;">

<div class="modal-header">
<form action="" method="post" enctype="multipart/form-data">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
</button>
<h4 class="modal-title" id="myModalLabel">Add Pet</h4>
</div>

<div class="modal-body">

<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Pet Name:</b></label>
<input type="text" name="petname" required class="form-control" id="field-1" placeholder="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Photos:</b></label>
<input type="file" name="profilepet" required class="form-control" id="field-1">

</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Pet Location:</b></label>

<select name="pet_location" class="form-control">
  <option>----Select Location----</option>
  <?php 
   
   $sql = mysqli_query($conn, "SELECT * from location");

   while ($row = mysqli_fetch_array($sql)) {

  ?>
<option value="Quezon City"><?php echo $row['location_name']; ?></option>
<?php

}

?>
</select>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Pet Category:</b></label>
<select name="catname" class="form-control">
  <option>----Select Level----</option>
  <?php
     
     $sql = mysqli_query($conn, "SELECT * from pet_category where statuss = 'Available'");

     while ($rows = mysqli_fetch_array($sql)) {
        
  ?>

  <option value="<?php echo $rows['catname']; ?>"><?php echo $rows['catname']; ?></option>

<?php } ?>
  
</select>

</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Type Breed:</b></label>
<input type="text" name="pet_type" class="form-control" placeholder="">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Pet Gender</b></label>
<br>
<select name="pet_gender" class="form-control">
  <option>----Select Gender----</option>
 <option value="Female">Female</option>
 <option value="Male">Male</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Vaccine:</b></label>
<select name="vax" class="form-control">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Dewormed:</b></label>
<select name="dex" class="form-control">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Pet Age:</b></label>
<input type="text" name="pet_age" required class="form-control" id="field-1">

</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Decription:</b></label>
<textarea type="text" name="pet_details" class="form-control"></textarea>

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

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>View of Pet<small style="color: #6cb76e;">Online Animal Welfare.</small></h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
<p class="text-muted font-13 m-b-30">

</p>

<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
<thead>
<tr>
  <th>Pet Image</th>
<th>Pet Name</th>
<th>Age</th>
<th>Gender</th>
<th>Vaccine</th>
<th>Dewormed</th>
<th>Type</th>
<th>Location</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<?php

$username = $_SESSION['username'];                   
$query = mysqli_query($conn,"SELECT * from tbl_pets left join user_tbl on tbl_pets.user = user_tbl.user_id where tbl_pets.status = '1' and user_tbl.username = '$username' ORDER by tbl_pets.pet_id desc");

while ($row = mysqli_fetch_array($query)) {

?>

<tr>
<td><center><img src="profilepet/<?php echo $row['pet_image']; ?>" style="width: 60px; height: 50px;"></center></td>
<td><?php echo $row['pet_name']; ?></td>
<td><?php echo $row['pet_age']; ?></td>
<td><?php echo $row['pet_gender']; ?></td>
<td><?php echo $row['vax']; ?></td>
<td><?php echo $row['dex']; ?></td>
<td><?php echo $row['pet_type']; ?></td>
<td><?php echo $row['pet_location']; ?></td>
<td><center><a href="#" style="text-align: center; color: white; background: #e93434;" onClick="deactive(<?php echo $row['pet_id']; ?>)"  class="btn-sm waves-effect btn-defaultts" name="upade">Delete</a> <a href="edit_pets.php?pets=<?php echo $row['pet_id']; ?>" style="text-align: center; color: white; background: #6cb76e;" class="btn-sm waves-effect btn-defaultts" name="upade">Edit</a></center></td>

</tr>

<?php
}
?>

</tbody>
</table>


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
Online Animal Welfare © 2018. All Rights Reserved
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
  
function deactive(delid){

if (confirm("Are you sure you want to Delete this?")) {

window.location.href = 'delete_pet.php?del_pet='+delid+'';

}

}

</script>

<?php

if (isset($_POST['adds'])) {

$petname = mysqli_real_escape_string($conn,$_POST['petname']);

$pet_location = mysqli_real_escape_string($conn,$_POST['pet_location']);

$catname = mysqli_real_escape_string($conn,$_POST['catname']);

$pet_gender = mysqli_real_escape_string($conn, $_POST['pet_gender']);

$vax = mysqli_real_escape_string($conn, $_POST['vax']);

$dex = mysqli_real_escape_string($conn, $_POST['dex']);

$pet_age = mysqli_real_escape_string($conn, $_POST['pet_age']);

$pet_details = mysqli_real_escape_string($conn, $_POST['pet_details']);

$pet_type = mysqli_real_escape_string($conn, $_POST['pet_type']);

$profilepet = $_FILES['profilepet']['name'];

$temp_name1 = $_FILES['profilepet']['tmp_name'];

move_uploaded_file($temp_name1,"profilepet/$profilepet");

$querys = "INSERT into tbl_pets(pet_id,pet_name,pet_age,pet_type,pet_image,pet_details,pet_location,pet_category,pet_gender,vax,dex,user) VALUES('','$petname','$pet_age','$pet_type','$profilepet','$pet_details','$pet_location','$catname','$pet_gender','$vax','$dex','$user_id')";

$processs = mysqli_query($conn, $querys);

if ($processs) {
echo "<script>alert('Successfully')</script>";
echo "<script>window.open('add_pet.php','_self')</script>";

}else{

echo "<script>alert('Something went wrong')</script>";
}

}

?>
<?php  } ?>