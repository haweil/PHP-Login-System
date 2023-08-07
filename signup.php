<!DOCTYPE html>
<html>

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SignUp Form</title>
        <link rel="stylesheet" type="text/css" href="Css/signup.css">
    </head>

<body>

    <form id="signup" class="tab active" action="includes/signup.inc.php" method="post">
        <h2>Sign UP</h2>
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Submit" onclick="window.location.href='login.php'">
        <input type="submit" value="Home page" onclick="window.location.href='home page.php'">

    </form>
</body>

</html>