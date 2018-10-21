<?php

session_start();

include("function/config.php");
$pets = $_GET['pets'];
if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php

       $username = $_SESSION['username'];
       $parameter = "SELECT * from user_tbl WHERE username = '$username'";

       $condi = mysqli_query($conn,$parameter);

       $ros = mysqli_fetch_array($condi);

       $user_id = $ros['user_id'];

       $formid = $ros['formid'];

       $userlvl = $ros['user_type'];

       $names = $ros['Name'];

       $email_address = $ros['email_address'];

       $contact_number = $ros['contact_number'];
       
       $addresss = $ros['address'];

?>
<?php

   $sql = "SELECT * from tbl_pets left join user_tbl on tbl_pets.user = user_tbl.user_id where tbl_pets.pet_id = '$pets'";

   $query = mysqli_query($conn,$sql);

   $row = mysqli_fetch_array($query);

   $pet_name = $row['pet_name'];

   $pet_age = $row['pet_age'];

   $pet_type = $row['pet_type'];

   $pet_image = $row['pet_image'];

   $vax = $row['vax'];

   $dex = $row['dex'];

   $pet_details = $row['pet_details'];

   $pet_location = $row['pet_location'];

   $pet_category = $row['pet_category'];

   $pet_gender = $row['pet_gender'];

?>

<?php 

if($userlvl == "admin"){

   include("include/superadmin_header.php");

}elseif($userlvl == "super"){

  include("include/header_admin.php");

}elseif($userlvl == "user"){

   include("include/headers.php");

}

?>
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row top_tiles">
            <div class="row">
              <div class="col-md-8">
                <div class="x_panel">
                  <div class="x_title">
                  
                    <ul class="nav navbar-right panel_toolbox">
                 
                    </ul>
                    <h4>Edit Details of Pet</h4>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <form action="" method="post">
       <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">     
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Pet Name:</b></label>
<input type="text" name="petname" required class="form-control" id="field-1" placeholder="" value="<?php echo $pet_name; ?>">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Photos:</b></label>
<input type="file" name="pet_image" required class="form-control" id="field-1" value="<?php echo $pet_image; ?>">
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Pet Location:</b></label>

<select name="pet_location" class="form-control">
<option value="<?php echo $pet_location; ?>"><?php echo $pet_location; ?></option>
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
<option value="<?php echo $pet_category; ?>"><?php echo $pet_category; ?></option>
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
<label for="field-1" class="control-label"><b>Vax:</b></label>
<input type="text" name="vax" class="form-control" placeholder="" value="<?php echo $vax; ?>">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Dex</b></label>
<br>
<input type="text" name="dex" placeholder="" class="form-control" value="<?php echo $dex; ?>">
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Pet Age:</b></label>
<input type="text" name="pet_age" required class="form-control" id="field-1" value="<?php echo $pet_age; ?>">

</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Decription:</b></label>
<textarea type="text" name="pet_details" class="form-control"><?php echo $pet_details; ?></textarea>

</div>
</div>
</div>
<br>
<!-- <div class="row">
<div class="col-md-12">
<div class="form-group">
  <a href="update_membership.php" style="float: right; color: #6cb76e;"><b>Update Membership Form ></b></a>
  <br>
<div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b> 

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div>
</div>
</div>
</div> --> 
</div>
<br>
<div class="modal-footer">
<input type="submit" class="btn btn-primary" name="updates" style="background: #6cb76e; color: white; float: right; border-color: #6cb76e;" value="Save Changes">
</div>
</form>


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
          <p>Online Animal Welfare © <script>document.write(new Date().getFullYear())</script>. All Rights Reserved</p>
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>

<?php

if (isset($_POST['updates'])) {

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

$querys = "UPDATE tbl_pets set pet_name = '$petname', pet_age = '$pet_age', pet_type = '$pet_type', pet_image = '$pet_image', pet_details = '$pet_details', pet_location = '$pet_location', pet_category = '$catname', pet_gender = '$pet_gender', vax = '$vax', dex = '$dex', where pet_id = '$pets'";

$processs = mysqli_query($conn, $querys);

if ($processs) {
echo "<script>alert('Successfully')</script>";
echo "<script>window.open('add_pet.php','_self')</script>";

}else{

echo "<script>alert('Something went wrong')</script>";
}

}

?>
<?php } ?>