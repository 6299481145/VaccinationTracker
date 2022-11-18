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
         <h4>Child Vaccination Chart</h4>
</div>

<table id="child">
        <thead>
            <tr>
                <th>Vaccine Id</th>
                <th>Vaccine Name</th>
                <th>Prevents</th>
                <th>Minimum age for dose </th>   
                <th>Units</th>                                                                                                                                                                                                                                                           </th>
               
                
            </tr>
        </thead>
        <tbody>
            <?php
            include 'Connect.php';
            $sql = "SELECT * FROM vaccination_chart";     //here $sql is of string type
            $result = $con->query($sql);          //here $result is of type mysqli_result
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?= $row['vaccine_id'] ?></td>
                        <td><?= $row['vaccine_name'] ?></td>
                        <td><?= $row['prevents'] ?></td>
                        <td><?= $row['minimum_age'] ?></td>
                        <td><?= $row['units'] ?></td>
                        
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