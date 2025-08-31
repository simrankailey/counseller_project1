<?php 
session_start();
//get login user details via session value
if(!isset($_SESSION['email'])){
    echo "<script>window.location.assign('./login.php?msg=Please login first!')</script>";
}
include("header.php"); 
include("config.php"); 
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('../asset/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2">
          <span class="mr-2"><a href="./index.php">Home <i class="ion-ios-arrow-forward"></i></a></span>
          <span>Counselling Requests <i class="ion-ios-arrow-forward"></i></span>
        </p>
        <h1 class="mb-0 bread">Edit Counselling Request</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">

    <?php 
    // Check if ID is set
   // Check if ID is set
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // Fetch the record by ID
  $sql = "SELECT * FROM counselling_requests WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    echo "Record not found!";
    exit;
  }
}

    // Update record
    if (isset($_POST['update'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $qualification = $_POST['qualification'];
      $interest = $_POST['interest'];
      $career_goal = $_POST['career_goal'];
      $preferred_country = $_POST['preferred_country'];
      $comments = $_POST['comments'];

      $update = "UPDATE counselling_requests SET 
          name='$name', 
          email='$email', 
          phone='$phone', 
          qualification='$qualification', 
          interest='$interest', 
          career_goal='$career_goal', 
          preferred_country='$preferred_country', 
          comments='$comments' 
          WHERE id=$id";

      if (mysqli_query($conn, $update)) {
        echo "<script>alert('Record updated successfully!'); window.location='conreq_update.php';</script>";
        exit;
      } else {
        echo "<div class='alert alert-danger'>Error updating record: " . mysqli_error($conn) . "</div>";
      }
    }
    ?>

    <div class="row justify-content-center">
      <a href="conreq_update.php">
        <button type="button" class="btn btn-primary col-md-12 mb-3">GO BACK TO MANAGE REQUESTS</button>
      </a>
    </div>

    <div class="row">
      <form class="w-100" method="post" action="conreq_update.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <div class="row justify-content-center">
          <div class="form-group col-md-6">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="form-group col-md-6">
            <label>Phone</label>
            <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label>Qualification</label>
            <input type="text" name="qualification" value="<?php echo $row['qualification']; ?>" class="form-control">
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="form-group col-md-6">
            <label>Interest</label>
            <input type="text" name="interest" value="<?php echo $row['interest']; ?>" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label>Career Goal</label>
            <input type="text" name="career_goal" value="<?php echo $row['career_goal']; ?>" class="form-control">
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="form-group col-md-6">
            <label>Preferred Country</label>
            <input type="text" name="preferred_country" value="<?php echo $row['preferred_country']; ?>" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label>Comments</label>
            <input type="text" name="comments" value="<?php echo $row['comments']; ?>" class="form-control">
          </div>
        </div>
          <div class="form-group col-md-6">
          <label>Has Answered:</label>
          <input type="radio" name="has_answered" value="yes" <?php if($row['has_answered']=='yes') echo 'checked'; ?>> Yes
          <input type="radio" name="has_answered" value="no" <?php if($row['has_answered']=='no') echo 'checked'; ?>> No
        </div>

        <button type="submit" name="update" class="btn btn-primary col-md-12">Update Counselling Request</button>
      </form>
    </div>
  </div>
</section>


<?php include("footer.php"); ?>
<!-- footer end -->
