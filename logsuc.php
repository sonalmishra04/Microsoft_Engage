<?php
include('config.php');
session_start();

if(isset($_POST['login']))
{
   extract($_POST);

   $sql = "select * from user where email='$email' AND password='$password'";
   $run = mysqli_query($conn,$sql);
  

   if($run){
      if(mysqli_num_rows($run)>0){
         $_SESSION['email']=$email;
         $_SESSION['password']=$password;
         $_SESSION['logged']='yes';
         header("Location: dashboard.php");
      }
      else{
         echo"Access Denied";
      }
   }
}
?>