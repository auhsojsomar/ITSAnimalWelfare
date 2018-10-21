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
              <div class="col-md-8">
                <div class="x_panel">
                  <div class="x_title">
                  
                    <ul class="nav navbar-right panel_toolbox">
                     
                    </ul>
                    <h4>View of All Announcement</h4>
                    <div class="clearfix"></div>
                
                  </div>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                      <ul id="myUL">
                      <li><a href="#">Adele</a></li>
                      <li><a href="#">Agnes</a></li>

                      <li><a href="#">Billy</a></li>
                      <li><a href="#">Bob</a></li>

                      <li><a href="#">Calvin</a></li>
                      <li><a href="#">Christina</a></li>
                      <li><a href="#">Cindy</a></li>
                    </ul>
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

<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
<?php } ?>