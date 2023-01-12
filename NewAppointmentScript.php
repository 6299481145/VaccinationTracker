<?php
include 'Connect.php';
include 'Utility.php';
session_start();
$appointment_id = APPOINTMENTID::generateappointment_id();
$child_id = $_POST['child_id'];
$date=$_POST['appointment_date'];
$time=$_POST['appointment_time'];
$user_id = $_SESSION['user_id'];
// echo $vaccination_date . "<br>";
// echo $vaccination_time . "<br>";
$sql = "INSERT INTO appointment (appointment_id, child_id, date, time, appointment_date, appointment_time, user_id, status) VALUES(?,?,CURDATE(),CURTIME(),?,?,?,'N')";
$stmt = $con->prepare($sql);
$stmt->bind_param("sssss", $appointment_id, $child_id, $date,$time,$user_id);
$stat = $stmt->execute();
if ($stat != false) {
    echo "Appointment Book Successfully!";
    echo "<br> Appointment Id is $appointment_id";
    // echo "<br><a href='NewAppointment.php'>Click here</> to go back!";
} else {
    echo $con->error;
}
$stmt->close();
$con->close();
