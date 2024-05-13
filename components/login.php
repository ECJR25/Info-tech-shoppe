<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../style/general.css">
  <link rel="stylesheet" href="../style/login.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    
<?php include("./header.php"); ?>

    <div class="container">
        <div class="login form" style="color:black;">
            <header>Login</header>
            <form action="#">
                <input type="text" id="username" placeholder="Enter your username">
                <input type="password" id="password" placeholder="Enter your password">
                <input type="button" class="button" value="Login">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                <a href="./signup.php"><label for="check">Signup</label></a>
                </span>
            </div>
        </div>
    </div>

    <script src="../scripts/login.js"></script>
</body>
</html>