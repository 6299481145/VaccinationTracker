<?php
include 'VaccinationCommon.php';
include_once './Utility.php';

$child_id = null;
$child = null;

if (isset($_POST['search'])) {
  $child_id = $_POST['child_id'];
  $child = vaccination_common::fetch_child($child_id);
}
$next_group_id = vaccination_common::next_vaccination_group_id($child_id);
$vaccine_ids = vaccination_common::fetch_vaccine_ids($next_group_id);
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
        <label for="child_id">Child Id</label>
      </div>
    </div>
    <input type="text" placeholder="Search.." name="child_id" id="child_id" value="<?php if ($child != null) { echo $child['child_id'];} ?>"><button name="search"><i class="fa fa-search"></i></button>
  </form>
  <form action="./NewAppointmentScript.php" method="POST">
    <input type="hidden" name="child_id" id="child_id" value="<?php if ($child != null) { echo $child['child_id'];} ?>">
    <div class="main-row">
      <div class="main-column">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" value="<?php if ($child != null) { echo $child['first_name'];} ?>" readonly>
      </div>
      <div class="main-column">
        <label for="middle_name">Middle Name</label>
        <input type="text" name="middle_name" id="middle_name" value="<?php if ($child != null) { echo $child['middle_name'];} ?>" readonly>
      </div>
      <div class="main-column">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" value="<?php if ($child != null) { echo $child['last_name'];} ?>" readonly>
      </div>
    </div>
    <div class="main-row">
      <div class="main-column">
        <label for="famo_name">Parents Name</label>
        <input type="text" name="famo_name" id="famo_name" value="<?php if ($child != null) { echo $child['parents_name'];} ?>" readonly>
      </div>
      <div class="main-column">
        <label for="gender">Gender</label>
        <div>
          <select name="gender" id="gender" disabled>
            <option value="">Select</option>
            <option value="M" <?php if ($child != null && $child['gender'] == 'M') {echo 'Selected';}?>>Male</option>
            <option value="F" <?php if ($child != null && $child['gender'] == 'F') echo 'Selected';?>>Female</option>
          </select>
        </div>
      </div>
      <div class="main-column">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" value="<?php if ($child != null) { echo $child['dob'];} ?>" readonly>
      </div>
    </div>
    <div class="main-row">
      <div class="main-column">
        <label for="village">Village</label>
        <input type="text" name="village" id="village" value="<?php if ($child != null) { echo $child['village'];} ?>" readonly>
      </div>
      <div class="main-column">
        <label for="district">District</label>
        <div>
          <select name="district" id="district" disabled>
            <option value="">Select</option>
            <option value="Muzaffarpur" <?php if ($child != null && $child['district'] == 'Muzaffarpur') echo 'Selected'; ?>>Muzaffarpur</option>
            <option value="Vaishali" <?php if ($child != null && $child['district'] == 'Vaishali') echo 'Selected'; ?>>Vaishali</option>
            <option value="Sitamarhi" <?php if ($child != null && $child['district'] == 'Sitamarhi') echo 'Selected'; ?>>Sitamarhi</option>
            <option value="Saran" <?php if ($child != null && $child['district'] == 'Saran') echo 'Selected'; ?>>Saran</option>
            <option value="Sivan" <?php if ($child != null && $child['district'] == 'Sivan') echo 'Selected'; ?>>Sivan</option>
            <option value="West champaran" <?php if ($child != null && $child['district'] == 'West champaran') echo 'Selected'; ?>>West champaran</option>
          </select>
        </div>
      </div>
      <div class="main-column">
        <label for="state">State</label>
        <div>
          <?php fetch_existing_state($child != null && $child['state']); ?>
        </div>
      </div>
    </div>
    <div class="main-row">
      <div class="main-column">
        <label for="pincode">Pincode</label>
        <input type="text" name="pincode" id="pincode" value="<?php if ($child != null) { echo $child['pincode'];} ?>" readonly>
      </div>
      <div class="main-column">
        <label for="contact_no">Contact No</label>
        <input type="text" name="contact_no" id="contact_no" value="<?php if ($child != null) { echo $child['contact_no'];} ?>" readonly>
      </div>
      <div class="main-column">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php if ($child != null) { echo $child['email'];} ?>" readonly>
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