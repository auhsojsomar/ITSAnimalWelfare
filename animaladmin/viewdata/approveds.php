<?php

session_start();

include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php
$username = $_SESSION['username'];
$query = "SELECT * from user_tbl where username = '$username'";

$direct = mysqli_query($conn,$query);

$rows = mysqli_fetch_array($direct);

$adminID = $rows['userid'];

$names = $rows['Name'];

?>
<?php

  if (isset($_GET['approveds'])) {
    
      $approveds = $_GET['approveds'];

      $queryys = "UPDATE adoption set approved = '1', from_owner = '$names' where adopt_id = '$approveds'";

      $output = mysqli_query($conn,$queryys);
     
     if ($output) {
      echo "<script>alert('Successfully Approved!')</script>";

echo "<script>window.open('view_of_adoption.php','_self')</script>";
     }

  }

?>
<?php } ?>