<?php
// if it is post hete use post in the form or get or anyother as per the requirement
// here i am using isset method to chcek if the submit value is there with button click --- in simple words if button got clicked 
if (isset($_POST["submit"])) {
    // if yes the use different variables to save values of form with name attribute : remember u_name, u_password now it woll save the values like password, email@test.now
    $u_name = $_POST["u_name"];
    $u_password = $_POST["u_password"];
    $u_email = $_POST["u_email"];
    // $u_address = $_POST["u_address"];
    // $u_contact = $_POST["u_contact"];

    // if the variables are empty means no simran, password, email@test.now there then redirect page to register page again
    if ($u_name == '' || $u_password == '' || $u_email == '' ) {
        echo "<script>window.location.assign('./register.php?msg=Please Fill Form')</script>";
    } else {
        // otherwise run script 
        // first build connection 
        include "config.php";

        $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$u_name', '$u_email', '$u_password')";

        $res = mysqli_query($conn, $sql);
        if ($res) {
            echo "<script>window.location.assign('./login.php?msg=Registration Done')</script>";
        } else {
            echo "<script>window.location.assign('./register.php?msg=Try Again')</script>";
        }
    }
}
