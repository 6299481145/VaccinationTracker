<?php
include 'Utility.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="design.css">
  <link rel="shortcut icon" href="Image/vac.png" type="image/x-icon">
  <title>VAT 1.0</title>
</head>


<body>

  <header>
    <?php include('Includes/Header.html'); ?>
  </header>
  <div class="header">
    <h2>Child Registration</h2>
  </div>
  <form class=Child action="NewChildScript.php" method="POST">
    <div class="main-row">
      <div class="main-column">
        <label class="required" for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name">
      </div>
      <div class="main-column">
        <label for="middle_name">Middle Name</label>
        <input type="text" name="middle_name" id="middle_name">
      </div>
      <div class="main-column">
        <label class="required" for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name">
      </div>
    </div>
    <div class="main-row">
      <div class="main-column">
        <label class="required" for="Famo_name">Parant's Name</label>
        <input type="text" name="famo_name" id="famo_name">
      </div>
      <div class="main-column">
        <label class="required" for="gender">Gender</label>
        <div>
          <select name="gender" id="gender">
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
      </div>
      <div class="main-column">
        <label class="required" for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob">
      </div>
    </div>
    <hr>
    <div class="main-row">
      <div class="main-column">
        <label for="village">Village</label>
        <input type="text" name="village" id="village">
      </div>
      <div class="main-column">
        <label for="district">District</label>
        <div>
          <select name="district" id="district">
            <option value="">Select</option>
            <option value="Muzaffarpur">Muzaffarpur</option>
            <option value="Vaishali">Vaishali</option>
            <option value="Sitamarhi">Sitamarhi</option>
            <option value="Saran">Saran</option>
            <option value="Sivan">Sivan</option>
            <option value="West champaran">West champaran</option>
          </select>
        </div>
      </div>
      <div class="main-column">
        <label for="state">State</label>
        <div>
          <?php fetch_existing_state($state); ?>
        </div>
      </div>
    </div>

    <div class="main-row">
      <div class="main-column">
        <label for="pincode">Pincode</label>
        <input type="text" name="pincode" id="pincode">
      </div>
      <div class="main-column">
        <label for="contact_no">Contact No</label>
        <input type="text" name="contact_no" id="contact_no">
      </div>
      <div class="main-column">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
      </div>
    </div>
    <hr>
    <button type="submit">Submit</button>

    <button type="reset">Reset</button>


    <footer class="footer">
      <?php include('Includes/Footer.html'); ?>
    </footer>
  </form>
</body>

</html>