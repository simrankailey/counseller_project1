<!-- include header file here -->
<?php
session_start();
// get login user details via session value
// if(isset($_SESSION['email'])){
//     $user_email = $_SESSION['email'];
// } else {
//     echo "<script>window.location.assign('./login.php?msg=Please login first!')</script>";
// }
include('header.php')

?>
<!-- end header -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('../asset/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="./index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Counselor<i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Counselor</h1>
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
        <!-- <div class="row justify-content-center">
            <a href="./properties_add.php">
                <button type="submit" class="btn btn-primary col-md-12 mb-3">CLICK HERE TO ADD NEW PROPERTY</button>
            </a>
        </div> -->

        <table class="table table-success table-striped">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            <!-- fectch data from properties table -->
            <?php
            include('config.php');
            $res = mysqli_query($conn, "SELECT * FROM `users`");
            $i = 1;
            foreach ($res as $r) {
            ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $r["name"] ?></td>
                    <td><?= $r["email"] ?></td>
                    <td><?= $r["password"] ?></td>
                    <td><?= $r["created_at"] ?></td>
                  
                    <td>
                        <?php echo "<a href='./conusers_delete.php?id=$r[id]'>
                        <button class='btn btn-danger' name='id'><i class='fa fa-trash'></i></button>
                        </a>"
                        ?>
                        <?php echo "<a href='./conusers_edit.php?id=$r[id]'>
                    <button class='btn btn-info'><i class='fa fa-pencil'></i></button>
                    </a>"
                        ?>
                    </td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </table>

    </div>
    </div>
</section>
<!-- .section -->


<!-- include footer file here -->
<?php

include('footer.php')

?>
<!-- footer end -->