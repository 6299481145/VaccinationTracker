<?php
if (isset($_POST['click_me'])) {
  require "Utility.php";
  $header = "VAT";
  $body = "Child registration Successfully!";
  message::show_modal($header, $body);
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



<form action="" method="POST">
    <button name="click_me">Click_Me</button>
</form>



</body>
</html>