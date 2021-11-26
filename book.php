<?php
session_start();
include_once('config.php');
if(!isset($_SESSION['logged'])){
    header('Location:login.php');
}


if(isset($_POST['book']))
{
    $customer = $_POST['customer'];
    // $days = $_POST['days'];
    // $start = $_POST['start'];
    $number = $_POST['number'];
    $email =  $_SESSION['email'];
    
    $sql = "UPDATE course SET status='1', customer_name='$customer', user_email='$email' WHERE number='$number'";
    $run = mysqli_query($conn,$sql); 

    if($run){
        echo '<script>alert("You are registered Successfully")</script>';
        header("Location: enrolled.php");
    }
    else{
        echo "Error:".mysqli_error($conn);
    }
}
?>