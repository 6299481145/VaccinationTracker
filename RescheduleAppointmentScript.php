<?php
include 'Connect.php';
include 'Utility.php';

$appointment_id = $_POST['appointment_id'];
$date = $_POST['appointment_date'];
$time = $_POST['appointment_time'];

if (isset($_POST['submit'])) {
 
  $sql = "UPDATE appointment SET date='$date', time='$time',status='R' WHERE appointment_id='$appointment_id'";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
  
if ($con->query($sql) == true) {
    echo "Appointment reschedule Successfully!";
  } else {
    echo $con->error;
  }
}