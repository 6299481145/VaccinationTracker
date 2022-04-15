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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div class="navbar">
      <div class="dropdown">
        <button class="dropbtn">
          Children
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="New_Child.php">Register Child</a>
          <a href="Edit_Child.php">Edit Child Record</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">
          Appointment
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="New_Appointment.php">New Appointment</a>
          <a href="Reschedule_Appointment.php">Reschedule Appointment</a>
          <a href="Cancel_Appointment.php">Cancel Appointment</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">
          Vaccination
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="Book_Vaccine.php">Book Vaccine</a>
          <a href="Reschedule_Vaccine.php">Reschedule Vaccine </a>
          <a href="Cancel_Vaccine.php">Cancel vaccine </a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">
          Payments
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="Online_Payment.php">Online Payment</a>
          <a href="Cash_Payment.php">Cash Payment</a>
          <a href="Daily_Banking.php">Daily Banking</a>
        </div>
      </div>

      <a href="Logout.php">Logout</a>
    </div>
  </body>
</html>
