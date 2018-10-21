<?php

session_start();

include("../function/config.php");

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<?php

   $username = $_SESSION['username'];

   $parameter = "SELECT * from user_tbl where username = '$username'";
   
   $condi = mysqli_query($conn,$parameter);

   $ros = mysqli_fetch_array($condi);

   $user_id = $ros['user_id'];

   $userlvl = $ros['user_type'];

   $names = $ros['Name'];
   
   $user_images = $ros['user_image'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="css/pages.css">
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


<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" /> 

    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  <!--   <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
    <link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />  -->

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

<link rel="icon" href="images/logo.jpg" type="image/gif">


<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  top: 50px;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: #6cb76e;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: white;
}

/* Clear floats after the columns */
/* Style the buttons */
</style>
</head>

<body class="nav-md">
<div class="container body">
<div class="main_container" style="background: #6cb76e;">
<div class="col-md-3 left_col" style="background: #6cb76e;">
<div class="left_col scroll-view" style="background: #6cb76e;">


<div class="clearfix"></div>
<!-- menu profile quick info -->
<div class="profile clearfix">
<div class="profile_pic">
  <a href="change_profile.php?profiles=<?php echo $user_id; ?>">
<img src="aprofiles/<?php echo $user_images; ?>" alt="..." class="img-circle profile_img">
</a>
</div>
<div class="profile_info">
<span><b style="color: black; font-style: bold; font-size: 12px;"><?php echo $names; ?></b></span>
<h2>- Member</h2>
</div>
</div>
<!-- /menu profile quick info -->

<br />

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
<div class="menu_section">
<h3>General</h3>
<ul class="nav side-menu">

<li><a href="index.php"><i class="fa fa-home"></i> Home</span></a></li>
<li><a href="all_notification.php"><i class="fa fa-envelope"></i>Inbox</span></a></li>
<li><a href="view_of_adoption.php"><i class="fa fa-ticket"></i>Shelter<span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="view_of_adoption.php"> List of Requested</a></li>
<li><a href="archived_list.php"> Archived</a></li>

</ul>
</li>
<li><a href="add_pet.php"><i class="fa fa-paw"></i>Post Pet</span></a></li>
<li><a href="reports.php"><i class="fa fa-file-zip-o"></i>Reports</span></a></li>
<!-- <li><a href="view_member_con.php"><i class="fa fa-share-alt-square"></i> My Contribution</span></a></li>
<li><a href="postal_care_member.php"><i class="fa fa-calendar"></i>Pastoral Care</span></a></li> -->
<li><a><i class="fa fa-gears"></i>Settings <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="privacy.php"> Change Password</a></li>
<li><a href="personal_info.php"> Personal Info</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</li>
</ul>
</div>
</div>
<!-- /sidebar menu -->
<div class="sidebar-footer hidden-small" style="background: #6cb76e; color: #6cb76e;">
<a data-toggle="tooltip" style="background: #6cb76e;" data-placement="top" title="Settings">
<span style="color: #6cb76e;" class="glyphicon glyphicon-cog" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" style="background: #6cb76e;" data-placement="top" title="">
<span style="color: #6cb76e;" class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" style="background: #6cb76e;" data-placement="top" title="">
<span style="color: #6cb76e;" class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" style="background: #6cb76e;" data-placement="top" title="" href="login.html">
<span style="color: #6cb76e;" class="glyphicon glyphicon-off" aria-hidden="true" hidden></span>
</a>
</div>
</div>
</div>

<!-- top navigation -->
<div class="top_nav">
<div class="nav_menu">
<nav>
<div class="nav toggle">
<a id="menu_toggle"><i class="fa fa-bars"></i></a>
</div>

<ul class="nav navbar-nav navbar-right">
<li class="">
<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<img src="aprofiles/<?php echo $user_images; ?>" alt=""><?php echo $names; ?> <span class=" fa fa-angle-down"></span>
</a>
<ul class="dropdown-menu dropdown-usermenu pull-right">
<li><a href="javascript:;"> Profile</a></li>

<li><a href="javascript:;">Help</a></li>
<li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
</ul>
</li>

<li role="presentation" class="dropdown">
<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
<i class="fa fa-bell-o"></i>
<span class="badge bg-red">6</span>
</a>
<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
<li>
  <?php

     $sql = mysqli_query($conn, "SELECT * from approved left join user_tbl on approved.user_id = user_tbl.user_id where user_tbl.username = '$username'");

     $sql = mysqli_query($conn, "SELECT * from adoption left join user_tbl on adoption.users_id = user_tbl.user_id where user_tbl.username = '$username' and adoption.seen = '1'");
     
     if ($sql != 1) {

        echo "<a>
        <span>
        </span>
        <center>
        <span class=\"message\">
        No Notification Yet
        </span>
        </center>
        </a>";

      }elseif($sql){

     while($row = mysqli_fetch_array($sql)){

  ?>
<a href="see_timeline_notification.php?seen=<?php echo $row['adopt_id'] ?>">
<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
<span>
<span><?php echo $row['from_owner']; ?></span>
<span class="time" style="margin-right: -25px;"><?php echo $row['date_adoption']; ?></span>
</span>
<span class="message">
<?php echo $row['description']; ?>
</span>

<?php

if($row['approved'] == '1'){
   
   echo "<span class=\"message\" style=\"color: #6cb76e;\">Approved your request adoption.
</span>";

}elseif($row['approved'] == '2'){

  echo "<span class=\"message\">Sorry
</span>";
}elseif ($row['seen'] == '0') {
   echo "<center><span class=\"message\">No Notification
</span></center>";
}

?>
</a>

<?php } }else{

echo "<a>
<span>
</span>
<center>
<span class=\"message\">
No Notification Yet
</span>
</center>
</a>";

}

?>
</li>
<li>
<div class="text-center">
<a>
<strong><a href="see_timeline_notification.php">See All Alerts</a></strong>
<i class="fa fa-angle-right"></i>
</a>
</div>
</li>
</ul>
</li>
</ul>
</nav>
</div>
</div>
<!-- /top navigation -->
<?php } ?>