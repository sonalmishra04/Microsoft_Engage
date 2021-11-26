<?php
session_start();
include_once('config.php');
if(!isset($_SESSION['logged'])){
    header('Location:login.php');
}


if(isset($_POST['book']))
{
    $number = $_POST['number'];
 
    $sql = "UPDATE course SET status='0', customer_name='', user_email='' WHERE number='$number'";
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