<?php
session_start();
unset($_SESSION["user_email"]);
// session_destroy($_SESSION["user_email"]);
echo"<script>window.location.assign('./login.php')</script>";
?>