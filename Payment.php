<?php
global $child_id, $vaccine_id;

include 'Utility.php';
require_once "./VaccinationCommon.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <link rel="shortcut icon" href="Image/vac.png" type="image/x-icon">
    <title>VAT 1.0</title>
</head>

<body>

    <header>
        <?php include('Includes/Header.php'); ?>
    </header>
    <div class="header">
        <h3>Payment</h3>
    </div>
    <table id="child">
        <thead>
            <tr>
                <th>Appointment Id</th>
                <th>Child Name</th>
                <th>Vaccination Date</th>
                <th>Vaccination Time</th>
                <th>Vaccine Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'Connect.php';
            $sql = "SELECT * FROM vaccination WHERE appointment_id='A006'";     //here $sql is of string type actual_date=CURDATE()
            $result = $con->query($sql);          //here $result is of type mysqli_result
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><a href="./Bill.php?aid=<?= $row['appointment_id'] ?>"><?= $row['appointment_id'] ?></a></td>
                        <td> <?= vaccination_common::fetch_child_name($row['child_id']); ?></td>
                        <td><?= $row['actual_date'] ?></td>
                        <td><?= $row['actual_time'] ?></td>
                        <td> <?= vaccination_common::search_vaccineid(json_encode($row['v_id'])); ?></td>

                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>