<?php
$user_id = $_POST['user_id'];
$password = $_POST['password'];

include 'Connect.php';

//$sql = "SELECT * FROM user WHERE user_id='$user_id' AND password='$password'";
$sql = "SELECT * FROM user WHERE user_id = ? AND password = ?";
//$result = $con->query($sql);
$stmt = $con->prepare($sql); 
$stmt->bind_param("ss", $user_id,$password);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows>0) {
    echo "<script>window.location.href='Home.php'</script>";
} else {
    echo "Login failed!";
}
$stmt->close();
$con->close();