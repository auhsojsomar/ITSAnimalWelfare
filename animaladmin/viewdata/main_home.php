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

   $userlvl = $ros['user_type'];
   $statusmember = $ros['status_member'];

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
            <div class="row top_tiles">
            <div class="row">
              <div class="col-md-3">
                <div class="x_panel">
                  <div class="title">
                  
                    <ul class="nav navbar-right panel_toolbox">
                 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <h4>Total Number of Users</h4>
                     <center>
                 <div style="font-size: 50px;">7</div>
              </center>
                  </div>
                </div>
              </div>
   
                  <div class="col-md-3">
                <div class="x_panel">
                  <div class="title">
                  
                    <ul class="nav navbar-right panel_toolbox">
                 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <h4>Daily Sales</h4>
                      <center>
                 <div style="font-size: 50px;">7</div>
              </center>
                  </div>
                </div>
              </div>
   

                  <div class="col-md-3">
                <div class="x_panel">
                  <div class="title">
                  
                    <ul class="nav navbar-right panel_toolbox">
                 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <h4>Total Active Users</h4>
                     <center>
                <div style="font-size: 50px;">7</div>
              </center>
                  </div>
                </div>
              </div>
     

          <div class="col-md-3">
                <div class="x_panel">
                  <div class="title">
                  
                    <ul class="nav navbar-right panel_toolbox">
                 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <h4>Total Active Users</h4>
                     <center>
                <div style="font-size: 50px;">7</div>
              </center>
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
          <p>BCC Inc © <script>document.write(new Date().getFullYear())</script>. All Rights Reserved</p>
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
  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function () {
        $('#show').load('data.php')
      }, 3000);
    });
  </script>
<?php } ?>