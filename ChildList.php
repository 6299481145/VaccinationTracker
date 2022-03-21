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
           include('Includes/Header.html');
        ?>
</header>
<div class="header">
         <h2>Child list</h2>
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
    </table>

<footer class="footer">
    <?php include('Includes/Footer.html'); ?>
</footer>


</body>

  
</html>