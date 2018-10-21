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
   $parameter = "SELECT * from users where username = '$username'";
   $condi = mysqli_query($conn,$parameter);

   $ros = mysqli_fetch_array($condi);

  $userid = $ros['userid'];
  $firstname = $ros['firstname'];
  $lastname = $ros['lastname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>BCC Inc. </title>

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

<link rel="icon" href="css/logo/LOGO_BCC_2.0.png" type="image/gif">
<!-- Custom Theme Style -->
<link href="../build/css/custom.min.css" rel="stylesheet">
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
</head>
<style> 
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 50px;
    display: none;
}
</style>
</head>
<body class="login" style="background: #438b45;">
  <?php
error_reporting(0);
define('INCLUDE_CHECK',1);
include("function/functions.php");
?>
<div>
<a class="hiddenanchor" id="signup"></a>
<a class="hiddenanchor" id="signin"></a>

<div class="login_wrapper" style="max-width: 800px;">
<div class="animate form login_form" style="background: white;">

<section class="login_content">
<form action="" method="post" name="add_name" id="add_name">
  <center>  <img src="images/bcc_logo.jpg" width="500" height="110"></center>
  <br>
<h1></h1>

<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-3">
<div class="form-group">
<label for="field-1" class="control-label"><b>Last Name</b></label>
<input type="text" disabled name="password" required class="form-control" id="field-1" title="Password" value="<?php echo $lastname; ?>">
<input type="hidden" disabled name="password" required class="form-control" id="field-1" title="Password" value="<?php echo $userid; ?>">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="field-1" class="control-label"><b>First Name</b></label>
<input type="text" disabled name="password2" class="form-control" required  title="Confirm Password" value="<?php echo $firstname; ?>">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="field-1" class="control-label"><b>Middle Name(Optional)</b></label>
<input type="text" name="middlename" class="form-control"  title="Confirm Password">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="field-1" class="control-label"><b>Nickname(Optional)</b></label>
<input type="text" name="nickname" class="form-control"  title="Confirm Password">
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Address</b></label>
<textarea type="text" name="address" class="form-control"></textarea>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Place of Birth</b></label>
<textarea type="text" name="place_of_birth" class="form-control"></textarea>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<br>
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-2">
<div class="form-group">
 <label for="field-1" class="control-label" style="float: left;"><b>Birthdate:</b></label><br>
</div>
</div>
</div>

<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-2">
<div class="form-group">
<label for="field-3" class="control-label"> Month</label> 
<select id="field-3" name="month" class="form-control">
<option>Month:</option><option>January</option><option>February</option>
<option>March</option><option>April</option><option>May</option><option>June</option><option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option>
</select>
</div>                                
</div> 

<div class="col-md-2">                                    
<div class="form-group">                                        
<label for="field-3" class="control-label">Day</label> 

<select name="date" id="field-2" class="form-control"><option value="0">Day:</option><?=generate_options(1,31)?></select>                                                                 
</div>                                
</div>                                
<div class="col-md-3">                                    
<div class="form-group">                                       
<label for="field-3" class="control-label">Year</label>  
<input type="text" name="year" class="form-control"  maxlength="4">   
</div>               
</div>

<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>Gender</b></label>
<br>

<div style="float: left;"><input type="radio" class="flat" style="width: 35px; height: 20px;" name="gender"  value="Male"> <p style="margin-top: -23px; margin-left: 80px;">Male</p></div>
<div style="float: left;"><input type="radio" class="flat" style="width: 35px; height: 20px;" name="gender"  value="Female"> <p style="margin-top: -23px; margin-left: 80px;">Female</p></div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b></b></label>
<br>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Civil Status</b></label>
<br>

<div style="float: left;"><input type="radio" class="flat" style="width: 35px; height: 20px;" name="civil_statuss"  value="Single"> <p style="margin-top: -23px; margin-left: 80px;">Single</p></div>
<div style="float: left;"><input type="radio" class="flat" style="width: 35px; height: 20px;" name="civil_statuss"  value="Marreid"> <p style="margin-top: -23px; margin-left: 80px;">Married</p></div>
<div style="float: left;"><input type="radio" class="flat" style="width: 35px; height: 20px;" name="civil_statuss"  value="M"> <p style="margin-top: -23px; margin-left: 80px;">Widow</p></div>
</div>
</div>
<div class="col-md-1">
<div class="form-group">
</div>
</div>

