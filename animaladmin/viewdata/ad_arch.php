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

   $names = $ros['Name'];

   $userlvl = $ros['user_type'];

?>

<?php 

      if ($userlvl == "admin"){

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
                    <h4>Previews</h4>
                    <div class="clearfix"></div>
                
                  </div>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

                      <ul id="myUL">

                      <?php
                         
                         $sql = mysqli_query($conn, "SELECT * from attachment inner join user_tbl on attachment.user_id = user_tbl.user_id where attachment.enabled = '1' and user_tbl.proved = '2'");

                         while ($row = mysqli_fetch_array($sql)) {

                      ?>
                      <li><a href="see_message.php?attach_id=<?php echo $row['attach_id']; ?>" style="color: black; font-size: 15px;"><?php echo $row["Name"]; ?> <p style="float: right; color: black; font-size: 12px;"><?php echo $row['date_created']; ?></p> <br><br><img src="attachment/<?php echo $row['attachment']; ?>" style="width: 60px; height: 60px;"></a></li>

                     <?php } ?>

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