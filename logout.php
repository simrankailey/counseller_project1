<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["is_admin"]);
// session_destroy($_SESSION["user_email"]);
echo"<script>window.location.assign('./index.php')</script>";
?>