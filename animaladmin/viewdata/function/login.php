<?php

if(isset($_POST['login'])){

$username = mysqli_real_escape_string($con,$_POST['username']);

$password = mysqli_real_escape_string($con,$_POST['password']);

$get_admin = "SELECT * from users where username='$username' AND password = '$password'";

$run_admin = mysqli_query($conn,$get_admin);

$count = mysqli_num_rows($run_admin);

if($count==1){

$_SESSION['username']=$username;

echo "<script>alert('You are Logged in into admin panel')</script>";
echo "<script>window.open('index.php','_self')</script>";

}
else {

echo "<script>alert('Your username or password is Wrong')</script>";

}
}


?>users