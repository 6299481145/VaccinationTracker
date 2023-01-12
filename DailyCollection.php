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
        <h3>Daily Collection</h3>
    </div>
    <table id="child">
        <thead>
            <tr>
                <th>Appointment Id</th>
                <th>Date</th>
                <th>Time</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'Connect.php';
            $total = 0;
            $sql = "SELECT * FROM payment WHERE date=CURDATE()";     //here $sql is of string type 
            $result = $con->query($sql);          //here $result is of type mysqli_result
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?= $row['appointment_id'] ?></td>
                        <td><?= $row['date'] ?></td>
                        <td><?= $row['time'] ?></td>
                        <td><?= $row['total_amount'] ?></td>
                    </tr>
            <?php
                    $total = $total + $row['total_amount'];
                }
            }
            ?>
            <tr>
                <td></td>
                <td></td>
                <td>Total Amount :- </td>
                <td><?= $total ?></td>
                
            </tr>
        </tbody>
    </table>
</body>

</html>