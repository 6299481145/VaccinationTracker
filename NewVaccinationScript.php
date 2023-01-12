<?php
include 'Connect.php';

$appointment_id = $_POST['appointment_id'];

$sql = "SELECT * FROM appointment WHERE appointment_id='$appointment_id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $child_id = $row['child_id'];
}
$sql = "INSERT INTO vaccination(appointment_id, child_id, actual_date, actual_time) VALUES(?,?,CURDATE(), CURTIME())";
$stmt = $con->prepare($sql);
$stmt->bind_param("ss", $appointment_id, $child_id);
$stat = $stmt->execute();
if ($stat != false) {
    $last_id = $con->insert_id;
    foreach ($_POST['vaccine'] as $vid) {
        $sql = "INSERT INTO vaccine (v_id, vaccine_id) VALUES (?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ss", $last_id, $vid);
        $stmt->execute();
    }
    echo "Vaccination Successful!";
    echo "<br><a href='NewVaccination.php'>Click here</> to go back!";
} else {
    echo $con->error;
    
}
$stmt->close();
$con->close();
