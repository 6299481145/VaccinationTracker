<?php
// namespace vaccination_tracker;

class appointment_common
{
    static function next_vaccination($child_id)
    {
        require_once "./Connect.php";
        $conn = new mysqli('localhost','neha','Neha@629','vaccination_tracker');
        $sql = "SELECT vaccine_id FROM vaccination WHERE child_id='$child_id'";
        $result = $conn->query($sql);
        if($result->num_rows>0) {

        } else {
            return "Child not yet vaccinated!";
        }
    }

    static function already_given()
    {

    }
}