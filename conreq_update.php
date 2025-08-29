<?php
include("config.php");
include("header.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $qualification = $_POST['qualification'];
    $interest = $_POST['interest'];
    $career_goal = $_POST['career_goal'];
    $preferred_country = $_POST['preferred_country'];
    $comments = $_POST['comments'];

    $sql = "UPDATE counselling_requests SET 
                name='$name', 
                email='$email', 
                phone='$phone', 
                qualification='$qualification', 
                interest='$interest', 
                career_goal='$career_goal', 
                preferred_country='$preferred_country', 
                comments='$comments'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: conreq_view.php?msg=Record updated successfully");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<?php include("footer.php"); ?>

