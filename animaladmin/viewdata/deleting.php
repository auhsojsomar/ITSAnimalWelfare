<?php

session_start();

include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

  if (isset($_GET['deleted'])) {
    
      $deleted = $_GET['deleted'];

      $queryys = "DELETE from postal_care where postal_id = '$deleted'";

      $output = mysqli_query($conn,$queryys);
     
     if ($output) {
      echo "<script>alert('Successfully Deleted!')</script>";

echo "<script>window.open('announce.php','_self')</script>";
     }

  }

?>
<?php } ?>