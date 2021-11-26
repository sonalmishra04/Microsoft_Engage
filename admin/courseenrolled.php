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
    $rent = $_POST['rent'];
    $email =  $_SESSION['email'];
    // For Documents
    $file_name = $_FILES['dp']['name']; 
    $pdf_tem_loc = $_FILES ['dp']['tmp_name'];
    
    move_uploaded_file($pdf_tem_loc, "documents/".$file_name);
    
      $sql = "insert into course(model, number, rent, admin_email, document) values ('$model', '$number', '$rent', '$email','$file_name')";
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