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
    <?php include('Includes/Header.php');?>
  </header>
  <div class="header">
    <h2>Home</h2>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <h3>Appointment Booked</h3>
        <p>0</p>

      </div>
    </div>

    <div class="column">
      <div class="card">
        <h3>Compiled</h3>
        <p>0</p>

      </div>
    </div>

    <div class="column">
      <div class="card">
        <h3>Remaining</h3>
        <p>0</p>

      </div>
    </div>

    <div class="column">
      <div class="card">
        <h3>Current</h3>
        <a href="">next</a>

      </div>
    </div>
  </div>


  <footer class="footer">
    <?php
    include('Includes/Footer.html'); ?>
  </footer>

</body>

</html>