<?php 
session_start();
//get login user details via session value
if(!isset($_SESSION['email'])){
    echo "<script>window.location.assign('./login.php?msg=Please login first!')</script>";
}
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $qualification = $_POST['qualification'];
    $interest = $_POST['interest'];
    $career = $_POST['career'];
    $preferred_country = $_POST['preferred_country'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO counselling_requests (name, email, phone, qualification, interest, career_goal, preferred_country, comments)
            VALUES ('$name', '$email', '$phone', '$qualification', '$interest', '$career', '$preferred_country', '$comments')";

    if ($conn->query($sql) === TRUE) {
        echo "Request Submitted Successfully! <a href='conreq_view.php'>View Requests</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
