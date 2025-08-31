<?php 
session_start();
//get login user details via session value
if(!isset($_SESSION['email'])){
    echo "<script>window.location.assign('./login.php?msg=Please login first!')</script>";
}
include("header.php");

?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('../asset/images/bg_5.jpg');"
  data-stellar-background-ratio="0.5">
  <div class="overlay"></div>

  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate mb-5 text-center">
        <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i
                class="fa fa-chevron-right"></i></a></span> <span>Student Counselling Form <i class="fa fa-chevron-right"></i></span>
        </p>
        <h1 class="mb-0 bread">Student Counselling Form</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="wrapper px-md-4">
          <!-- <div class="row mb-5">
            <div class="col-md-3">
              <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-map-marker"></span>
                </div>
                <div class="text">
                  <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-phone"></span>
                </div>
                <div class="text">
                  <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-paper-plane"></span>
                </div>
                <div class="text">
                  <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-globe"></span>
                </div>
                <div class="text">
                  <p><span>Website</span> <a href="#">yoursite.com</a></p>
                </div>
              </div>
            </div>
          </div> -->
          <div class="row no-gutters">
            <div class="col-md-12">
              <div class="contact-wrap w-100 p-md-5 p-4">
                <h3 class="mb-4">Student Counselling Form</h3>
                <div id="form-message-success" class="mb-4">

                  <form id="contactForm" action="conreq_insert.php" method="POST" class="contactForm">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" class="label">Full Name</label>
                          <input class="form-control" type="text" name="name" placeholder="Enter your full name"
                            required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Email Address</label>
                          <input class="form-control" type="email" name="email" placeholder="Enter your email" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Phone Number</label>
                          <input class="form-control" type="tel" name="phone" placeholder="Enter your phone number"
                            required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Qualification (+2 Stream)</label>
                          <select name="qualification" required class="form-control">
                            <option value="">--Select--</option>
                            <option>Science</option>
                            <option>Commerce</option>
                            <option>Arts</option>
                            <option>Other</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group full-width">
                          <label class="label">Area of Interest</label>
                          <textarea class="form-control" name="interest"
                            placeholder="E.g., Engineering, Medical, CA, Business..." required></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group full-width">
                          <label class="label">Career Goal (if any)</label>
                          <input class="form-control" type="text" name="career"
                            placeholder="E.g., Doctor, Engineer, Entrepreneur">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Preferred Study Location</label>
                          <select class="form-control" name="preferred_country">
                            <option value="">--Select--</option>
                            <option>India</option>
                            <option>Abroad</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group full-width">
                          <label class="label">Additional Comments / Questions</label>
                          <textarea class="form-control" name="comments"
                            placeholder="Write your query here..."></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="form-group full-width">
                      <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>

                  </form>
                </div>
              </div>
              <div class="col-md-5 order-md-first d-flex align-items-stretch">
                <div id="map" class="map"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<?php
include("footer.php");
?>