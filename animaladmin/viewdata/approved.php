<?php

session_start();

include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php

  if (isset($_GET['approved'])) {
    
      $approved = $_GET['approved'];

      $queryys = "UPDATE postal_care set status = '2' where postal_id = '$approved'";

      $output = mysqli_query($conn,$queryys);
     
     if ($output) {
      echo "<script>alert('Successfully Approved!')</script>";

echo "<script>window.open('postal_care_executive.php','_self')</script>";
     }

  }

?>
<?php } ?>