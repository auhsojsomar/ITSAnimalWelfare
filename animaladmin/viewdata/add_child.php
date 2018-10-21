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

$userid = $rows['userid'];

?>

<?php

$number = count($_POST["name"]);

if($number > 1)
{
	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["name"][$i] != ''))
		{
			$sql = "INSERT INTO children(userid,child_name) VALUES('$userid','".mysqli_real_escape_string($conn, $_POST["name"][$i])."')";
			mysqli_query($conn, $sql);
		}
	}
	echo "Data Inserted";
}
else
{
	echo "Please Enter Name";
}
?>

<?php } ?>