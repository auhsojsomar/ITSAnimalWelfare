<?php

session_start();

include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php

  if (isset($_GET['cancel'])) {
    
      $cancel = $_GET['cancel'];

      $queryys = "UPDATE postal_care set status = '0' where postal_id = '$cancel'";

      $output = mysqli_query($conn,$queryys);
     
     if ($output) {

      echo "<script>alert('Succeddfully Cancel!')</script>";

      echo "<script>window.open('postal_care_executive.php','_self')</script>";
     }
  }

?>
<?php } ?>