<?php

session_start();

include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php

  if (isset($_GET['activate'])) {
    
      $activate = $_GET['activate'];

      $queryys = "UPDATE user_tbl set state = 'active' where user_id = '$activate'";

      $output = mysqli_query($conn,$queryys);
     
     if ($output) {
      echo "<script>alert('Successfully Activate!')</script>";

echo "<script>window.open('add_member.php','_self')</script>";
     }

  }

?>
<?php } ?>