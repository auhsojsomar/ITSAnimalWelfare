<?php

session_start();

include("function/config.php");
$seen = $_GET['seen'];
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

   $user_id = $ros['user_id'];

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
                    <h4>Notifications</h4>
                    <div class="clearfix"></div>
                
                  </div>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">
                          <?php
                         
                         $sql = mysqli_query($conn, "SELECT * from adoption left join user_tbl on adoption.users_id = user_tbl.user_id where user_tbl.username = '$username' and adoption.seen = '0'");

                         while ($row = mysqli_fetch_array($sql)) {

                      ?>
                      <div>

                      <ul id="myUL">                
                      <li><a href="see_conversation.php"><b style="color: #6cb76e;"><?php echo $row['from_owner']; ?></b> <p style="float: right; color: black; font-size: 12px;"><?php echo $row['date_adopt']; ?></p> <br><?php

                      if($row['approved'] == '1'){
                         
                         echo "<span class=\"message\" style=\"font-size: 12px;\">Approved your request adoption.
                      </span>";

                      }elseif($row['approved'] == '2'){

                        echo "<span class=\"message\">Sorry
                      </span>";
                      }elseif ($row['seen'] == '0') {
                         echo "<center><span class=\"message\">No Notification
                      </span></center>";
                      }

                      ?><br></a></li>
                    </ul>
                    </div>
                        <?php } ?>


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
<?php


   if (isset($_GET['seen'])) {
     

      $seen = $_GET['seen'];

      $sql = "UPDATE adoption set seen = '0' where adopt_id = '$seen'";

      $query = mysqli_query($conn, $sql);
   }


?>
<?php } ?>