<?php

session_start();

include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php


$getregister = "SELECT * FROM user_tbl LEFT join tbl_userfeedback on user_tbl.user_id = tbl_userfeedback.user where tbl_userfeedback.enabled = '1' and tbl_userfeedback.status = '1'  ORDER by tbl_userfeedback.user desc";
$runproducts = mysqli_query($conn, $getregister);
$counts = mysqli_num_rows($runproducts);
   
   echo $counts;

?>
<?php } ?>