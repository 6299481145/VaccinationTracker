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
  <header>
        <?php include('Includes/Head.html');?>
    </header>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Register Form</span></div>
        <form  action="RegistrationScript.php" method="POST">
          <div class="row">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Username" name="username" required>
          </div>
          <div class="row">
          <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="text" placeholder="Email id" name="email" required>
          </div>
          <div class="row">
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
         
          <div class="row">
          <i class="fa fa-user"></i>
          <select name="type"  name="type" required>
            <option value="">Select user type</option>
              <option value="parent">Parent</option>
            </select>
          </div>
          <div class="row button">
            <input type="submit" value="Submit">
          </div>
          <div class="signup-link">Already registered <a href="Login.php">Signin now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
