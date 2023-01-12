<?php
include 'Utility.php';
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

  <div class="cards">
    <div class="card" style=' background-color: rgb(211, 249, 236);border-radius: 10px'>
      <i class="fa fa-registration" style='font-size:30px; color:lightcyne'></i>
      <div>CHILD REGISTRATIONS</div>
      <?php
      today_register_child($count)
      ?>

    </div>
    <div class="card" style=' background-color: rgb(245, 230, 224);border-radius: 10px'>
      <i class="fa fa-use" style='font-size:30px; color:lightseagreen'></i>
      <div>APPOINTMENTS</div>
      <?php
      count_today_appointment($count)
      ?>
    </div>
    <div class="card" style=' background-color:rgb(252, 235, 238);border-radius: 10px'>
      <div>VACCINATIONS</div>
      <?php
      count_today_vaccination($count)
      ?>
    </div>
    <div class="card" style=' background-color: rgb(170, 246, 221);border-radius: 10px'>
      <div>TOTAL REGISTRATIONS</div>
      <?php
      total_register_child($count)
      ?>
    </div>
    <div class="card" style=' background-color: rgb(241, 198, 183);border-radius: 10px'>
      <div>TOTAL APPOINTMENTS</div>
      <?php
      count_total_appointment($count)
      ?>
    </div>
    <div class="card" style=' background-color: rgb(249, 228, 249);border-radius: 10px'>
      <div>TOTAL VACCINATIONS</div>
      <?php
      count_total_vaccination($count)
      ?>
    </div>
  </div>
</body>

</html>