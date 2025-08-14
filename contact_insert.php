<?php

if (isset($_POST["submit"])) {
    $c_name = $_POST["c_name"];
    $c_msg = $_POST["c_msg"];
    $c_email = $_POST["c_email"];

    if ($c_name == '' || $c_msg == '' || $c_email == '') {
        echo "<script>window.location.assign('./contact.php?msg=Please Fill Form')</script>";
    } else {
        include "config.php";

        $sql = "INSERT INTO `contacts`(`c_name`, `c_email`, `c_msg`) VALUES ('$c_name', '$c_email', '$c_msg')";

        $res = mysqli_query($conn, $sql);
        echo mysqli_error($conn);
        if ($res) {
            echo "<script>window.location.assign('./contact.php?msg=Your message was sent, thank you!')</script>";
        } else {
            echo "<script>window.location.assign('./contact.php?msg=Something went wrong')</script>";
        }
    }
}