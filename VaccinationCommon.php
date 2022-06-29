<?php
class vaccination_common
{
    static function next_vaccination_group_id($child_id)
    {
        require_once "./Connect.php";
        $conn = new mysqli('localhost', 'neha', 'Neha@629', 'vaccination_tracker');
        $sql = "SELECT vaccine_id FROM vaccination WHERE child_id='$child_id' order by vaccine_id DESC LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_array();
            return vaccination_common::fetch_group_id($row[0]);
        } else {
            return 1;
        }
    }

    static function fetch_group_id($vaccine_id)
    {
        require_once "./Connect.php";
        $conn = new mysqli('localhost', 'neha', 'Neha@629', 'vaccination_tracker');
        $sql = "SELECT group_id FROM vaccination_chart WHERE vaccine_id='$vaccine_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_array();
            return $row[0];
        } else {
            return -1;
        }
    }

    static function fetch_vaccine_ids($group_id)
    {
        require_once "./Connect.php";
        $conn = new mysqli('localhost', 'neha', 'Neha@629', 'vaccination_tracker');
        $sql = "SELECT vaccine_id FROM vaccination_chart WHERE group_id='$group_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_all();
            return $row;
        } else {
            return -1;
        }
    }
}


//  ---- Testing
// $vaccine_ids = vaccination_common::fetch_vaccine_ids(7);
// foreach ($vaccine_ids as $id) {
//     echo $id[0] . "\n";
// }
