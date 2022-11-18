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
        <h4>Today's Vaccine </h4>
    </div>

    <table id="child">
        <thead>
            <tr>
                <th>Appointment Id</th>
                <th>Child Id</th>
                <th>Date</th>
                <th>Time</th>
                <th>Vaccination Date</th>
                <th>Vaccination Time</th>
                <th>Check By</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'Connect.php';
            // $date=$_GET['date'];
            // echo $date;
            $sql = "SELECT * FROM appointment WHERE vaccination_date=CURDATE()";     //here $sql is of string type 
            $result = $con->query($sql);          //here $result is of type mysqli_result
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><a href="./NewVaccination.php?aid=<?= $row['appointment_id'] ?>"><?= $row['appointment_id'] ?></a></td>
                        <td><?= $row['child_id'] ?></td>
                        <td><?= $row['date'] ?></td>
                        <td><?= $row['time'] ?></td>
                        <td><?= $row['vaccination_date'] ?></td>
                        <td><?= $row['vaccination_time'] ?></td>
                        <td><?= $row['user_id'] ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>

    <footer class="footer">
        <?php include('Includes/Footer.html'); ?>
    </footer>
    <script>
		$(document).foundation();
	</script>
</body>

</html>