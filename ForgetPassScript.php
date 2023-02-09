<?php
include 'Connect.php';

$email=$_POST['email'];
$password = $_POST['password'];
    $sql = "UPDATE registration SET password='$password' WHERE email='$email'";
    if ($con->query($sql) == true) {
        echo "Password reset successfully!";
        echo "<br><a href='Login.php'>Click here</> to go back!";
    } else {
      echo $con->error;
    }
$con->close();