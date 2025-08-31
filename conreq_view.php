<?php 
session_start();
//get login user details via session value
if(!isset($_SESSION['email'])){
    echo "<script>window.location.assign('./login.php?msg=Please login first!')</script>";
}
include 'config.php';
include('header.php');
$result = $conn->query("SELECT * FROM counselling_requests");
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('../asset/images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span><a href="conreq_view.php">All
                            Counselling Requests<i class="ion-ios-arrow-forward"></i></a></span></p>
                <h1 class="mb-0 bread">All Counselling Requests</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <?php
        if (isset($_GET["msg"])) {
            echo "<div class='alert alert-info'>" . $_GET["msg"] . "</div>";
        }
        ?>
        <table class="table table-success table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Qualification</th>
                <th>Interest</th>
                <th>Career Goal</th>
                <th>Preferred Country</th>
                <th>Has Answered</th> <!-- ✅ New column -->
                <th>Action</th>
            </tr>

            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['qualification']; ?></td>
                        <td><?php echo $row['interest']; ?></td>
                        <td><?php echo $row['career_goal']; ?></td>
                        <td><?php echo $row['preferred_country']; ?></td>
                        <td>
                            <?php 
                                echo ($row['has_answered'] == 'yes') 
                                    ? "<span class='badge bg-success text-white'>Yes</span>" 
                                    : "<span class='badge bg-warning'>No</span>"; 
                            ?>
                        </td>
                        <td>
                            <a href="./conreq_edit.php?id=<?php echo $row['id']; ?>">
                                <button class="btn btn-primary" name="id"><i class="fa fa-edit"></i></button>
                            </a>
                            <a href="./conreq_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">
                                <button class="btn btn-danger" name="id"><i class="fa fa-trash"></i></button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            <?php else: ?>
                <tr>
                    <td colspan="10" class="text-center">No record to show</td>
                </tr>
            <?php endif; ?>
        </table>

    </div>
</section>
<?php include('footer.php'); ?>
