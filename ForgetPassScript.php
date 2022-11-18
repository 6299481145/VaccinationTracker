<?php
include 'Connect.php';
$user_id = $_POST['user_id'];
$password = $_POST['password'];
if (isset($_POST['submit'])) {
    session_start();
    $_SESSION['user_id'] = $row['user_id'];
    $sql = "UPDATE regirtration SET password='$password' WHERE user_id='$user_id'";
    if ($con->query($sql) == true) {
        echo "Password reset Successfully!";
        echo "<br><a href='Login.php'>Click here</> to go back!";
    } else {
      echo $con->error;
    }
}
$con->close();