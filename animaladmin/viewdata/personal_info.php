<?php

session_start();

include("function/config.php");

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
                    <h4>Personal Info</h4>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <form action="" method="post">
                      <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Fullname:</b></label>
<input type="text" name="Name" value="<?php echo $names;?>" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-2" class="control-label"><b>Email Address:</b></label>
<input type="email" name="email_address" class="form-control" value="<?php echo $email_address; ?>" disabled>
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Contact Number:</b></label>
<input type="text" name="contact_number" value="<?php echo $contact_number;?>" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Address:</b></label>
<input type="text" name="address" class="form-control" value="<?php echo $addresss; ?>">
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
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

$namess = $_POST['Name'];

$emails = $_POST['email_address'];

$contact_number = $_POST['contact_number'];

$address = $_POST['address'];

$querys = mysqli_query($conn,"UPDATE user_tbl SET Name = '$namess', email_address = '$emails', contact_number = '$contact_number', address = '$address' WHERE user_id = '$user_id'");

if ($querys) {
echo "<script>alert('Successfully')</script>";
echo "<script>window.open('personal_info.php','_self')</script>";
}else{
echo "<script>alert('Something went wrong')</script>";
}

}

?>
<?php } ?>