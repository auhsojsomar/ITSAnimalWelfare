<?php

session_start();

include("function/config.php");
  $reject_attach = $_GET['reject_attach'];
if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

      $queryys = "SELECT * from attachment where attach_id = '$reject_attach'";

	  $output = mysqli_query($conn, $queryys);

	  $row = mysqli_fetch_array($data);

	  $attachment = $row['attachment'];

	  $description = $row['description'];

	  $user = $row['user_id'];

?>

<?php

  if (isset($_GET['reject_attach'])) {
    
      $reject_attach = $_GET['reject_attach'];

      $queryys = "UPDATE attachment set enabled = '0' where attach_id = '$reject_attach'";

      $output = mysqli_query($conn,$queryys);

	  $attach_ids = $row['attach_id'];

      $queryys = "UPDATE user_tbl set proved = '3' where user_id = '$user'";

      $output = mysqli_query($conn,$queryys);

      $queryys = "UPDATE user_tbl set proved = '3' where user_id = '$user'";

      $output = mysqli_query($conn,$queryys);
     
      if ($output) {

      echo "<script>alert('Successfully Rejected!')</script>";

      echo "<script>window.open('message.php','_self')</script>";

     }

  }

?>

<?php } ?>