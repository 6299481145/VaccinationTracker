<?php
include 'Connect.php';

// $appintment_id=$_GET['appointment_id'];
$appointment_id = $_POST['appointment_id'];
// echo "<script>alert('$appointment_id')</script>";
// $vaccine_id=$_POST['vaccine_id'];
// $child_id=$_POST['child_id'];
// $actual_date=$_POST['actual_date'];
// $due_date=$_POST['due_date'];

// $appintment_id = "A008";
// $vaccine_id=$_POST['vaccine_id'];
// $child_id = "CH005";
// $actual_date=$_POST['actual_date'];

$sql = "SELECT * FROM appointment WHERE appointment_id='$appointment_id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {

  $row = $result->fetch_assoc();
  $child_id = $row['child_id'];
}
$sql = "INSERT INTO vaccination(appointment_id, child_id, actual_date) VALUES(?,?,CURDATE())";
$stmt = $con->prepare($sql);
$stmt->bind_param("ss", $appointment_id, $child_id);
$stat = $stmt->execute();
if ($stat != false) {
    $last_id = $con->insert_id;
    // echo $last_id;
    foreach ($_POST['vaccine'] as $vid) {
        // echo $vid;
        $sql = "INSERT INTO vaccine (v_id, vaccine_id) VALUES (?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ss", $last_id, $vid);
        $stmt->execute();
    }
    echo "Vaccination Successfull!";
    // echo "<br> Vaccination Id is $vid";
    echo "<br><a href='NewVaccination.php'>Click here</> to go back!";
} else {
    echo $con->error;
}
$stmt->close();
$con->close();
