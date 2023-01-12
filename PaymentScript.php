<?php
include 'Connect.php';
include 'Utility.php';
$appointment_id = $_POST['aid'];
$total_amount = $_POST['total'];
$sql = "INSERT INTO payment(appointment_id, total_amount,date,time,mode) VALUES(?,?,CURDATE(),CURTIME(),'Cash')";
$stmt = $con->prepare($sql);
$stmt->bind_param("ss",$appointment_id, $total_amount);
$stat = $stmt->execute();

if ($stat != false) {
    header("location:Receipt.php?aid=$appointment_id");
} else {
    echo $con->error;
}
$stmt->close();
$con->close();