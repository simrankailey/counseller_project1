<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $qualification = $_POST['qualification'];
    $message = $_POST['message'];

    $sql = "UPDATE counselling_requests SET 
            name='$name', email='$email', phone='$phone', qualification='$qualification', message='$message' 
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: conreq_view.php?msg=Record updated successfully");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
