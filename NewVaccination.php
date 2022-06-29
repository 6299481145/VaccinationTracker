<?php
include_once 'Connect.php';
include_once 'Utility.php';

$appointment_id = $_GET['aid'];

$sql = "SELECT * FROM appointment WHERE appointment_id='$appointment_id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {

  $row = $result->fetch_assoc();
  $child_id = $row['child_id'];

  $vaccination_date = $row['vaccination_date'];
  $vaccination_time = $row['vaccination_time'];
  $sql = "SELECT * FROM child WHERE child_id='$child_id'";
  $result_child = $con->query($sql);
  if ($result_child->num_rows > 0) {
    $row_child = $result_child->fetch_assoc();
    $first_name = $row_child['first_name'];
    $middle_name = $Irow_child['middle_name'];
    $last_name = $row_child['last_name'];
    $parents_name = $row_child['parents_name'];
    $gender = $row_child['gender'];
    $dob = $row_child['dob'];
    $village = $row_child['village'];
    $district = $row_child['district'];
    $state = $row_child['state'];
    $pincode = $row_child['pincode'];
    $contact_no = $row_child['contact_no'];
    $email = $row_child['email'];
  }
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
    <?php include_once "./Includes/Header.php"; ?>
  </header>
  <div class="header">
    <h2>New vaccination</h2>
  </div>

  <form action="./NewAppointmentScript.php" method="POST">

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
          <input type="text" name="gender" value="<?= $gender ?>" readonly>
        </div>
      </div>
      <div class="main-column">
        <label for="dob">Date of Birth</label>
        <input type="text" name="dob" id="dob" value="<?= $dob ?>" readonly>
      </div>
    </div>
    <hr>
    <div class="main-row">
      <div class="main-column">
        <label for="village">Village</label>
        <input type="text" name="village" id="village" value="<?= $village ?>" readonly>
      </div>
      <div class="main-column">
        <label for="district">District</label>
        <div>
          <input type="text" name="district" id="district" value="<?= $district; ?>" readonly>
        </div>
      </div>
      <div class="main-column">
        <label for="state">State</label>
        <div>
          <input type="text" name="state" id="state" value="<?= $state; ?>" readonly>
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
    <hr>
    <div class="main-row">
      <div class="main-column">
        <label for="">Appointment Date</label>
        <input type="text" id="appointment_date" name="appointment_date" value="<?= $vaccination_date ?>" readonly>
      </div>
      <div class="main-column">
        <label for="">Appointment Time</label>
        <input type="text" id="appointment_time" name="appointment_time" value="<?= $vaccination_time ?>" readonly>
      </div>
    </div>


  </form>
  <footer class="footer">
    <?php include_once './Includes/Footer.html'; ?>
  </footer>
</body>

</html>