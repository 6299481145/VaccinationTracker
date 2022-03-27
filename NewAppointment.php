<?php
$child_id = $_POST['child_id'];

include 'Connect.php';
include 'Utility.php';
$sql = "SELECT * FROM child WHERE child_id='$child_id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $first_name = $row['first_name'];
  $middle_name = $row['middle_name'];
  $last_name = $row['last_name'];
  $parents_name = $row['parents_name'];
  $gender = $row['gender'];
  $dob = $row['dob'];
  $village = $row['village'];
  $district = $row['district'];
  $state = $row['state'];
  $pincode = $row['pincode'];
  $contact_no = $row['contact_no'];
  $email = $row['email'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="design.css">
  <link rel="stylesheet" href="design.js">
  <link rel="shortcut icon" href="Image/vac.png" type="image/x-icon">
  <title>VAT 1.0</title>
</head>


<body>

  <header>
    <?php include('Includes/Header.html'); ?>
  </header>
  <div class="header">
    <h2>New Appointment</h2>
  </div>
  <form class=Child action="" method="POST">
    <label for="child_id">Child Id / Parent's Name</label>
    <div>
      <input type="text" placeholder="Search.." name="child_id" id="child_id" value="<?= $child_id ?>"><button><i class="fa fa-search"></i></button>
    </div>
  </form>
  <form class=Child action="EditChildScript.php" method="POST">
    <input type="hidden" name="child_id" id="child_id" value="<?= $child_id ?>">
    <div class="main-row">
      <div class="main-column">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" value="<?= $first_name ?>">
      </div>
      <div class="main-column">
        <label for="middle_name">Middle Name</label>
        <input type="text" name="middle_name" id="middle_name" value="<?= $middle_name ?>">
      </div>
      <div class="main-column">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" value="<?= $last_name ?>">
      </div>
    </div>
    <div class="main-row">
      <div class="main-column">
        <label for="famo_name">Parents Name</label>
        <input type="text" name="famo_name" id="famo_name" value="<?= $parents_name ?>">
      </div>
      <div class="main-column">
        <label for="gender">Gender</label>
        <div>
          <select name="gender" id="gender">
            <option value="">Select</option>
            <option value="Male" <?php if ($gender == 'Male') echo 'Selected'; ?>>Male</option>
            <option value="Female" <?php if ($gender == 'Female') echo 'Selected'; ?>>Female</option>
          </select>
        </div>
      </div>
      <div class="main-column">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" value="<?= $dob ?>">
      </div>
    </div>
    <hr>
    <div class="main-row">
      <div class="main-column">
        <label for="village">Village</label>
        <input type="text" name="village" id="village" value="<?= $village ?>">
      </div>
      <div class="main-column">
        <label for="district">District</label>
        <div>
          <select name="district" id="district">
            <option value="">Select</option>
            <option value="Muzaffarpur" <?php if ($district == 'Muzaffarpur') echo 'Selected'; ?>>Muzaffarpur</option>
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
        <input type="text" name="pincode" id="pincode" value="<?= $pincode ?>">
      </div>
      <div class="main-column">
        <label for="contact_no">Contact No</label>
        <input type="text" name="contact_no" id="contact_no" value="<?= $contact_no ?>">
      </div>
      <div class="main-column">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?= $email ?>">
      </div>
    </div>
    <hr>
    <div class="main-row">
      <div class="main-column">
        <label for="">Appointment Date</label>
        <input type="date">
      </div>
      <div class="main-column">
        <label for="">Appointment Time</label>
        <input type="text" id="currentTime">
      </div>
    </div>
    <hr>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
    <footer class="footer">
      <?php include('Includes/Footer.html'); ?>
    </footer>
    <script>
      var today = new Date();
      var ampm = today.getHours() >= 12 ? ' PM' : ' AM';
      var time = today.getHours() + ":" + today.getMinutes() + ampm;
      document.getElementById("currentTime").value = time;
    </script>
</body>

</html>