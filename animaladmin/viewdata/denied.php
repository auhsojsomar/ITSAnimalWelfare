<?php

session_start();

include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php

  if (isset($_GET['denied'])) {
    
      $denied = $_GET['denied'];

      $queryys = "UPDATE postal_care set status = '5' where postal_id = '$denied'";

      $output = mysqli_query($conn,$queryys);
     
     if ($output) {
      echo "<script>alert('Successfully Denied!')</script>";

echo "<script>window.open('postal_care_executive.php','_self')</script>";
     }

  }

?>
<?php } ?>