<?php 
session_start();
$email = $_GET['email'];
include("function/config.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Online Animal Welfare.</title>

<!-- Bootstrap -->
<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- Animate.css -->
<link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="../build/css/custom.min.css" rel="stylesheet">
<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- iCheck -->
<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- bootstrap-wysiwyg -->
<link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
<!-- Select2 -->
<link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<!-- Switchery -->
<link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
<!-- starrr -->
<link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
<!-- bootstrap-daterangepicker -->
<link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

<link rel="icon" href="images/logo.jpg" type="image/gif">
<!-- Custom Theme Style -->
<link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login" style="background: #438b45;">
<div>
<a class="hiddenanchor" id="signup"></a>
<a class="hiddenanchor" id="signin"></a>
<a class="hiddenanchor" id="reset"></a>

<div class="login_wrapper">
<div class="animate form login_form" style="background: white;">
<section class="login_content">
	<center>
<h4>Forgot Password?</h4>
</center>
<form action="" method="post">
<div style="margin-left: 15px; margin-right: 15px;">
<input type="password" class="form-control" placeholder="New Password" name="password" required="" />
</div>
<div>
<div style="margin-left: 15px; margin-right: 15px;">
<input type="password" class="form-control" placeholder="Confirm Password" name="password2" required="" />
</div>
<div>
<center>
<input type="submit" name="saved" class="btn btn-default" style="color: white; background: #438b45;" value="Send">
</center>
</div>

<div class="clearfix"></div>

<div class="separator">
<!-- <p class="change_link">Do not have an account?
<a href="#signup" class="to_register" style="color: #438b45;"> Create Account </a>
</p> -->
<div class="clearfix"></div>
<br />

<div>
<h1>Online Animal Welfare</h1>
<p style="font-size: 12px;">Online Animal Welfare © <script>document.write(new Date().getFullYear())</script>. All Rights Reserved</p>
</div>
</div>
</form>
</section>
</div>
<div id="resetpassword" class="animate form registration_form" style="background: white; margin-top: -40px;">
<section class="login_content">
<form action="" method="post" enctype="multipart/form-data">
<h1>Fogot Password</h1>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label" style="float: left;"><b>Fullname:</b></label>
<input type="text" name="fullname" required class="form-control" id="field-1" title="Fullname">
</div>
</div>
</div>


<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Email:</b></label>
<input type="text" name="email_address" maxlength="25" required class="form-control" id="field-1" placeholder="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Contact Number:</b></label>
<input type="text" name="contact_number" class="form-control" required title="Contact Number" maxlength="11" placeholder="">
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label" style="float: left;"><b>Gender:</b></label><br>
<div style="float: left; margin-left: -35px;">
Male:
<input type="radio" class="flat" name="gender"  value="Male" required /> Female:
<input type="radio" class="flat" name="gender" value="Female" required />
</div>
</div>
</div>
</div>
<br>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Username:</b></label>
<input type="text" name="username" class="form-control" required title="Product Price" placeholder="">
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Password:</b></label>
<input type="password" name="password" required class="form-control" id="field-1" title="Password">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Re-enter Password:</b></label>
<input type="password" name="password2" class="form-control" required  title="Confirm Password">
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Address:</b></label>
<textarea type="text" name="address" required class="form-control"></textarea>
</div>
</div>
</div>
<br>
<div style="float: right;">
<p class="change_link">Already a member ?
<a href="#signin" class="to_register" style="color:  #438b45;"> Sign in </a><br>
</p>
</div>
<br>
<input type="submit" name="reset" class="btn btn-default submit" style="background:  #438b45; color: white;">
</div>

<div class="clearfix"></div>

</div>
</div>
</form>
</section>
</div>
<div id="register" class="animate form registration_form" style="background: white; margin-top: -40px;">
<section class="login_content">
<form action="" method="post" enctype="multipart/form-data">
<h1>Create Account</h1>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label" style="float: left;"><b>Fullname:</b></label>
<input type="text" name="fullname" required class="form-control" id="field-1" title="Fullname">
</div>
</div>
</div>


<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Email:</b></label>
<input type="text" name="email_address" maxlength="25" required class="form-control" id="field-1" placeholder="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Contact Number:</b></label>
<input type="text" name="contact_number" class="form-control" required title="Contact Number" maxlength="11" placeholder="">
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label" style="float: left;"><b>Gender:</b></label><br>
<div style="float: left; margin-left: -35px;">
Male:
<input type="radio" class="flat" name="gender"  value="Male" required /> Female:
<input type="radio" class="flat" name="gender" value="Female" required />
</div>
</div>
</div>
</div>
<br>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Username:</b></label>
<input type="text" name="username" class="form-control" required title="Product Price" placeholder="">
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Password:</b></label>
<input type="password" name="password" required class="form-control" id="field-1" title="Password">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Re-enter Password:</b></label>
<input type="password" name="password2" class="form-control" required  title="Confirm Password">
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Address:</b></label>
<textarea type="text" name="address" required class="form-control"></textarea>
</div>
</div>
</div>
<br>
<div style="float: right;">
<p class="change_link">Already a member ?
<a href="#signin" class="to_register" style="color:  #438b45;"> Sign in </a><br>
</p>
</div>
<br>
<input type="submit" name="signup" class="btn btn-default submit" style="background:  #438b45; color: white;">
</div>

<div class="clearfix"></div>

</div>
</div>
</form>
</section>
</div>
</div>
</div>
</body>
</html>
     <?php

if(isset($_POST['saved'])){

$password = mysqli_real_escape_string($conn, $_POST['password']);

$password2 = mysqli_real_escape_string($conn, $_POST['password2']);

if($password == $password2){

$sql = "UPDATE user_tbl set password = '$password' where email_address = '$email'";

$request = mysqli_query($conn, $sql);

}

if ($request) {
echo "<script>alert('Successfully')</script>";
echo "<script>window.open('login.php','_self')</script>";
}else{
echo "<script>alert('Something went wrong')</script>";
}

}


?>
<?php include("function/signup.php"); ?>

