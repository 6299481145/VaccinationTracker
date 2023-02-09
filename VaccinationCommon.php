<?php

class vaccination_common
{
    static function next_vaccination_group_id($child_id)
    {
        $conn = new mysqli('localhost', 'neha', 'Neha@629', 'vaccination_tracker');
        $sql = "SELECT vaccine_id FROM vaccination WHERE child_id='$child_id' order by vaccine_id DESC LIMIT 1";
        $result = $conn->query($sql);
        if ($result !== false && $result->num_rows > 0) {
            $row = $result->fetch_array();
            return vaccination_common::fetch_group_id($row[0]);
        } else {
            return 1;
        }
    }

    static function fetch_group_id($vaccine_id)
    {
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
    static function fetch_vaccine_name($vaccine_id)
    {
        $conn = new mysqli('localhost', 'neha', 'Neha@629', 'vaccination_tracker');
        $sql = "SELECT vaccine_name FROM vaccination_chart WHERE vaccine_id='$vaccine_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_array();
            return $row[0];
        } else {
            return -1;
        }
    }

    
    static function fetch_vaccine_price($vaccine_id)
    {
        $conn = new mysqli('localhost', 'neha', 'Neha@629', 'vaccination_tracker');
        $sql = "SELECT price FROM vaccination_chart WHERE vaccine_id='$vaccine_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_array();
            return $row[0];
        } else {
            return -1;
        }
    }
    static function fetch_child_id($appointment_id)
    {
        $conn = new mysqli('localhost', 'neha', 'Neha@629', 'vaccination_tracker');
        $sql = "SELECT child_id FROM appointment WHERE appointment_id ='$appointment_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_array();
            return $row[0];
        } else {
            return -1;
        }
    }
    static function fetch_child_name($child_id)
    {
        $conn = new mysqli('localhost', 'neha', 'Neha@629', 'vaccination_tracker');
        $sql = "SELECT first_name, middle_name, last_name FROM child WHERE child_id='$child_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name'];
        } else {
            return -1;
        }
    }

    static function fetch_child($child_id)
    {
        $conn = new mysqli('localhost', 'neha', 'Neha@629', 'vaccination_tracker');
        $sql = "SELECT * FROM child WHERE child_id='$child_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $child = $result->fetch_assoc();
            return $child;
        } else {
            return -1;
        }
    }

    static function search_appointment($appointment_id)
    {
        $conn = new mysqli('localhost', 'neha', 'Neha@629', 'vaccination_tracker');
        $sql = "SELECT * FROM appointment WHERE appointment_id='$appointment_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $appointment = $result->fetch_assoc();
            return $appointment;
        } else {
            return -1;
        }
    }

    static function search_vaccineid($v_id)
    {
        $conn = new mysqli('localhost', 'neha', 'Neha@629', 'vaccination_tracker');
        $sql = "SELECT vaccine_id FROM vaccine WHERE v_id='$v_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $vaccine_ids = $result->fetch_all(MYSQLI_ASSOC);
            return $vaccine_ids;
        } else {
            return -1;
        }
    }

    static function search_vaccination($appointment_id)
    {
        $conn = new mysqli('localhost', 'neha', 'Neha@629', 'vaccination_tracker');
        $sql = "SELECT * FROM vaccination WHERE appointment_id='$appointment_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $vaccination = $result->fetch_assoc();
            return $vaccination;
        } else {
            return -1;
        }
    }
    static function search_staff($staff_id)
    {
        $conn = new mysqli('localhost', 'neha', 'Neha@629', 'vaccination_tracker');
        $sql = "SELECT * FROM staff WHERE staff_id='$staff_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $staff = $result->fetch_assoc();
            return $staff;
        } else {
            return -1;
        }
    }
    static function search_user($user_id)
    {
        $conn = new mysqli('localhost', 'neha', 'Neha@629', 'vaccination_tracker');
        $sql = "SELECT username FROM registration WHERE user_id='$user_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_array();
            return $row[0];
        } else {
            return -1;
        }
    }
    static function get_age($d1)
    {
        $curdate = date_create(date('y-m-d'));
        $date = date_create($d1);
        $diff = date_diff($date, $curdate);
        echo $diff->format(" %y Year / %m Month/ %d Day");
    }
}
//  ----------------------Testing----------------------------------
// $vaccine_ids = vaccination_common::fetch_vaccine_ids(1);
// foreach ($vaccine_ids as $id) {
//     echo $id[0] . "\n";
// }

// $group_id = vaccination_common::fetch_group_id(24);
// echo $group_id[0][0];

// $next_group_id = vaccination_common::next_vaccination_group_id("CH001");
// echo $next_group_id;

// $vaccine_name=vaccination_common::fetch_vaccine_name(1);
// echo $vaccine_name;

// $child_name = vaccination_common::fetch_child_name('CH001');
// echo $child_name;

// $full_name = vaccination_common::fetch_child_name("CH004");
// echo $full_name;

// print_r(vaccination_common::search_vaccineid(1));

// echo vaccination_common::get_age(2022 - 12 - 01);
