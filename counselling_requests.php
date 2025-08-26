<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Counselling Form</title>
  <link rel="stylesheet" href="../asset/css/counselling.css">
</head>
<body>
  <div class="container">
    <h2>Student Counselling Form</h2>
    <form action="conreq_insert.php" method="POST" class="counselling-form">

      <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="name" placeholder="Enter your full name" required>
      </div>

      <div class="form-group">
        <label>Email Address</label>
        <input type="email" name="email" placeholder="Enter your email" required>
      </div>

      <div class="form-group">
        <label>Phone Number</label>
        <input type="tel" name="phone" placeholder="Enter your phone number" required>
      </div>

      <div class="form-group">
        <label>Qualification (+2 Stream)</label>
        <select name="qualification" required>
          <option value="">--Select--</option>
          <option>Science</option>
          <option>Commerce</option>
          <option>Arts</option>
          <option>Other</option>
        </select>
      </div>

      <div class="form-group full-width">
        <label>Area of Interest</label>
        <textarea name="interest" placeholder="E.g., Engineering, Medical, CA, Business..." required></textarea>
      </div>

      <div class="form-group full-width">
        <label>Career Goal (if any)</label>
        <input type="text" name="career" placeholder="E.g., Doctor, Engineer, Entrepreneur">
      </div>

      <div class="form-group">
        <label>Preferred Study Location</label>
        <select name="preferred_country">
          <option value="">--Select--</option>
          <option>India</option>
          <option>Abroad</option>
        </select>
      </div>

      <div class="form-group full-width">
        <label>Additional Comments / Questions</label>
        <textarea name="comments" placeholder="Write your query here..."></textarea>
      </div>

      <div class="form-group full-width">
        <button type="submit">Send Message</button>
      </div>

    </form>
  </div>
</body>
</html>
