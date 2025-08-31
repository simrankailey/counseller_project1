<!-- include header file here -->
<?php 
session_start();
//get login user details via session value
if(!isset($_SESSION['email'])){
    echo "<script>window.location.assign('./login.php?msg=Please login first!')</script>";
}

include('header.php')

?>
<!-- end header -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('../asset/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="contact_requests.php">Contact Requests<i class="ion-ios-arrow-forward"></i></a></span></p>
                <h1 class="mb-0 bread">Contact Requests</h1>
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
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <!-- fectch data from properties table -->
            <?php
            include('config.php');
            $res = mysqli_query($conn, "SELECT * FROM `contacts`");
            $i = 1;
            foreach ($res as $r) {
            ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $r["c_name"] ?></td>
                    <td><?= $r["c_email"] ?></td>
                    <td><?= $r["c_msg"] ?></td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </table>

    </div>
    </div>
</section>

<!-- include footer file here -->
<?php 

include('footer.php')

?>
<!-- footer end -->