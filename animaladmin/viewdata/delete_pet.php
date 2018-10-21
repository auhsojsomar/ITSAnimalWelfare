<?php

session_start();

include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php

  if (isset($_GET['del_pet'])) {
    
      $del_pet = $_GET['del_pet'];

      $queryys = "DELETE from tbl_pets where pet_id = '$del_pet'";

      $output = mysqli_query($conn,$queryys);
     
     if ($output) {
      echo "<script>alert('Successfully Deleted!')</script>";

echo "<script>window.open('add_pet.php','_self')</script>";
     }

  }

?>
<?php } ?>