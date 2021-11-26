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
    
    $sql = "UPDATE course SET model='$model', number='$number', capacity='$capacity', rent='$rent' WHERE number='$number'";
    $run = mysqli_query($conn,$sql); 

    if($run){
        echo '<script>alert("Car Edited Succesfully")</script>';
        header("Location: available.php");
    }
    else{
        echo "Error:".mysqli_error($conn);
    }
}
?>