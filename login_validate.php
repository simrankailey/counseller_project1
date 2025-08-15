<?php
session_start();

if(isset($_REQUEST["submit"]))
{
	$user_email = $_POST["email"];
	$password = $_POST["password"];
    
    if($user_email == '' || $password == ''){
        echo "<script>window.location.assign('./login.php?msg=Please Fill Form First')</script>";
    } else {
        include("config.php");
	
        $res = mysqli_query($conn,"SELECT * FROM `users` where `email`='$user_email' and `password`='$password'");
        
        if($row = mysqli_fetch_array($res))
        {   
            // set session value
            $_SESSION["user_email"] = $user_email;
            
            echo "<script>window.location.assign('./index.php')</script>";
        }
        else{
            echo "<script>window.location.assign('./login.php?msg=Incorrect Credentials')</script>";
        }
    }
}

?>