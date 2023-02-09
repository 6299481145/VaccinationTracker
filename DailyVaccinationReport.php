<?php
$child_id= null;
$vaccine_id= null;

include 'Utility.php';
require_once "./VaccinationCommon.php";
function vaccine_names ($appointment_id) {
    $vaccination = vaccination_common::search_vaccination($appointment_id);
    $vids = vaccination_common::fetch_vaccine_ids($vaccination['v_id']);
    $vaccine_name = null;
    foreach ($vids as $vid) {
        $vaccine_name .= vaccination_common::fetch_vaccine_name($vid[0]) . ", ";
    }
    return $vaccine_name;
}
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
        <h3>Daily Vaccination Report</h3>
    </div>
    <table id="child">
        <thead>
            <tr>
                <th>Child Id</th>
                <th>Child Name</th>
                <th>Vaccination Date</th>
                <th>Vaccination Time</th>
                <th>Vaccine Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'Connect.php';
            $sql = "SELECT * FROM vaccination WHERE actual_date=CURDATE()"; //here $sql is of string type 
            $result = $con->query($sql);  //here $result is of type mysqli_result
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?= $row['child_id'] ?></td>
                        <td> <?= vaccination_common::fetch_child_name($row['child_id']);?></td>
                        <td><?= $row['actual_date'] ?></td>
                        <td><?= $row['actual_time'] ?></td>
                        <td> <?= vaccine_names($row['appointment_id']); ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>