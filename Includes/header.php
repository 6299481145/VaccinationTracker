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
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="shortcut icon" href="Image/vac.png" type="image/x-icon">
  <!-- Compressed CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css" />
	<!-- Compressed JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js">
	</script>
</head>

<body>
<div data-sticky-container >
		<div data-sticky>
  <div class="navbar" id="mynavbar">
    <a href="StaffDashboard.php"class="active"><b>VAT</b></a>
   
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
        <a href="Payment.php">Payment</a>
 
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
     <a href="javascript:void(0);" class="icon" onclick="navfun()">&#9776;</a>
     <div class="navbar-right">
    <a href="Logout.php">Logout</a>
    </div>
    </div>
    

  </div>
  </div>
    </div>
  <script>
function navfun() {
  var x = document.getElementById("mynavbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>

</body>

</html>