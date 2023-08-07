<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="Css/login.css">
    <style>
    </style>
</head>

<body>
    <form id="login" class="tab" action="includes/login.inc.php" method="post">
        <h2>Login</h2>
        <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <input type="submit" name="login" value="Login">
    </form>
    </div>
</body>

</html>