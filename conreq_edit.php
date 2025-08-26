<?php
include('header.php');
include("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch record from DB
    $sql = "SELECT * FROM counselling_requests WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        die("Record not found!");
    }
} else {
    die("Invalid Request!");
}
?>

<form method="POST" action="">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
    Phone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>
    Qualification: <input type="text" name="qualification" value="<?php echo $row['qualification']; ?>"><br>
    Message: <textarea name="message"><?php echo $row['message']; ?></textarea><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
// Update record when form is submitted
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $qualification = $_POST['qualification'];
    $message = $_POST['message'];

    $sql = "UPDATE counselling_requests SET name='$name', email='$email', phone='$phone', qualification='$qualification', message='$message' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: conreq_view.php?msg=Record Updated Successfully");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
<?php

include('footer.php')

?>