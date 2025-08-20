<!-- include header file here -->
<?php

include('header.php');

// check if session user session is still avaiable


// include('../shared/sessionCheck.php');

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
        <div class="row justify-content-center">
            <a href="./conusers_view.php">
                <button type="submit" class="btn btn-primary col-md-12 mb-3">GO BACK TO MANAGE COUNSELOR</button>
            </a>
        </div>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            include('config.php');
            $res = mysqli_query($conn, "SELECT * FROM `users` WHERE id = $id");
            $i = 1;
            foreach ($res as $r) {

        ?>
                <div class="row">

                    <form class="w-100" method="post" action="./conusers_update.php" enctype="multipart/form-data">

                        <div class="row justify-content-center">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $r['name'] ?>">
                            </div>
                            <div class="from-group col-md-6">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo $r['email'] ?>">
                            </div>
                            <div class="from-group col-md-6">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" value="<?php echo $r['password'] ?>">
                            </div>
                            <div class="from-group col-md-6">
                                <label>Created_at</label>
                                <input type="text" name="created_at" class="form-control" value="<?php echo $r['created_at'] ?>">
                            </div>
                        </div>
                      
                        <input type="hidden" value="<?php echo $r['id'] ?>" name="id">
                <?php
                $i++;
            };
        };
                ?>
                <button type="submit" name="submit" class="btn btn-primary col-md-12">Update property</button>
                    </form>

                </div>
    </div>
</section> <!-- .section -->


<!-- include footer file here -->
<?php

include('footer.php')

?>
<!-- footer end -->