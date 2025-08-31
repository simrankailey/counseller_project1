<?php 
session_start();
//get login user details via session value
if(!isset($_SESSION['email'])){
    echo "<script>window.location.assign('./login.php?msg=Please login first!')</script>";
}
    if(isset($_POST["submit"]))
    {
        $id = $_POST['id'];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $created_at = $_POST["created_at"];
        
      

        // check if inputs are empty
        if($name == '' || $email == '' || $password == '' ) {
            echo "<script>window.location.assign('./conusers_add.php?msg=Please Fill Form')</script>";
        } 
        else {
            include "config.php";

            // check if new image is avaiable
            if($fn) {
                $res = mysqli_query($conn,"UPDATE `users` SET `name`='$name', `email`='$email', `password`='$password' WHERE id = $id");
            } else {
                $res = mysqli_query($conn,"UPDATE `users` SET `name`='$name', `email`='$email', `password`='$password' WHERE id = $id");
            }
    
            if($res)
            {    // check if new image is avaiable
                if($fn) {
                    move_uploaded_file($ft,$fn);
                }
                echo "<script>window.location.assign('./conusers_view.php?msg=Record Updated')</script>";
            }
            else{
                echo "<script>window.location.assign('./conusers_view.php?msg=Try Again')</script>";
            }
        }
        
    }
