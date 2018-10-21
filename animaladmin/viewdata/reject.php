<?php

session_start();

include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php

  if (isset($_GET['reject'])) {
    
      $reject = $_GET['reject'];

      $queryys = "UPDATE tbl_pets SET get_adopt = 0 where pet_id = '$reject'";

      $output = mysqli_query($conn,$queryys);
     
     if ($output) {
      echo "<script>alert('Successfully Rejected!')</script>";

echo "<script>window.open('view_of_adoption.php','_self')</script>";
     }

  }

?>
<?php } ?>