<?php

session_start();

include("function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php
$admin_session = $_SESSION['username'];
$query = "SELECT * from users where username = '$admin_session'";

$direct = mysqli_query($conn,$query);

$rows = mysqli_fetch_array($direct);

$adminID = $rows['userid'];

$aprofiles = $rows['aprofiles'];

$firstname = $rows['firstname'];

$lastname = $rows['lastname'];

$aemail = $rows['aemail'];

$acontact = $rows['acontact'];

$branch = $rows['branch'];

?>
<?php
$username = $_SESSION['username'];
$parameter = "SELECT * from users where username = '$username'";
$condi = mysqli_query($conn,$parameter);

$ros = mysqli_fetch_array($condi);

$userlvl = $ros['user_level'];

?>

<?php 

if ($userlvl  === "Admin"){

   include("include/header_admin.php");

}elseif($userlvl === "Finance"){

  include("include/finance_header.php");

}else{

   include("include/headers.php");

}

?>
<!-- page content -->
<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">

</div>
<?php
error_reporting(0);
define('INCLUDE_CHECK',1);
include("function/functions.php");
?>
<div class="title_right">
<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

</div>
</div>
</div>
<br>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content" style="width: 500px; margin-left: 200px;">

<div class="modal-header">
<form action="" method="post" enctype="multipart/form-data">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
</button>
<h4 class="modal-title" id="myModalLabel">Add Contribute</h4>
</div>

<div class="modal-body">
<h4></h4>
<input type="hidden" name="adminID" value="<?php echo $adminID; ?>">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="field-1" class="control-label"><b>Date:</b></label>
<div><input type="date" name="date_created" required class="form-control" id="field-3" placeholder=""></div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Member:</b></label>
<select class="form-control" name="userid">
<?php
$query = mysqli_query($conn,"SELECT * from users where stat != 1");
while ($rows = mysqli_fetch_array($query)) {

?>
<option value="<?php echo $rows['userid']; ?>"><?php echo $rows['firstname']; ?> <?php echo $rows['lastname']; ?></option>
<?php
}
?>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Tithes:</b></label>
<div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b> <input style="width:90% !important; float:left;" type="number" name="tithes" required class="form-control" id="field-3" placeholder=""></div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Offering:</b></label>
<div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b> <input style="width:90% !important; float:left;" type="number" name="offering" required class="form-control" id="field-3" placeholder=""></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Operation:</b></label>
<div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b> <input style="width:90% !important; float:left;" type="number" name="operation" required class="form-control" id="field-3" placeholder=""></div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Ministry:</b></label>
<div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b> <input style="width:90% !important; float:left;" type="number" name="ministry" required class="form-control" id="field-3" placeholder=""></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="field-1" class="control-label"><b>Pledge:</b></label>
<div><b style="font-size:2vw; width:10% !important; float:left;" >₱</b> <input style="width:90% !important; float:left;" type="number" name="pledge" required class="form-control" id="field-3" placeholder=""></div>
</div>
</div>
</div>
</div>
<div class="modal-footer">

<input type="submit" class="btn btn-primary" name="adds" style="background: #6cb76e; color: white; border-color: #6cb76e;" value="Add">

</div>

</div>

</div>
</form> 
</div>
<br>
<br>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>My Contribution <small>bcc inc</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
       
                <br>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Fullname</th>
       <th>Date</th>
       <th>Tithes</th>
       <th>Offering</th>
       <th>Operation</th>
       <th>Ministry</th>
       <th>Pledge</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php

$username = $_SESSION['username'];                   
// $query = mysqli_query($conn,"SELECT * from contribution inner join users on contribution.userid = users.userid where username = '$username'");

$query = mysqli_query($conn,"SELECT * from contribution inner join users on contribution.userid = users.userid where username = '$username' ORDER by contribution.date_created desc");

while ($row = mysqli_fetch_array($query)) {

?>
                        <tr>
                        <td><?php echo $row['firstname']; ?> <?php echo $row['lastname'] ?></td>
<td><?php echo $row['date_created']; ?></td>
<td><?php if($row['offering_jacket'] === "1"){

  echo $row['amount'];

}else{

  echo 0;

}
?></td>
<td><?php if($row['offering_jacket'] === "2"){

  echo $row['amount'];

}else{
  echo 0;
}?></td>
<td><?php if($row['offering_jacket'] === "3"){

  echo $row['amount'];

}else{
  echo 0;
} ?></td>
<td><?php if($row['offering_jacket'] === "4"){

  echo $row['amount'];

}else{
  
  echo 0;

} ?></td>
<td><?php if($row['offering_jacket'] === "5"){

  echo $row['amount'];

}else{
 
 echo 0;
  
}?></td>

                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>




<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>Summary<small style="color: #6cb76e;">bcc inc.</small></h2>
<ul class="nav navbar-right panel_toolbox">

</ul>
<div class="clearfix"></div>
</div>
<div class="x_content">
<p class="text-muted font-13 m-b-30">

</p>
 <div class="row">
     <form method="post">
     <div class="input-daterange">
   
      <div class="col-md-3">
       <input type="text" name="start_date" id="max-date" class="form-control date-range-filter" required data-date-format="yyyy-mm-dd" placeholder="From:">
      </div>
      <div class="col-md-3">
        <input type="text" name="end_date" id="min-date" class="form-control date-range-filter" required data-date-format="yyyy-mm-dd" placeholder="To:">
      </div> 
    </div>

     <div class="col-md-3">
      <input type="submit" name="search" id="search" value="Search" class="btn btn-info" style="background-color: #6cb76e; border-color: #6cb76e;" />
     </div>
   
    </div>
    </form>

  <?php
  
  if(isset($_POST['search'])){

    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

  }

  ?>
    <br />
  <?php 
  $username = $_SESSION['username']; 
      // $showBuzzs = mysqli_query($conn,"SELECT SUM(amount)  amounts, SUM(con_total) as total FROM contribution inner join users on contribution.userid = users.userid where username = '$username'BETWIN  and contribution.date_created  = '$start_date'  ");

      $showBuzzs = mysqli_query($conn,"SELECT * FROM contribution inner join users on contribution.userid = users.userid where username = '$username' and contribution.date_created BETWEEN  '$start_date' and '$end_date'");

          while($tae = mysqli_fetch_array($showBuzzs))
          {

            if ($tae['offering_jacket'] == "1") {
                
                $total01 = $tae['amount'];

            }

            if ($tae['offering_jacket'] == "2") {
              
                $total02 = $tae['amount'];

            }

            if ($tae['offering_jacket'] == "3") {
              
                $total03 = $tae['amount'];

            }

            if ($tae['offering_jacket'] == "4") {
              
                 $total04 = $tae['amount']; 

            }

            if ($tae['offering_jacket'] == "5") {
              
                 $total05 = $tae['amount'];

            }

            $equal01 = $total01 + $total02 + $total03 + $total04 + $total05;

             ?>
              <tr>
          <td>
           <strong>
            <h5><b  style="color:rgb(64, 96, 21);  font-size: 12px;"></b><?='From:   '. $start_date.' <i   style="color:rgb(64, 96, 21);  font-size: 12px;"></i> To: '.$end_date; ?></h5> </strong>
          <h5><b style="color:rgb(64, 96, 21);  font-size: 12px;"></b>Total Tithes <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8369;&nbsp; <?=number_format($total01, 2); ?></strong></h5>
          <h5><b  style="color:rgb( 64, 96, 21 );  font-size: 12px;"></b>Total Offering <strong>&nbsp;&nbsp;&nbsp;&nbsp;&#8369; &nbsp;<?=number_format($total02, 2); ?></strong></h5>
          <h5><b  style="color:rgb(64, 96, 21);  font-size: 12px;"></b>Total Operation <strong>&nbsp;&#8369;&nbsp; <?=number_format($total03, 2); ?></strong></h5>
          <h5><b  style="color:rgb(64, 96, 21);  font-size: 12px;"></b>Total Ministry  <strong> &nbsp;&nbsp;&nbsp;&nbsp;&#8369; &nbsp;<?=number_format($total04, 2); ?></strong></h5>
          <h5><b  style="color:rgb(64, 96, 21);  font-size: 12px;"></b>Total Pledge <strong>&nbsp;&nbsp;&nbsp; &nbsp;&#8369; &nbsp;<?=number_format($total05, 2); ?></strong></h5>
          <br>
          <h3><b  style="color:rgb(64, 96, 21);  font-size: 22px;"></b>Total Contribution <strong> &#8369; &nbsp;<?= number_format($equal01, 2); ?></strong></h3>
          
          </td>
          
              </tr>

              <?php     
          }
    
  ?>
</div>
</div>
</div>
</div>
</div>
<!-- /page content -->

<!-- footer content -->

<!-- /footer content -->
</div>
</div>
<script type="text/javascript">
    $('.input-daterange input').each(function() {
  $(this).datepicker('clearDates');
});

// Set up your table
table = $('#my-table').DataTable({
  paging: false,
  info: false
});

// Extend dataTables search
$.fn.dataTable.ext.search.push(
  function(settings, data, dataIndex) {
    var min = $('#min-date').val();
    var max = $('#max-date').val();
    var createdAt = data[2] || 0; // Our date column in the table

    if (
      (min == "" || max == "") ||
      (moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max))
    ) {
      return true;
    }
    return false;
  }
);

// Re-draw the table when the a date range filter changes
$('.date-range-filter').change(function() {
  table.draw();
});

$('#my-table_filter').hide();
</script>
 

 <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

</body>
</html>

<script>
  
function denied(delid){

if (confirm("Are you sure you want to Archive this?")) {

window.location.href = 'archives.php?archives='+delid+'';

}

}


</script>

<?php

if (isset($_POST['adds'])) {

$userid = mysqli_real_escape_string($conn, $_POST['userid']);

$tithes = mysqli_real_escape_string($conn,$_POST['tithes']);

$offering = mysqli_real_escape_string($conn,$_POST['offering']);

$operation = mysqli_real_escape_string($conn, $_POST['operation']);

$ministry = mysqli_real_escape_string($conn, $_POST['ministry']);

$pledge = mysqli_real_escape_string($conn, $_POST['pledge']);

$date_created = mysqli_real_escape_string($conn, $_POST['date_created']);


$querys = "INSERT into contribution(cont_id,userid,tithes,offering, operation,ministry,pledge,date_created) VALUES('".md5(uniqid(rand(), true))."','$userid','$tithes','$offering','$operation','$ministry','$pledge','$date_created')";

$processs = mysqli_query($conn, $querys);

if ($processs) {
echo "<script>alert('Successfully')</script>";
echo "<script>window.open('add_member_contribute.php','_self')</script>";
}else{
echo "<script>alert('Something went wrong')</script>";
}

}

?>
<?php  } ?>