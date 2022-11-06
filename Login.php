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
        <div class="title"><span>Login Form</span></div>
        <form  action="LoginScript.php" method="POST">
          <div class="row">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Username or Email id" name="username" required>
          </div>
          <div class="row">
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
         
          <div class="row">
          <i class="fa fa-user"></i>
          <select name="type" placeholder="User type" name="select" required>
               <option value="">Select user Type</option>
                <option value="parent">Parent</option>
                <option value="staff">Staff</option>
            </select>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="Register.php">Signup now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