<div class="col-md-4" style="margin-left: -10px;">
<div class="form-group">
<label for="field-1" class="control-label"><b>Blood Type</b></label>
<br>
<div style="float: left;"><input type="radio" class="flat" style="width: 35px; height: 20px;" name="blood_types"  value="A"> <p style="margin-top: -23px; margin-left: 80px;">Type A</p></div>
<div style="float: left;"><input type="radio" class="flat" style="width: 35px; height: 20px;" name="blood_types"  value="B"> <p style="margin-top: -23px; margin-left: 80px;">Type B</p></div>
<div style="float: left; margin-left: -4px;"><input type="radio" class="flat" style="width: 35px; height: 20px;" name="blood_types"  value="AB"> <p style="margin-top: -23px; margin-left: 80px;">Type AB</p></div>
<div style="float: left; margin-left: -4px;"><input type="radio" class="flat" style="width: 35px; height: 20px;" name="blood_types"  value="O"> <p style="margin-top: -23px; margin-left: 80px;">Type O</p></div>

</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b></b></label>
<br>
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-3">
<div class="form-group">


</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>Telephone Number</b></label>
<input type="number" name="telephone_number" required class="form-control" min="0" maxlength="7" id="field-1">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>Mobile Number</b></label>
<input type="text" name="mobile_number" required class="form-control" id="field-1">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>E-mail Address</b></label>
<input type="email" name="email_address" class="form-control" required  title="Confirm Password">
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Educational Attainment</b></label>
<input type="text" name="educational_attainment" class="form-control" required  title="Confirm Password">
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-5">
<div class="form-group">
<label for="field-1" class="control-label"><b>Degree Earned</b></label>
<input type="text" name="degree_earned" required class="form-control" id="field-1" title="Password">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>School Graduated From</b></label>
<input type="text" name="school_graduated" class="form-control" required  title="Confirm Password">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="field-1" class="control-label"><b>Year Graduated</b></label>
<input type="number" name="year_graduated" class="form-control" required  title="Confirm Password" maxlength="4">
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>Line of Work</b></label>
<input type="text" name="line_of_work" required class="form-control" id="field-1" title="Password">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>Occupation/Business</b></label>
<textarea type="text" name="occupation" class="form-control"></textarea>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>Place of Work/Business</b></label>
<textarea type="text" name="place_of_work" class="form-control"></textarea>
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>Special Skills</b></label>
<input type="text" name="skills" required class="form-control" id="field-1" title="Password">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>Date of Spiritual Birth</b></label>
<input type="date" name="date_of_spiritual" class="form-control" required  title="Confirm Password">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>Date of Water Baptism</b></label>
<input type="date" name="date_of_water_baptism" required class="form-control" id="field-1" title="Password">
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Place of Water Baptism</b></label>
<textarea type="text" name="place_of_water_baptism" class="form-control"></textarea>
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-12">
<div class="form-group">
<br>
</div>
</div>
</div>
<!-- <div class="row" style="margin-left: 150px; margin-right: 170px;">
<div class="col-md-12">
<div class="form-group">
<input type="submit" name="submit" class="form-control" style="background:  #438b45; color: white; width: 400px; height: 35px;" value="Submit">
</div>
</div>
</div> -->


<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-12">
<div class="form-group">
<input type="checkbox" id="flip" value="" style="float: left; width: 20px; height: 20px;"> <p style="float: left; font-size: 20px;">If married</p><br>
<br>
</div>
</div>
</div>
<div id="panel">
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Type of Marriage</b></label>
<br>
<div style="float: left;"><input type="radio" class="flat" style="width: 35px; height: 20px;" name="type_of_marriage"  value="Civil"> <p style="margin-top: -23px; margin-left: 80px;">Civil</p></div>
<div style="float: left;"><input type="radio" class="flat" style="width: 35px; height: 20px;" name="type_of_marriage"  value="Church"> <p style="margin-top: -23px; margin-left: 80px;">Church</p></div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>Date of Marriage</b></label>
<input type="date" name="date_of_marriage" class="form-control" title="Confirm Password">
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-6">
<div class="form-group">
<br>
</div>
</div>
</div>
<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Name of Spouse</b></label>
<input type="text" name="name_of_spouse" class="form-control" title="Confirm Password">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Name of Child/Children(Optional)</b></label>
 
            <table class="table table-bordered" id="dynamic_field">
              <tr>
                <td><input type="text" name="name[]" class="form-control name_list" /></td>
                <td><button type="button" name="add" id="add" class="btn btn-success" style="background-color: #438b45; color: white;">Add</button></td>
              </tr>
            </table>
            <td><input type="button" name="submits" id="submits" style="float: left; background-color: #438b45; color: white;" class="btn btn-info" value="Submit" /></td>
        
</div>
</div>
</div>
</div>

<div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-12">
<div class="form-group">

<br>

</div>
</div>
</div>
<div class="row" style="margin-left: 150px; margin-right: 170px;">
<div class="col-md-12">
<div class="form-group">

