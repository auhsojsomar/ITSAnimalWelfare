<?php

session_start();

include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php

  if (isset($_GET['delete'])) {
    
      $delete = $_GET['delete'];

      $queryys = "DELETE from announce where announceid = '$delete'";

      $output = mysqli_query($conn,$queryys);
     
     if ($output) {
      echo "<script>alert('Successfully Deleted!')</script>";

echo "<script>window.open('announce.php','_self')</script>";
     }

  }

?>
<?php } ?>