<?php
$child_id = $_POST['child_id'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$parents_name = $_POST['famo_name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$village = $_POST['village'];
$district = $_POST['district'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];

include 'Connect.php';

// if (isset($_POST['submit'])) {
//   require "Utility.php";
//   $header = "Verifying Session!";
//   $body = "Data Update Successfully!";
//   message::show_modal($header, $body);
// }

if (isset($_POST['submit'])) {

  $sql = "UPDATE child SET first_name='$first_name', middle_name='$middle_name',last_name='$last_name', parents_name='$parents_name', gender='$gender',dob='$dob',village='$village',district='$district',state='$state', pincode='$pincode',contact_no='$contact_no',email='$email' WHERE child_id='$child_id'";
  if ($con->query($sql) == true) {

   echo "Data Updated Successfully!";
  
  } else {
    echo $con->error;
  }
} elseif (isset($_POST['delete'])) {
  $sql = "DELETE FROM child WHERE child_id='$child_id'";
  if ($con->query($sql) == true) {
    echo "Data Delete Successfully!";
  } else {
    echo $con->error;
  }
}
