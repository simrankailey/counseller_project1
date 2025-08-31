<?php 
session_start();
//get login user details via session value
if(!isset($_SESSION['email'])){
    echo "<script>window.location.assign('./login.php?msg=Please login first!')</script>";
}
include("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM counselling_requests WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: conreq_view.php?msg=Record deleted successfully");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
