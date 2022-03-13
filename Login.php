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

        <form class="form" action="LoginScript.php" method="POST">
            <div class="form">
            <h1>Vaccination Tracker</h1>
                <label for="user_id"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="user_id" id=""required>
            </div>
            <div class="form">
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="password"required onclick="visibility()">
                
            </div>
            <div class="form">
                <label for="user"><b>User</b></label>
                <select name="user" id="user">
                   <option value="parent">Parent</option>
                   <option value="staff">Staff</option>
                </select>

            </div>
            
            <button >Login</button>
           
            

           
        </form>
   
</body>
</html>