<input type="submit" name="submit" class="form-control" style="background:  #438b45; color: white; width: 400px; height: 35px;" value="Save Form">
<center>
</div>
<br>
<br
<div class="clearfix"></div>

<div>
  <div class="row" style="margin-left: 15px; margin-right: 15px;">
<div class="col-md-12">
<div class="form-group">

<br>

</div>
</div>
</div>
<h1>Bride of Christ Church, Inc</h1>
<p>BCC Inc © <script>document.write(new Date().getFullYear())</script>. All Rights Reserved</p>
</div>
</div>
</form>
</section>
</div>
</div>
</div>
</body>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });

     var i=1;

  $('#add').click(function(){
    i++;
    $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]"  class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
  });
  
  $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id"); 
    $('#row'+button_id+'').remove();
  });
  
  $('#submits').click(function(){    
    $.ajax({
      url:"name.php",
      method:"POST",
      data:$('#add_name').serialize(),
      success:function(data)
      {
        alert(data);
        $('#add_name')[0].reset();
      }
    });
  });
});
</script>
</html>


<?php

if(isset($_POST['submit'])){

//$userid = mysqli_real_escape_string($conn, $_POST['userid']);

$middlename = mysqli_real_escape_string($conn, $_POST['middlename']);

$nickname = mysqli_real_escape_string($conn, $_POST['nickname']);

$address = mysqli_real_escape_string($conn, $_POST['address']);

$month = mysqli_real_escape_string($conn, $_POST['month']);

$place_of_birth = mysqli_real_escape_string($conn, $_POST['place_of_birth']);

$date = mysqli_real_escape_string($conn, $_POST['date']);

$year = mysqli_real_escape_string($conn, $_POST['year']);

$birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);

$gender = mysqli_real_escape_string($conn, $_POST['gender']);

$civil_statuss = mysqli_real_escape_string($conn, $_POST['civil_statuss']);

$blood_types = mysqli_real_escape_string($conn, $_POST['blood_types']);

$telephones = mysqli_real_escape_string($conn, $_POST['telephone_number']);

$mobile_numbers = mysqli_real_escape_string($conn, $_POST['mobile_number']);

$email_address = mysqli_real_escape_string($conn, $_POST['email_address']);

$educational_attainment = mysqli_real_escape_string($conn, $_POST['educational_attainment']);

$degree_earned = mysqli_real_escape_string($conn, $_POST['degree_earned']);

$school_graduated = mysqli_real_escape_string($conn, $_POST['school_graduated']);

$year_graduateds = mysqli_real_escape_string($conn, $_POST['year_graduated']);

$line_of_work = mysqli_real_escape_string($conn, $_POST['line_of_work']);

$occupation = mysqli_real_escape_string($conn, $_POST['occupation']);

$place_of_work = mysqli_real_escape_string($conn, $_POST['place_of_work']);

$skills = mysqli_real_escape_string($conn, $_POST['skills']);

$date_of_spiritual = mysqli_real_escape_string($conn, $_POST['date_of_spiritual']);

$place_of_water_baptism = mysqli_real_escape_string($conn, $_POST['place_of_water_baptism']);

$status_member = mysqli_real_escape_string($conn, $_POST['status_member']);

$type_of_marriages = mysqli_real_escape_string($conn, $_POST['type_of_marriage']);

$date_of_marriages = mysqli_real_escape_string($conn, $_POST['date_of_marriage']);

$name_of_spouses = mysqli_real_escape_string($conn, $_POST['name_of_spouse']);


$sql = "INSERT INTO membership_form(formid, userid, middlename, nickname, address, place_of_birth, month, day, year, gender, civil_status, blood_type, telephone_number, mobile_number, email_address, educational_attainment, degree_earned, school_graduated, year_graduated, line_of_work, occupation, place_of_work, skills, date_of_spiritual, date_of_water_baptism, place_of_water_baptism, status_member, type_of_marriage, date_of_marriage, name_of_spouse) VALUES('','$userid','$middlename','$nickname','$address','$place_of_birth','$month','$day','$year','$gender','$civil_statuss','$blood_types','$telephones','$mobile_numbers','$email_address','$educational_attainment','$degree_earned','$school_graduated','$year_graduateds','$line_of_work','$occupation','$place_of_work','$skills','$date_of_spiritual','$date_of_water_baptism','$place_of_water_baptism',1,'$type_of_marriages','$date_of_marriages','$name_of_spouses')";

$run_admin = mysqli_query($conn,$sql);

$sqls = "UPDATE users set status_member = 1 where userid = $userid";

$run_admin = mysqli_query($conn,$sqls);


if ($run_admin) {
echo "<script>alert('Successfully')</script>";
echo "<script>window.open('main_home.php','_self')</script>";
}else{
echo "<script>alert('Something went wrong')</script>";
}

}


?>
<?php } ?>

