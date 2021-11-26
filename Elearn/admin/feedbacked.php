<?php
session_start();
include_once('config.php');
if(!isset($_SESSION['logged'])){
    header('Location:login.php');
}


if(isset($_POST['add']))
{
    $model = $_POST['model'];
    $number = $_POST['number'];
    $capacity = $_POST['capacity'];
    $rent = $_POST['rent'];
    $email =  $_SESSION['email'];
    
    $sql = "insert into cars(model, number, capacity, rent, admin_email) values ('$model', '$number', '$capacity', '$rent', '$email')";
    $run = mysqli_query($conn,$sql); 

    if($run){
        echo '<script>alert("You are registered Successfully")</script>';
        header("Location: available.php");
    }
    else{
        echo "Error:".mysqli_error($conn);
    }
}
?>