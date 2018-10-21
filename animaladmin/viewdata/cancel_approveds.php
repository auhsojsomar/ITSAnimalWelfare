<?php

session_start();

include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php

  if (isset($_GET['cancel_approveds'])) {
    
      $cancel_approveds = $_GET['cancel_approveds'];

      $queryys = "UPDATE adoption set approved = '0' where adopt_id = '$cancel_approveds'";

      $output = mysqli_query($conn,$queryys);
     
     if ($output) {
      echo "<script>alert('Successfully Cancel!')</script>";

echo "<script>window.open('view_of_adoption.php','_self')</script>";
     }

  }

?>
<?php } ?>