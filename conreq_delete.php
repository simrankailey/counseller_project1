<?php
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
