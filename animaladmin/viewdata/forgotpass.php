 <?php
  
  $connect = mysqli_connect("localhost","root","","bccinc_db");

  if (isset($_POST['submit1'])) {
       
       $points = $_POST['points'];

       $sql = "SELECT * FROM rewards WHERE points='$points'";
       $answer = mysqli_query($connect, $sql);

  if (mysqli_num_rows($answer) == 1) {

      session_start();
       $_SESSION['points'] = $points;
       header("location: success.php");

  }else{
    ?>
       <script type="text/javascript">
            window.location="sorry.php";
       </script>
    <?php
     
  }
}
  
 ?>

 <div id="id02" class="modal">

<center>
        <form class="modal-content animate" method="post" name="form2" action = "" enctype="multipart/form-data">
   <div class="form-title-row">

   <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
   <br>
  
                <h2 ></h2>
            </div> 

            <div class="form-row">

              <table>
               <form action="" method="post">
              <center><h3> Enter Your Email Below , We Will Send You , Your Password </h3></center>
                    <tr>
                      <div class="row ">
                      <center><input type="text" name="a_email" class="form-controll" placeholder="example@gmail.com"><br></center>
                           <div class="col-lg-6">
                                   
                                   </div>
                                      </div>
                                          </tr>

                                 <div class="row">
                                 <div class="test" id="raw">
                                             
                                                <button type="submit" target="blank" name="forgot_pass" class="btn btn-primary btn-sm" >Send your password</button>
                                                <a type="reset" href="" class="btn btn-primary " >Cancel</a><br>



                                                <br>
                                                <span></span>
                                           
                                            </div>
                                          </div>
       
                               

    </form>
          
              </table>
                     </center> 

            </div>
             </form>
  
          </div>  
<?php

if(isset($_POST['forgot_pass'])){

$a_email = $_POST['a_email'];

$sel_a = "SELECT * from user_tbl where email_address = '$a_email'";

$run_a = mysqli_query($connect,$sel_a);

$count_a = mysqli_num_rows($run_a);

$row_a = mysqli_fetch_array($run_a);

$a_name = $row_a['Name'];

$a_pass = $row_a['password'];

if($count_a == 0){s

echo "<script> alert('Sorry, We do not have your email') </script>";
echo "<script>window.open('login.php','_self')</script>";
exit();

}
else{

$message = "

<h1 align='center'> Your Password Has Been Sent To You </h1>

<h2 align='center'> Dear $a_name </h2>

<h3 align='center'>

Your Password is : <span> <b>$a_pass</b> </span>

</h3>

<h3 align='center'>

<a href='localhost/guestcustomer/login.php'>
 
Click Here To Login Your Account 
 
</a>

</h3>

";

$from = "sad.ahmed22224@gmail.com"; 

$subject = "Your Password";

$headers = "From: $from\r\n";

$headers .= "Content-type: text/html\r\n";
error_reporting(0);
mail($a_email,$subject,$message,$headers);

echo "<script> alert('Your Password has been sent to you, check your inbox ') </script>";

echo "<script>window.open('login.php','_self')</script>";

}

}

?>

