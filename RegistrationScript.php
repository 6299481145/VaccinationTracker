<?php
include 'Connect.php';
include 'Utility.php';

$user_id = USERID::generateuser_id();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$type = $_POST['type'];

$sql = "INSERT INTO registration VALUES(?,?,?,?,?)";
$stmt = $con->prepare($sql); 
$stmt->bind_param("sssss", $user_id,$username,$email,$password,$type);
$stat = $stmt->execute();

if($stat != false) {
    echo "You are successfully registered!";
    echo "<br><a href='Login.php'>Click here</> to go back!";
} else {
    echo $con->error;
}
$stmt->close();
$con->close();