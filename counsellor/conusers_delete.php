<?php
$id=$_GET["id"];
include("config.php");
$query="DELETE FROM `users` WHERE `id`='$id'";
$res=mysqli_query($conn,$query);
if($res)
{
	echo"<script>window.location.assign('./conusers_view.php?msg=Record deleted')</script>";
}
else
{
	echo mysqli_error($conn);
	echo"<script>window.location.assign('./conusers_view.php?msg=Try Again')</script>";
}