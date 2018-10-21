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

$userlvl = $ros['user_type'];

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

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>View of History Adoption<small style="color: #6cb76e;">Online Animal Welfare.</small></h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
<p class="text-muted font-13 m-b-30">

</p>

<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
<thead>
<tr>
<th>Photos</th>
<th>From</th>
<th>Pet Name</th>
<th>Pet Category</th>
<th>Pet Type</th>
<th>Address</th>


</tr>
</thead>
<tbody>
<?php

$username = $_SESSION['username'];                   
$query = mysqli_query($conn,"SELECT * from tbl_pets inner join user_tbl on tbl_pets.user = user_tbl.user_id inner join adoption on tbl_pets.pet_id = adoption.pets where tbl_pets.get_adopt = '1' and adoption.approved = '1' and user_tbl.username = '$username'");

while ($row = mysqli_fetch_array($query)) {

?>
<tr>
<td><center><img src="profilepet/<?php echo $row['pet_image']; ?>" style="width: 100px; height: 70px;"></center></td>
<td><?php echo $row['fullname_adoption']; ?></td>
<td><?php echo $row['pet_name']; ?></td>
<td><?php echo $row['pet_category']; ?></td>
<td><?php echo $row['pet_type']; ?></td>
<td><?php echo $row['date_adopt']; ?></td>

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
  
function approved(delid){

if (confirm("Are you sure you want to Approved this?")) {

window.location.href = 'approveds.php?approveds='+delid+'';

}

}

function cancel(delid){

if (confirm("Are you sure you want to Cancel this?")) {

window.location.href = 'cancel_approveds.php?cancel_approveds='+delid+'';

}

}

</script>



<?php

if (isset($_POST['adds'])) {

$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);

$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);

$username = mysqli_real_escape_string($conn,$_POST['username']);

$password = mysqli_real_escape_string($conn, $_POST['password']);

$user_level = mysqli_real_escape_string($conn, $_POST['user_level']);

$querys = "INSERT into users(userid,firstname,lastname,username,password,user_level) VALUES('','$firstname','$lastname','$username','$password','$user_level')";

$processs = mysqli_query($conn, $querys);

if ($processs) {
echo "<script>alert('Successfully')</script>";
echo "<script>window.open('add_member.php','_self')</script>";

}else{

echo "<script>alert('Something went wrong')</script>";
}

}

?>
<?php  } ?>