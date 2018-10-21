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
   $parameter = "SELECT * from user_tbl where username = '$username'";
   $condi = mysqli_query($conn,$parameter);

   $ros = mysqli_fetch_array($condi);

   $userid = $ros['userid'];

   $formid = $ros['formid'];

   $userlvl = $ros['user_type'];

   $firstname = $ros['firstname'];

   $lastname = $ros['lastname'];

   $middlename = $ros['middlename'];

   $email = $ros['email_address'];
   
   $telephone = $ros['telephone_number'];

   $birthday = $ros['birthdate'];

   $username = $ros['username'];

   $password = $ros['password'];

   $gender = $ros['gender'];

   $mobiles = $ros['mobile_number'];


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
              <div class="col-md-6">
                <div class="x_panel">
                  <div class="x_title">
                  
                    <ul class="nav navbar-right panel_toolbox">
                 
                    </ul>
                    <h4>Security and Privacy</h4>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
<form action="" method="post">
               <div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Username:</b></label>
<input type="hidden" name="userid" class="form-control" value="<?php echo $userid; ?>">
<input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
</div>
</div>
</div>
<br>
<hr>
<br>
 <div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Password:</b></label>
<input type="password" name="password" class="form-control">
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Confirm Password:</b></label>
<input type="password" name="password2" class="form-control">
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
</div>
</div>
</div>
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

$username = mysqli_real_escape_string($conn,$_POST['username']);

$password = mysqli_real_escape_string($conn,$_POST['password']);

$password2 = mysqli_real_escape_string($conn, $_POST['password2']);

if($password == $password2){

$sql = "UPDATE users set username = '$username', password = '$password' where userid = $userid";

}
$processs = mysqli_query($conn, $sql);
if ($processs) {
  
echo "<script>alert('Successfully')</script>";
echo "<script>window.open('privacy.php','_self')</script>";
}else{
echo "<script>alert('Something went wrong')</script>";
}

}

?>
<?php } ?>