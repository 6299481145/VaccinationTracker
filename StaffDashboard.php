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
    <?php include('Includes/Header.php');?>
  </header>
 
<div class="cards">
<div class="card" style=' background-color: rgb(211, 249, 236);border-radius: 10px'>
<i class="fa fa-registration" style='font-size:30px; color:lightcyne'></i>
<div>CHILD REGISTRATIONS</div> 
<?php count_register_child($count)?>
 </div>
<div class="card" style=' background-color: rgb(224, 255, 255);border-radius: 10px'>
<i class="fa fa-user" style='font-size:30px; color:lightseagreen'></i>
<div>APPOINTMENTS</div> 

</div>
<div class="card"  style=' background-color:rgb(248, 248, 214);border-radius: 10px'>VACCINATIONS</div>
<div class="card" style=' background-color: rgb(253, 229, 220);border-radius: 10px'>
<i class="fa fa-child" style='font-size:30px; color:l'></i>
<div> CHILDREN (0-6 MONTHS)</div>
</div>
<div class="card" style=' background-color: rgb(252, 235, 238);border-radius: 10px'>

<i class="fa fa-baby" style='font-size:30px; color:lightseagreen'></i>
  CHILDREN (6MON-3YEARS)</div>
<div class="card"style=' background-color:rgb(249, 228, 249);border-radius: 10px' >CHILDREN (3-6YEARS)</div>
<div class="card"style=' background-color: rgb(245, 230, 224);border-radius: 10px'>TOTAL REGISTRATIONS</div>
<div class="card"style=' background-color: rgb(241, 198, 183);border-radius: 10px'>TOTAL VACCINATIONS</div>
<div class="card"style=' background-color: rgb(170, 246, 221);border-radius: 10px'>FULLY VACCINATED CHILD</div>
</div>

  <script>
		$(document).foundation();
	</script>
</body>
</html>