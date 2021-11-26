<?php
include('config.php');

if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "insert into user(username, email, password) values ('$username', '$email', '$password')";
    $run = mysqli_query($conn,$sql); 

    if($run){
        echo '<script>alert("You are registered Successfully")</script>';
        header("Location: login.php");
    }
    else{
        echo "Error:".mysqli_error($conn);
    }
}
?>