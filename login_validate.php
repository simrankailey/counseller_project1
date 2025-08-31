<?php
session_start();
include("config.php");
if (isset($_REQUEST["submit"])) {
    $user_email = trim($_POST["email"] ?? '');
    $password   = trim($_POST["password"] ?? '');

    if ($user_email === '' || $password === '') {
        echo "<script>window.location.assign('./login.php?msg=Please Fill Form First')</script>";
        exit;
    }

    // 1) Check admin login directly
    if ($user_email === 'admin@admin.com' && $password === 'password') {
        $_SESSION["email"] = $user_email;
        $_SESSION["is_admin"]   = 1;
        echo "<script>window.location.assign('./index.php')</script>";
        exit;
    }

    // 2) Normal users
    

    $res = mysqli_query(
        $conn,
        "SELECT * FROM `users` WHERE `email`='$user_email' AND `password`='$password' LIMIT 1"
    );

    if ($row = mysqli_fetch_array($res)) {
        $_SESSION["email"] = $user_email;
        $_SESSION["is_admin"]   = 0; // force normal user
        echo "<script>window.location.assign('./index.php')</script>";
    } else {
        echo "<script>window.location.assign('./login.php?msg=Incorrect Credentials')</script>";
    }
}
?>
