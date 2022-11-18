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
        <?php
        include('Includes/Header.php');
        ?>
    </header>
    <div class="header">
        <h4>Child list</h4>
    </div>
    <table id="child">
        <thead>
            <tr>
                <th>Child Id</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Parents Name</th>
                <th>Gender</th>
                <th>Date Of Birth</th>
                <th>Village</th>
                <th>District</th>
                <th>State</th>
                <th>Pincode</th>
                <th>Contact No</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'Connect.php';
            $sql = "SELECT * FROM child";     //here $sql is of string type
            $result = $con->query($sql);          //here $result is of type mysqli_result
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?= $row['child_id'] ?></td>
                        <td><?= $row['first_name'] ?></td>
                        <td><?= $row['middle_name'] ?></td>
                        <td><?= $row['last_name'] ?></td>
                        <td><?= $row['parents_name'] ?></td>
                        <td><?= $row['gender'] ?></td>
                        <td><?= $row['dob'] ?></td>
                        <td><?= $row['village'] ?></td>
                        <td><?= $row['district'] ?></td>
                        <td><?= $row['state'] ?></td>
                        <td><?= $row['pincode'] ?></td>
                        <td><?= $row['contact_no'] ?></td>
                        <td><?= $row['email'] ?></td>
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


</body>


</html>