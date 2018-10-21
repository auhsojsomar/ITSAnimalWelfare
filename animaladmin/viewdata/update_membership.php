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
   $parameter = "SELECT * from users inner join membership_form on users.userid = membership_form.userid where users.username = '$username'";
   $condi = mysqli_query($conn,$parameter);

   $ros = mysqli_fetch_array($condi);

   $formid = $ros['formid'];

   $userlvl = $ros['user_level'];

   $firstname = $ros['firstname'];

   $lastname = $ros['lastname'];

   $address = $ros['address'];

   $middlename = $ros['middlename'];

   $email = $ros['email_address'];
   
   $telephone = $ros['telephone_number'];

   $educational  = $ros['educational_attainment'];

   $degree = $ros['degree_earned'];

   $line = $ros['line_of_work'];

   $occ = $ros['occupation'];

   $place_of_work = $ros['place_of_work'];

   $skills = $ros['skills'];

   $civil = $ros['civil_status'];

   $birthday = $ros['birthdate'];

   $username = $ros['username'];

   $gender = $ros['gender'];

   $mobiles = $ros['mobile_number'];

   $month = $ros['month'];

   $day = $ros['day'];

   $year = $ros['year'];


?>

<?php 

if ($userlvl  === "Admin"){

   include("include/header_admin.php");

}elseif($userlvl === "Finance"){

  include("include/finance_header.php");

}elseif($userlvl === "Super"){

   include("include/superadmin_header.php");


}else{

   include("include/headers.php");

}

?>
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

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row top_tiles">
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                  
                    <ul class="nav navbar-right panel_toolbox">
                 
                    </ul>
                    <h4>Update Membership Form</h4>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
               <div class="row">
<div class="col-md-3">
<div class="form-group">
  <form action="personal_info.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="formid" value="<?php echo $formid; ?>">
<label for="field-1" class="control-label"><b>Last Name:</b></label>
<input type="text" name="lastname" value="<?php echo $lastname; ?>" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="field-1" class="control-label"><b>First Name:</b></label>
<input type="text" name="firstname" value="<?php echo $firstname; ?>" class="form-control" disabled>
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="field-1" class="control-label"><b>Middle Name(Optional):</b></label>
<input type="text" name="middlename" value="<?php echo $middlename; ?>" class="form-control">
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="field-1" class="control-label"><b>Nickname(Optional):</b></label>
<input type="text" name="nickname" value="<?php echo $nickname; ?>" class="form-control">
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
</div>
</div>
</div>
               <div class="row">
<div class="col-md-6">
<div class="form-group">
  <form action="personal_info.php" method="post" enctype="multipartform-data">
<label for="field-1" class="control-label"><b>Address:</b></label>
<textarea type="text" name="address" class="form-control"><?php echo $address; ?></textarea>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Civil Status:</b></label>
<br>

<?php
  
$username = $_SESSION['username'];
$sql = mysqli_query($conn,"SELECT civil_status FROM membership_form inner join  users on membership_form.userid = users.userid where username = '$username'");

while ($row = mysqli_fetch_array($sql)) {

?>

<?php

  if ($row['civil_status'] === "Single") {
     
    echo  "<div style=\"float: left;\"><input type=\"radio\" class=\"flat\" style=\"width: 35px; height: 20px;\" name=\"civil_statuss\"  value=\"Single\"> <p style=\"margin-top: -23px; margin-left: 40px; color: #6cb76e;\">".$row['civil_status'] ."</p></div>";

    echo  "<div style=\"float: left;\"><input type=\"radio\" class=\"flat\" style=\"width: 35px; height: 20px;\" name=\"civil_statuss\"  value=\"Single\"> <p style=\"margin-top: -23px; margin-left: 40px;\">Marreid</p></div>";

    echo  "<div style=\"float: left;\"><input type=\"radio\" class=\"flat\" style=\"width: 35px; height: 20px;\" name=\"civil_statuss\"  value=\"Widow\"> <p style=\"margin-top: -23px; margin-left: 40px;\">Widow</p></div>";

  }elseif($row['civil_status']  == "Married"){
    
    echo  "<div style=\"float: left;\"><input type=\"radio\" class=\"flat\" style=\"width: 35px; height: 20px;\" name=\"civil_statuss\"  value=\"Single\"> <p style=\"margin-top: -23px; margin-left: 40px;\">Single</p></div>";

    echo  "<div style=\"float: left;\"><input type=\"radio\" class=\"flat\" style=\"width: 35px; height: 20px;\" name=\"civil_statuss\"  value=\"Married\"> <p style=\"margin-top: -23px; margin-left: 40px; color: #6cb76e;\">".$row['civil_status']."</p></div>";

    echo  "<div style=\"float: left;\"><input type=\"radio\" class=\"flat\" style=\"width: 35px; height: 20px;\" name=\"civil_statuss\"  value=\"Window\"> <p style=\"margin-top: -23px; margin-left: 40px;\">Widow</p></div>";
    
  }elseif($row['civil_status']  === "Widow"){
    
    echo  "<div style=\"float: left;\"><input type=\"radio\" class=\"flat\" style=\"width: 35px; height: 20px;\" name=\"civil_statuss\"  value=\"\"> <p style=\"margin-top: -23px; margin-left: 40px;\">Single</p></div>";


    echo  "<div style=\"float: left;\"><input type=\"radio\" class=\"flat\" style=\"width: 35px; height: 20px;\" name=\"civil_statuss\"  value=\"Married\"> <p style=\"margin-top: -23px; margin-left: 40px;\">Married</p></div>";

    echo  "<div style=\"float: left;\"><input type=\"radio\" class=\"flat\" style=\"width: 35px; height: 20px;\" name=\"civil_statuss\"  value=\"Widow\"> <p style=\"margin-top: -23px; margin-left: 40px; color: #6cb76e;\">".$row['civil_status']."</p></div>";

  }

?>

<?php } ?>
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
</div>
</div>
</div>
               <div class="row">
