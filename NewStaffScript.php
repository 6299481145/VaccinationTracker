<?php
include 'Connect.php';
include 'Utility.php';

$staff_id = ID::generatestaff_id();
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$village = $_POST['village'];
$district = $_POST['district'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];

$sql = "INSERT INTO staff VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $con->prepare($sql);
$stmt->bind_param("ssssssssssss", $staff_id, $first_name, $middle_name, $last_name, $gender, $dob, $village, $district, $state, $pincode, $contact_no, $email);
$stat = $stmt->execute();

if ($stat != false) {
    echo "Data Inserted Successfully!";
    echo "<br> Staff Id is $staff_id";
    echo "<br><a href='NewStaff.php'>Click here</> to go back!";
} else {
    echo $con->error;
}
$stmt->close();
$con->close();
