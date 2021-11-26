<?php
include('config.php');
session_start();

if(isset($_POST['login']))
{
   $email = $_POST['email'];
   $password = $_POST['password'];

   $sql = "select * from admin where email='$email' AND password='$password'";
   $run = mysqli_query($conn,$sql);

   if($run){
      if(mysqli_num_rows($run)>0){
         $_SESSION['email']=$email;
         $_SESSION['password']=$password;
         $_SESSION['logged']='yes';
         header("Location: index.php");
      }
      else{
         echo"Access Denied";
      }
   }
}
?>