<div class="col-md-4">
<div class="form-group">
  <form action="personal_info.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="formid" value="<?php echo $formid; ?>" >
<label for="field-1" class="control-label"><b>Telephone Number:</b></label>
<input type="text" name="telephone_number" value="<?php echo $telephone; ?>" class="form-control">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>Mobile Number:</b></label>
<input type="text" name="mobile_number" value="<?php echo $mobiles; ?>" class="form-control">
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>Email Address:</b></label>
<input type="text" name="email_add" value="<?php echo $email; ?>" class="form-control">
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
</div>
</div>
</div>
               <div class="row">
<div class="col-md-8">
<div class="form-group">
  <form action="personal_info.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="formid" value="<?php echo $formid; ?>" >
<label for="field-1" class="control-label"><b>Educational Attainment:</b></label>
<input type="text" name="educational" value="<?php echo $educational; ?>" class="form-control">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="field-1" class="control-label"><b>Degree Earned:</b></label>
<input type="text" name="degree_earned" value="<?php echo $degree; ?>" class="form-control">
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label for="field-1" class="control-label"><b>Line of Work:</b></label>
<input type="text" name="line_of_work" value="<?php echo $line;?>" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="field-1" class="control-label"><b>Occupation:</b></label>
<input type="text" name="occupation" class="form-control" value="<?php echo $occ; ?>">
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="field-1" class="control-label"><b>Place of Work:</b></label>
<input type="text" name="place_of_work" value="<?php echo $place_of_work;?>" class="form-control" >
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="field-1" class="control-label"><b>Skills:</b></label>
<input type="text" name="skills" class="form-control" value="<?php echo $skills; ?>" >
<!-- <div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b>  -->

<!--  <input style="width:90% !important; float:left;" type="number" name="productPrice" required class="form-control" id="field-3" placeholder=""></div> -->
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<input type="checkbox" id="flip" value="" style="float: left; width: 20px; height: 18px;"> <p style="float: left; font-size: 18px;">If married</p><br>
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
<br>
</div>
<br>
<div class="modal-footer">
<input type="submit" class="btn btn-primary" name="updates" style="background: #6cb76e; color: white; float: right; border-color: #6cb76e;" value="Save Changes">
</div>
</form>

    </div>
  </div>

  </div>
</div>
</div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          <p>Online Animal Welfare © <script>document.write(new Date().getFullYear())</script>. All Rights Reserved</p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
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
  </body>
</html>
<?php

if(isset($_POST['updates'])){

//$userid = mysqli_real_escape_string($conn, $_POST['userid']);

$middlename = mysqli_real_escape_string($conn, $_POST['lastname']);

$nickname = mysqli_real_escape_string($conn, $_POST['middlename']);

$address = mysqli_real_escape_string($conn, $_POST['nickname']);

$month = mysqli_real_escape_string($conn, $_POST['address']);

$place_of_birth = mysqli_real_escape_string($conn, $_POST['place_of_birth']);

$date = mysqli_real_escape_string($conn, $_POST['date']);

$year = mysqli_real_escape_string($conn, $_POST['year']);

$birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);

$gender = mysqli_real_escape_string($conn, $_POST['gender']);

$civil_statuss = mysqli_real_escape_string($conn, $_POST['civil_statuss']);

$blood_types = mysqli_real_escape_string($conn, $_POST['blood_types']);

$telephones = mysqli_real_escape_string($conn, $_POST['telephone_number']);

$mobile_number = mysqli_real_escape_string($conn, $_POST['mobile_number']);

$email_add = mysqli_real_escape_string($conn, $_POST['email_address']);

$educational = mysqli_real_escape_string($conn, $_POST['educational_attainment']);

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


$sql = "UPDATE membership_form set lastname = '$lastname', middlename = '$middlename', nickname = '$nickname', address = '$address', civil_status = '$civil_status', telephone_number = '$telephone_number', mobile_number = '$mobile_number'. email_address = '$email_add', educational_attainment = '$educational', degree_earned = '$degree_earned', line_of_work = '$line_of_work', occupation = '$occupation', place_of_work = '$place_of_work', skills = '$skills', type_of_marriage = '$type_of_marriage', date_of_marriage = '$date_of_marriage', name_of_spouse = '$name_of_spouses' where form = '$formid'";

$run_admin = mysqli_query($conn,$sql);


if ($run_admin) {
echo "<script>alert('Successfully')</script>";
echo "<script>window.open('update_membership.php','_self')</script>";
}else{
echo "<script>alert('Something went wrong')</script>";
}

}


?>
<?php } ?>