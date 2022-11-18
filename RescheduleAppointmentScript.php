<?php
include 'Connect.php';
include 'Utility.php';
session_start();
//$child_id = $_POST['child_id'];

$vaccination_date = $_POST['appointment_date'];
$vaccination_time = $_POST['appointment_time'];

if (isset($_POST['submit'])) {
  $sql = "UPDATE appointment SET appointment_date='$vaccination_date',appointment_time='$vaccination_time' WHERE appointment_id='$appointment_id'";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
  
  if ($con->query($sql) == true) {
    echo "Appointment reschedule  Successfully!";
  } else {
    echo $con->error;
  }
}
