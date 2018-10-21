<?php

session_start();

include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php
    $query = "SELECT * FROM tbl_pets ORDER BY pet_id desc";
  $search_result = mysqli_query($conn, $query);
?>
   <?php
$gett_products = "SELECT * from user_tbl";
$runproductt = mysqli_query($conn,$gett_products);
$count_user = mysqli_num_rows($runproductt);

?>
   <?php
$gett_products = "SELECT * from adoption";
$runproductt = mysqli_query($conn,$gett_products);
$count_pets = mysqli_num_rows($runproductt);

?>

<?php

$gett_products = "SELECT * from user_tbl where state = 'active'";
$runproductt = mysqli_query($conn,$gett_products);
$count_active = mysqli_num_rows($runproductt);

?>

  <?php
$gett_products = "SELECT * from user_tbl";
$runproductt = mysqli_query($conn,$gett_products);
$count_user_executive = mysqli_num_rows($runproductt);

?>
   <?php
$gett_products = "SELECT * from adoption";
$runproductt = mysqli_query($conn,$gett_products);
$count_pets_executive = mysqli_num_rows($runproductt);

?>

   <?php

$gett_products = "SELECT * from user_tbl where state = 'active'";
$runproductt = mysqli_query($conn,$gett_products);
$count_active = mysqli_num_rows($runproductt);

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

            echo " <!-- page content -->
        <div class=\"right_col\" role=\"main\">
            <div class=\"row top_tiles\">
            <div class=\"row\">
              <div class=\"col-md-4\">
                <div class=\"x_panel\">
                  <div class=\"title\">
                  
                    <ul class=\"nav navbar-right panel_toolbox\">
                 
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                   <h4>Total Number of Users</h4>
                     <center>
                 <div style=\"font-size: 50px;\">".$count_user."</div>
              </center>
                  </div>
                </div>
              </div>
   
                  <div class=\"col-md-4\">
                <div class=\"x_panel\">
                  <div class=\"title\">
                  
                    <ul class=\"nav navbar-right panel_toolbox\">
                 
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <h4>Adopted</h4>
                      <center>
                 <div style=\"font-size: 50px;\">".$count_pets."</div>
              </center>
              <a href=\"view_of_all_adoption.php\" style=\"float: right; color: #6cb76e;\">See information ></a>
                  </div>
                </div>
              </div>
   

                  <div class=\"col-md-4\">
                <div class=\"x_panel\">
                  <div class=\"title\">
                  
                    <ul class=\"nav navbar-right panel_toolbox\">
                 
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <h4>Total Active Users</h4>
                     <center>
                <div style=\"font-size: 50px;\">".$count_active."</div>
              </center>
              <a href=\"add_member.php\" style=\"float: right; color: #6cb76e;\">See active users ></a>
                  </div>
                </div>
              </div>";



        }elseif($userlvl == "super"){


  include("include/header_admin.php");

      echo " <!-- page content -->
          <div class=\"right_col\" role=\"main\">
            <div class=\"row top_tiles\">
            <div class=\"row\">
              <div class=\"col-md-4\">
                <div class=\"x_panel\">
                  <div class=\"title\">
                  
                    <ul class=\"nav navbar-right panel_toolbox\">
                 
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                   <h4>Total Number of Users</h4>
                     <center>
                 <div style=\"font-size: 50px;\">".$count_user."</div>
              </center>
                  </div>
                </div>
              </div>
   
                  <div class=\"col-md-4\">
                <div class=\"x_panel\">
                  <div class=\"title\">
                  
                    <ul class=\"nav navbar-right panel_toolbox\">
                 
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <h4>Adopted</h4>
                      <center>
                 <div style=\"font-size: 50px;\">".$count_pets."</div>
              </center>
              <a href=\"view_of_all_adoption.php\" style=\"float: right; color: #6cb76e;\">See information ></a>
                  </div>
                </div>
              </div>
   

                  <div class=\"col-md-4\">
                <div class=\"x_panel\">
                  <div class=\"title\">
                  
                    <ul class=\"nav navbar-right panel_toolbox\">
                 
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    <h4>Total Active Users</h4>
                     <center>
                <div style=\"font-size: 50px;\">".$count_active."</div>
              </center>
              <a href=\"add_member.php\" style=\"float: right; color: #6cb76e;\">See active users ></a>
                  </div>
                </div>
              </div>";

              ?>

               <div class="col-md-6" style="float: right;">
                <div class="x_panel">
                  <div class="title">
                  
                    <ul class="nav navbar-right panel_toolbox">
                 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <h4>Records Ratings</h4>
                    <hr>
                     <center>
                <div style="font-size: 15px; color: gray;">Not Found</div>
              </center>
                  </div>
                </div>
              </div>
          
        
          </div>
          </div>
        </div> 
        <!-- /page content -->      
   <?php   

      }elseif($userlvl == "user"){
         include("include/headers.php");
               echo " <!-- page content -->
            <div class=\"right_col\" role=\"main\">
            <div class=\"row top_tiles\">
            <br>
            <br>
            <div class=\"row\">
            <div class=\"col-md-3\" style=\"float: right;\">
            <div class=\"form-group\">
            <label for=\"field-1\" class=\"control-label\"><b>Search:</b></label>
            <form action=\"search.php\" method=\"post\">
            <input type=\"text\" name=\"search\" class=\"form-control\" id=\"field-1\" placeholder=\"Pet Category\Location\Pet Name...\">
            </form>
            </div>
            </div>
            </div>
           <div class=\"row\">
      
              <br>
              <br>";

             ?>

  <?php
    // $sql = mysqli_query($conn, "SELECT * from tbl_pets left join user_tbl on tbl_pets.user = user_tbl.user_id where tbl_pets.status = '1'");


    // while ($row = mysqli_fetch_array($sql)) {
   
      // include("pagination/testfunction.php");
      // $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
      // $limit = 6; 
      // $startpoint = ($page * $limit) - $limit;
      // $statement = "product1 order by product_image, product_name, product_price, product_quantity, product_category asc"; 

       // $statement = "tbl_pets where status = '1'"; 
         include("pagination/testfunction.php");
        $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);

        $limit = 8;

        $startpoint = ($page * $limit) - $limit;

        $statement = "tbl_pets inner join user_tbl on tbl_pets.user = user_tbl.user_id where tbl_pets.status = '1' order by user_tbl.Name, tbl_pets.pet_id, tbl_pets.pet_category, tbl_pets.pet_image asc"; 

        if (mysqli_num_rows($search_result) > 0) {
 
        $search_result= mysqli_query($conn,"select * from {$statement} LIMIT {$startpoint} , {$limit}");

        while ($row = mysqli_fetch_array($search_result)) 
        {
   
          echo"
              
          <div class=\"col-md-3\">
                <div class=\"x_panel\">
                  <div class=\"title\">
                    <ul class=\"nav navbar-right panel_toolbox\">
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
              
                  <div class=\"x_content\">
                  <div class=\"profile_pic\">
                  <img src=\"images/img.jpg\" alt=\"...\" style=\"margin-top: -10px; margin-left: -10px; width: 50px; height: 50px;\" class=\"img-circle profile_img\">
                  </div>
                   <b style=\"margin-left: -25px; font-size: 10px; margin-top: 100px;\">".$row['Name']." (Owner)</b><br>
                  <br>
                   <br>
                     <center>
                     <br>
                     <center>
                  <img src=\"profilepet/".$row['pet_image']."\" class=\"col-md-3\" style=\"width: 200px; height: 200px; margin-left: 10px;\"></center>
                  <div><b style=\"font-size:2vw; width:10% !important; margin-top: 10px;\" ></b></div>
                  <h4 style=\"margin-top: 250px;\">".$row['pet_name']."</h4><br>
                  <p>".$row['pet_details']."</p>
                  <br>

                   <a href=\"details.php?pet_id=".$row['pet_id']."\" class=\"btn btn-default\" style=\"color: #438b45; float: right;\">See information ></a>
             
              </center>
              
               </div>
                  </div>
                   </div>
                   
                ";
              ?>
              <?php  print("$output"); ?>

            <?php

              }
            }
            ?>

         </div>
          </div>
          <br>
          <br>
              <?php
                echo "<div class='paging'>";
            echo "<div id='pagingg'>";
            echo pagination($statement,$limit,$page);
            echo "</div>";
            echo "</div>";
            ?>
            <br>
            <br>
            <br>
        </div>
        </div>
      
        <!-- /page content -->
      
    <?php
      }
    ?>


<!--   <input type=\"submit\" name=\"submits\" class=\"btn btn-default submit\" style=\"color: white; float: left; background: #438b45; width: 100px;\" value=\"Adopt\">
 -->
        <!-- footer content -->
   <!--      <footer>
          <div class="pull-right">
          <p>BCC Inc © <script>document.write(new Date().getFullYear())</script>. All Rights Reserved</p>
          </div>
          <div class="clearfix"></div>
        </footer>
  
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