<?php
global $first_name, $middle_name, $last_name, $parents_name, $gender,
$dob, $village, $district, $state, $pincode, $contact_no, $email;

$child_id = null;
if (isset($_POST['search'])) {
  $child_id = $_POST['child_id'];
}
include_once 'Connect.php';
include_once 'Utility.php';
require_once "./VaccinationCommon.php";
$next_group_id = vaccination_common::next_vaccination_group_id($child_id);
$vaccine_ids = vaccination_common::fetch_vaccine_ids($next_group_id);

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
    <?php include('Includes/Heading.php'); ?>
  </header>
  <div class="header">
    <h3>New Appointment</h3>
  </div>
  <form action="" method="POST">
    <div class="main-row">
      <div class="main-column">
        <label for="child_id">Child Id / Parent's Name</label>
      </div>
    </div>
    <input type="text" placeholder="Search.." name="child_id" id="child_id" value="<?= $child_id ?>"><button name="search"><i class="fa fa-search"></i></button>
  </form>
  <form action="./NewAppointmentScript.php" method="POST">
    <input type="hidden" name="child_id" id="child_id" value="<?= $child_id ?>">
    <div class="main-row">
      <div class="main-column">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" value="<?= $first_name ?>" readonly>
      </div>
      <div class="main-column">
        <label for="middle_name">Middle Name</label>
        <input type="text" name="middle_name" id="middle_name" value="<?= $middle_name ?>" readonly>
      </div>
      <div class="main-column">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" value="<?= $last_name ?>" readonly>
      </div>
    </div>
    <div class="main-row">
      <div class="main-column">
        <label for="famo_name">Parents Name</label>
        <input type="text" name="famo_name" id="famo_name" value="<?= $parents_name ?>" readonly>
      </div>
      <div class="main-column">
        <label for="gender">Gender</label>
        <div>
          <select name="gender" id="gender" disabled>
            <option value="">Select</option>
            <option value="Male" <?php if ($gender == 'Male') echo 'Selected'; ?>>Male</option>
            <option value="Female" <?php if ($gender == 'Female') echo 'Selected'; ?>>Female</option>
          </select>
        </div>
      </div>
      <div class="main-column">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" value="<?= $dob ?>" readonly>
      </div>
    </div>
    <div class="main-row">
      <div class="main-column">
        <label for="village">Village</label>
        <input type="text" name="village" id="village" value="<?= $village ?>" readonly>
      </div>
      <div class="main-column">
        <label for="district">District</label>
        <div>
          <select name="district" id="district" disabled>
            <option value="">Select</option>
            <option value="Muzaffarpur" <?php if ($district == 'Muzaffarpur') echo 'Selected'; ?>>Muzaffarpur</option>
            <option value="Vaishali" <?php if ($district == 'Vaishali') echo 'Selected'; ?>>Vaishali</option>
            <option value="Sitamarhi" <?php if ($district == 'Sitamarhi') echo 'Selected'; ?>>Sitamarhi</option>
            <option value="Saran" <?php if ($district == 'Saran') echo 'Selected'; ?>>Saran</option>
            <option value="Sivan" <?php if ($district == 'Sivan') echo 'Selected'; ?>>Sivan</option>
            <option value="West champaran" <?php if ($district == 'West champaran') echo 'Selected'; ?>>West champaran</option>
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
        <input type="text" name="pincode" id="pincode" value="<?= $pincode ?>" readonly>
      </div>
      <div class="main-column">
        <label for="contact_no">Contact No</label>
        <input type="text" name="contact_no" id="contact_no" value="<?= $contact_no ?>" readonly>
      </div>
      <div class="main-column">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?= $email ?>" readonly>
      </div>
    </div>
    <div class="main-row">
      <div class="main-column">
        <label for="">Appointment Date</label>
        <input type="date" id="appointment_date" name="appointment_date">
      </div>
      <div class="main-column">
        <label for="">Appointment Time</label>
        <input type="time" id="appointment_time" name="appointment_time">
      </div>
      <div class="main-column">
        <label for=""><b>Vaccines</b></label>
        <div></div>
        <?php
        foreach ($vaccine_ids as $vid) {
        ?>
          <label for=""><?= vaccination_common::fetch_vaccine_name($vid[0]); ?></label><br>
        <?php
        }
        ?>
      </div>
    </div>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
  </form>
  <footer class="footer">
    <?php include('Includes/Footer.html'); ?>
  </footer>
  <script>
    var today = new Date();
    var ampm = today.getHours() >= 12 ? ' PM' : ' AM';
    var time = today.getHours() + ":" + today.getMinutes() + ampm;
  </script>
</body>

</html>