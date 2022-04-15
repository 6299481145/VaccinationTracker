<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAT 1.0</title>
    <link rel="stylesheet" href="design.css">
    <link rel="shortcut icon" href="Image/vac.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header>
        <?php include('Includes/Head.html'); ?>
    </header>
    <style>
        input[type=text],
        input[type=password] {
            margin-left: 600px;
            width: 30%;
        }
    </style>


    <form class="form" action="RegistrationScript.php" method="POST">
        <div class="form">
            <label for="username"><b>Username </b></label>
            <input type="text" placeholder="First & Last name" name="username" id="" required>
        </div>
        <div class="form">
            <label for="email"><b>Email Id</b></label>
            <input type="text" placeholder="Email" name="email" id="" required>
        </div>
        <div class="form">
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Your Password" name="password" id="password" required onclick="visibility()">

        </div>
        <div class="form">
            <label for="user"><b>User</b></label>
            <select name="user" id="user">
                <option value="">Select User Type</option>
                <option value="parent">Parent</option>
                <option value="staff">Staff</option>
            </select>

        </div>

        <button>Sign up</button>

        <footer class="footer">
            <?php
            include('Includes/Footer.html'); ?>
        </footer>


    </form>

</body>

</html>