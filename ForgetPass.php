<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAT 1.0</title>
    <link rel="stylesheet" href="design.css">
    <link rel="shortcut icon" href="Image/vac.png" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
 
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Change Password</span></div>
        <form  action="ForgetPassScript.php" method="POST">
          <div class="row">
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="row">
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Re-type Password" name="password" required>
          </div>
          <div class="row button">
            <input type="submit" value="Reset Password">
          </div>
        
        </form>
      </div>
    </div>

  </body>
</html>
