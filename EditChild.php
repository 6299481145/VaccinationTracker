<?php
global $first_name, $middle_name, $last_name, $parents_name, $gender,
  $dob, $village, $district, $state, $pincode, $contact_no, $email;
$child_id = null;
if (isset($_POST['search'])) {
  $child_id = $_POST['child_id'];
}
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

  <link rel="shortcut icon" href="Image/vac.png" type="image/x-icon">
  <title>VAT 1.0</title>
</head>

<body>
  <header>
    <?php include('Includes/Header.php'); ?>
  </header>
  <div class="header">
    <h3>Edit Child</h3>
  </div>
  <form action="" method="POST">
    <div class="main-row">
      <div class="main-column">
        <label for="child_id">Child Id / Parent's Name</label>
      </div>
    </div>
    <input type="text" placeholder="Search.." name="child_id" id="child_id" value="<?= $child_id ?>"><button name="search"><i class="fa fa-search"></i></button>
  </form>
  <form action="EditChildScript.php" method="POST">
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
            <option value="M" <?php if ($gender == 'M') echo 'Selected'; ?>>Male</option>
            <option value="F" <?php if ($gender == 'F') echo 'Selected'; ?>>Female</option>
          </select>
        </div>
      </div> `
      <div class="main-column">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" value="<?= $dob ?>">
      </div>
    </div>
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
        <input type="text" name="pincode" id="pincode" value="<?= $pincode ?>">
      </div>
      <div class="main-column">
        <label for="contact_no">Contact No</label>
        <input type="number" name="contact_no" id="contact_no" value="<?= $contact_no ?>">
      </div>
      <div class="main-column">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $email ?>">
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