<?php
$user_id = $_POST['user_id'];
$password = $_POST['password'];

include 'Connect.php';

$sql = "SELECT * FROM user WHERE user_id='$user_id' AND password='$password'";

$result = $con->query($sql);

if($result->num_rows>0) {
    echo "<script>window.location.href='Home.php'</script>";
} else {
    echo "Login failed!";
}

$con->close();