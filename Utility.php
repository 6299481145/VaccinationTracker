<?php
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

function fetch_state()
{
  include 'Connect.php';
  $sql = "SELECT state FROM state";
  $result = $con->query($sql);
  echo '<select name="state" id="state">';
  while ($row = $result->fetch_array()) {
    $state = $row[0];
    echo '<option value="' . $state . '">' . $state . '</option>';
  }
  echo '</select>';
  $con->close();
}
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
echo $p_state;
