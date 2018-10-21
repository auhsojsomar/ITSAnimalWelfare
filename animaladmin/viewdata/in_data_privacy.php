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
   $parameter = "SELECT * from users where username = '$username'";
   $condi = mysqli_query($conn,$parameter);

   $ros = mysqli_fetch_array($condi);

   $userlvl = $ros['user_level'];

?>

<?php 

if ($userlvl  === "Admin"){

   include("include/header_admin.php");

}elseif($userlvl === "Finance"){

  include("include/finance_header.php");

}elseif($userlvl === "Super"){

   include("include/superadmin_header.php");


}else{

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
                    <h4>Data Privacy</h4>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

 <div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Username:</b></label>
<input type="text" name="current" class="form-control">
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Password:</b></label>
<input type="Password" name="password2" class="form-control">
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
<br>
<b><a href="forgot.php" style="color: green; float: right;">forgot password?</a></b>
<br>
</div>
</div>
</div>

<div class="modal-footer">
<a href="data_privacy.php" class="btn btn-primary" name="adds" style="background: #6cb76e; color: white; float: right; border-color: #6cb76e;">In</a>
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
          <p>BCC Inc Admin Panel © <script>document.write(new Date().getFullYear())</script>. All Rights Reserved</p>
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
<?php } ?>