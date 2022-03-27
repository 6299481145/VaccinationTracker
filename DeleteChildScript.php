<?php
$child_id = $_POST['child_id'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name= $_POST['last_name'];
$parents_name = $_POST['famo_name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$village=$_POST['village'];
$district=$_POST['district'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$contact_no=$_POST['contact_no'];
$email=$_POST['email'];

include 'Connect.php';
$sql = "DELETE FROM child WHERE child_id='$child_id'";
if($con->query($sql)==true) {
    
   echo "Data Delete Successfully!";
 } else {
     echo $con->error;
}
