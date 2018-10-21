<?php

session_start();

include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php

  if (isset($_GET['deactive'])) {
    
      $deactive = $_GET['deactive'];

      $queryys = "DELETE from location where loc_id = '$deactive'";

      $output = mysqli_query($conn,$queryys);
     
     if ($output) {
      echo "<script>alert('Successfully Deleted!')</script>";

echo "<script>window.open('add_location.php','_self')</script>";
     }

  }

?>
<?php } ?>