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

      $queryys = "UPDATE user_tbl SET state = 'inactive' where user_id = '$deactive'";

      $output = mysqli_query($conn,$queryys);
     
     if ($output) {
      echo "<script>alert('Successfully Deactivate!')</script>";

echo "<script>window.open('add_member.php','_self')</script>";
     }

  }

?>
<?php } ?>