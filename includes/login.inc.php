<?php
include "../classes/dbh.classes.php";
$dbh = new Dbh();
$email = $_POST['email'];
$password = $_POST['password'];

$user = $dbh->loginUser($email, $password);

if ($user) {
    $firstname = $user['users_firstname'];
    $lastname = $user['users_lastname'];
    echo "Login successful! Welcome, " . $firstname . " " . $lastname . "!";
} else {
echo "Invalid email or password. Please try again.";
}
?>