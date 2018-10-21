<?php
    
if (isset($_POST['signup'])) {
      
  $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $email_address = mysqli_real_escape_string($conn,$_POST['email_address']);
  $contact_number = mysqli_real_escape_string($conn,$_POST['contact_number']);
  $genders = mysqli_real_escape_string($conn, $_POST['gender']);
  $address = mysqli_real_escape_string($conn,$_POST['address']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $password2 = mysqli_real_escape_string($conn,$_POST['password2']);   
      
  if ($password == $password2) {

    $query = "INSERT into user_tbl(user_id,username,Name,email_address,gender,password,contact_number,address,state,user_type,user_image) VALUES('','$username','$fullname','$email_address','$genders','$password','$contact_number','$address','active','user','default.jpg')";

        $process = mysqli_query($conn, $query);

        if ($process) {

          echo "<script>alert('Successfully Added')</script>";

          echo "<script>window.open('index.php','_self')</script>";

        }else{

          echo "<script>alert('Something went wrong')</script>";

        }

    }else{

        echo "<script>alert('Your password is not matching. Please check to same input your Re-password')</script>";

}
}


?>