<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location:SessionExpired.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Header</title>
  <link rel="stylesheet" href="design.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <div class="navbar">
    <a href="Home.php"> <i class="fa fa-home"></i></a>
    <div class="dropdown">
      <button class="dropbtn">
        Children
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="NewChild.php">Register Child</a>
        <a href="EditChild.php">Edit Child Record</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">
        Appointment
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="NewAppointment.php">New Appointment</a>
        <a href="RescheduleAppointment.php">Reschedule Appointment</a>
        <a href="CancelAppointment.php">Cancel Appointment</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">
        Vaccination
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="BookVaccine.php">Vaccination</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">
        Staff
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="NewStaff.php">Register Staff</a>
        <a href="EditStaff.php">Edit Staff Record</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">
        Payments
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="OnlinePayment.php">Online Payment</a>
        <a href="CashPayment.php">Cash Payment</a>
        <a href="DailyBanking.php">Daily Banking</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">
        Reports
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="ChildVaccinationChart.php">Child Vaccination Chart</a>
        <a href="AppointmentList.php">Appointment List</a>
        <a href="DailyVaccinationReport.php">Daily Vaccination Report</a>
        <a href="ChildList.php">Register Child List</a>
        <a href="DailyCollection.php">Daily Collection</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">
        <?= $_SESSION['username']; ?>
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="">Profile</a>
        <a href="Logout.php">Logout</a>
      </div>
    </div>
  </div>
</body>

</html>