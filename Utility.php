<?php

global $state,$count;

class Utility
{
  public static function js_alert($message)
  {
    echo "<script>alert('$message')</script>";
  }

  public static function generate_id()
  {
    include 'Connect.php';
    $sql = "SELECT child_id from child ORDER BY child_id DESC LIMIT 1";
    $result = $con->query($sql);
    $child_id = null;
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $child_id = $row['child_id'];
      $child_id = substr($child_id, 2);
      $child_id = $child_id + 1;
      if ($child_id < 10)
        $child_id = "CH00$child_id";
      elseif ($child_id < 100)
        $child_id = "CH0$child_id";
      elseif ($child_id < 1000)
        $child_id =  "CH$child_id";
    } else {
      $child_id = 'CH001';
    }

    return $child_id;
    $con->close();
  }
}

class ID
{
  public static function generatestaff_id()
  {
    include 'Connect.php';
    $sql = "SELECT staff_id from staff ORDER BY staff_id DESC LIMIT 1";
    $result = $con->query($sql);
    $staff_id = null;
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $staff_id = $row['staff_id'];
      $staff_id = substr($staff_id, 2);
      $staff_id = $staff_id + 1;
      if ($staff_id < 10)
        $staff_id = "ST00$staff_id";
      elseif ($staff_id < 100)
        $staff_id = "ST0$staff_id";
      elseif ($staff_id < 1000)
        $staff_id =  "ST$staff_id";
    } else {
      $staff_id = 'ST001';
    }

    return $staff_id;
    $con->close();
  }
}
class USERID
{
  public static function generateuser_id()
  {
    include 'Connect.php';
    $sql = "SELECT user_id from registration ORDER BY user_id DESC LIMIT 1";
    $result = $con->query($sql);
    $user_id = null;
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $user_id = $row['user_id'];
      $user_id = substr($user_id, 1);
      $user_id = $user_id + 1;
      if ($user_id < 10)
        $user_id = "U00$user_id";
      elseif ($user_id < 100)
        $user_id = "U0$user_id";
      elseif ($user_id < 1000)
        $user_id =  "U$user_id";
    } else {
      $user_id = 'U001';
    }

    return $user_id;
    $con->close();
  }
}
class APPOINTMENTID
{
  public static function generateappointment_id()
  {
    include 'Connect.php';
    $sql = "SELECT appointment_id from appointment ORDER BY appointment_id DESC LIMIT 1";
    $result = $con->query($sql);
    $appointment_id = null;
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $appointment_id = $row['appointment_id'];
      $appointment_id = substr($appointment_id, 1);
      $appointment_id = $appointment_id + 1;
      if ($appointment_id < 10)
        $appointment_id = "A00$appointment_id";
      elseif ($appointment_id < 100)
        $appointment_id = "A0$appointment_id";
      elseif ($appointment_id < 1000)
        $appointment_id =  "A$appointment_id";
    } else {
      $appointment_id = 'A001';
    }

    return $appointment_id;
    $con->close();
  }
}


// function fetch_state()
// {
//   include 'Connect.php';
//   $sql = "SELECT state FROM state";
//   $result = $con->query($sql);
//   echo '<select name="state" id="state">';
//   while ($row = $result->fetch_array()) {
//     $state = $row[0];
//     echo '<option value="' . $state . '">' . $state . '</option>';
//   }
//   echo '</select>';
//   $con->close();
// }
function fetch_existing_state($p_state)
{
  include 'Connect.php';
  $sql = "SELECT state FROM state";
  $result = $con->query($sql);
  echo '<select name ="state" id="state">';
  while ($row = $result->fetch_array()) {
    $state = $row[0];

    if ($state == $p_state)
      echo  '<option value="' . $state . '" selected>' . $state . '</option>';
    else
      echo  '<option value="' . $state . '">' . $state . '</option>';
  }
  echo '</select>';
  $con->close();
}
function count_register_child()
{
  require_once 'Connect.php';
  $count=0;
  $sql = "SELECT COUNT('child_id') FROM child";
  $result = $con->query($sql);
  if ($result->num_rows > 0)  {
    $row = $result->fetch_array();
    $count = $row[0];
    $con->close();
   echo "$count";
  }
}
class message
{
  public static function show_modal($header, $body)
  {
    echo '<div class="modal" id="modal">
        <div class="modal-header">
            <span>' . $header . '</span>
        </div>
        <div class="modal-body">
            <span>' . $body . '</span>
        </div>
        <div class="modal-footer">
            <button type="button" onclick="hideModal()">OK</button>
        </div>
    </div>
    <script>
        const modal = document.getElementById("modal")
        function showModal() {
            modal.style.display = "block";
        }
        function hideModal() {
            modal.style.display = "none";
        }
    </script>';
  }
}