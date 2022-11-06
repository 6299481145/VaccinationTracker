<?php
$username = $_POST['username'];
$password = $_POST['password'];
$type = $_POST['type'];

include 'Connect.php';

$sql = "SELECT * FROM registration WHERE username  = ? AND password = ? ";
$stmt = $con->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['user_id'] = $row['user_id'];
    if ($row['type'] == "Staff") {
        header("Location:StaffDashboard.php");
    } elseif ($row['type'] == "Parent") {
        header("Location:ParentDashboard.php");
    } else
        echo "Invalid user";
}
$stmt->close();
$con->close();
