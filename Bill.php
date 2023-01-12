<?php
include 'VaccinationCommon.php';

$appointment_id = $_GET['aid'];
$appointment = vaccination_common::search_appointment($appointment_id);
$child = vaccination_common::fetch_child($appointment['child_id']);
$vaccination = vaccination_common::search_vaccination($appointment_id);
$vaccine_ids = vaccination_common::search_vaccineid($vaccination['v_id']);

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
        <?php include('Includes/header.php'); ?>
    </header>
    <div class="header">
        <h3>BILL</h3>
    </div>
    <form action="./PaymentScript.php" method="POST">
        <input type="hidden" name="aid" value="<?= $appointment_id ?>">
        <div class="main-row">
            <div class="column">
                <label for="">Child Name :- <?= $child['first_name'] . " " . $child['middle_name'] . " " . $child['last_name'] ?></label>
            </div>
            <div class="column">
                <label for="">Date :- <?= $vaccination['actual_date'] ?></label><br>
            </div>
        </div>
        <div class="main-row">
            <div class="column">
                <label for="">Parent's Name :- <?= $child['parents_name'] ?></label>
            </div>
            <div class="column">
                <label for="">Time :- <?= $vaccination['actual_time'] ?></label><br>
            </div>
        </div>
        <div class="main-row">
            <div class="column">
                <label for="">Address :- <?= $child['village'] ?></label>
            </div>
            <div class="column">
                <label for="">Age :- <?php echo vaccination_common::get_age($child['dob']); ?></label>
            </div>
        </div>
        <div class="main-row">
            <div class="column">
                <label for="">Contact No :- <?= $child['contact_no'] ?> </label>
            </div>
            <div class="column">
                <label for="">Gender :- <?= $child['gender'] ?></label>
            </div>
        </div>
        <table id="child">
            <thead>
                <tr>
                    <th>SI No.</th>
                    <th>Vaccine Name</th>
                    <th>Charge</th>
                    <th>Unit</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $total = 0;
                foreach ($vaccine_ids as $vaccine_id) {
                ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= vaccination_common::fetch_vaccine_name($vaccine_id['vaccine_id']) ?></td>
                        <td><?= vaccination_common::fetch_vaccine_price($vaccine_id['vaccine_id']) ?></td>
                        <td>1</td>
                        <td><?= vaccination_common::fetch_vaccine_price($vaccine_id['vaccine_id']) ?></td>
                    </tr>
                <?php
                    $total = $total + vaccination_common::fetch_vaccine_price($vaccine_id['vaccine_id']);
                    $i++;
                }
                ?>
                <input type="hidden" name="total" id="total" value="<?= $total ?>">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total Amount :-</td>
                    <td><?= $total ?></td>
                </tr>
            </tbody>
        </table>
        <button>Submit</button>
    </form>
</body>

</html>