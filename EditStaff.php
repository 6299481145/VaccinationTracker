<?php
include 'VaccinationCommon.php';
include 'Utility.php';

$staff_id = null;
$staff = null;

if (isset($_POST['search'])) {
  $staff_id = $_POST['staff_id'];
  $staff = vaccination_common::search_staff($staff_id);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="Image/vac.png" type="image/x-icon">
  <title>VAT 1.0</title>
</head>

<body>
  <header>
    <?php include('Includes/Header.php'); ?>
  </header>
  <div class="header">
    <h3>Edit Staff</h3>
  </div>
  <form action="" method="POST">
    <div class="main-row">
      <div class="main-column">
        <label for="staff_id">Staff Id </label>
      </div>
    </div>
    <div>
      <input type="text" placeholder="Search.." name="staff_id" id="staff_id" value="<?php if ($staff != null) { echo $staff['staff_id'];} ?>"><button name="search"><i class="fa fa-search"></i></button>
    </div>
  </form>
  <form action="EditStaffScript.php" method="POST">
    <input type="hidden" name="staff_id" id="staff_id" value="<?php if ($staff != null) { echo $staff['staff_id'];} ?>">
    <div class="main-row">
      <div class="main-column">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" value="<?php if ($staff != null) { echo $staff['first_name'];} ?>">
      </div>
      <div class="main-column">
        <label for="middle_name">Middle Name</label>
        <input type="text" name="middle_name" id="middle_name" value="<?php if ($staff != null) { echo $staff['middle_name'];} ?>">
      </div>
      <div class="main-column">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" value="<?php if ($staff != null) { echo $staff['last_name'];} ?>">
      </div>
    </div>
    <div class="main-row">
      <div class="main-column">
        <label for="gender">Gender</label>
        <div>
          <select name="gender" id="gender">
            <option value="">Select</option>
            <option value="M" <?php if ($staff != null && $staff['gender'] == 'M') echo 'Selected'; ?>>Male</option>
            <option value="F" <?php if ($staff != null && $staff['gender'] == 'F') echo 'Selected'; ?>>Female</option>
          </select>
        </div>
      </div>
      <div class="main-column">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" value="<?php if ($staff != null) { echo $staff['dob'];} ?>">
      </div>
    </div>
    </div>
    <div class="main-row">
      <div class="main-column">
        <label for="village">Village</label>
        <input type="text" name="village" id="village" value="<?php if ($staff != null) { echo $staff['village'];} ?>">
      </div>
      <div class="main-column">
        <label for="district">District</label>
        <div>
          <select name="district" id="district">
          <option value="Muzaffarpur" <?php if ($staff != null && $staff['district'] == 'Muzaffarpur') echo 'Selected'; ?>>Muzaffarpur</option>
          <option value="Vaishali" <?php if ($staff != null && $staff['district'] == 'Vaishali') echo 'Selected'; ?>>Vaishali</option>
          <option value="Sitamarhi" <?php if ($staff != null && $staff['district'] == 'Sitamarhi') echo 'Selected'; ?>>Sitamarhi</option>
          <option value="Saran" <?php if ($staff != null && $staff['district'] == 'Saran') echo 'Selected'; ?>>Saran</option>
          <option value="Sivan" <?php if ($staff != null && $staff['district'] == 'Sivan') echo 'Selected'; ?>>Sivan</option>
          <option value="West champaran" <?php if ($staff != null && $staff['district'] == 'West champaran') echo 'Selected'; ?>>West champaran</option>
          </select>
        </div>
      </div>
      <div class="main-column">
        <label for="state">State</label>
        <div>
          <?php fetch_existing_state($staff != null && $staff['state']); ?>
        </div>
      </div>
    </div>
    <div class="main-row">
      <div class="main-column">
        <label for="pincode">Pincode</label>
        <input type="text" name="pincode" id="pincode" value="<?php if ($staff != null) { echo $staff['pincode'];} ?>">
      </div>
      <div class="main-column">
        <label for="contact_no">Contact No</label>
        <input type="text" name="contact_no" id="contact_no" value="<?php if ($staff != null) { echo $staff['contact_no'];} ?>">
      </div>
      <div class="main-column">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php if ($staff != null) { echo $staff['email'];} ?>">
      </div>
    </div>
    <button type="submit" name="submit">Submit</button>
    <button name="delete">Delete</button>
  </form>
  <footer class="footer">
    <?php include('Includes/Footer.html'); ?>
  </footer>
</body>

</html>