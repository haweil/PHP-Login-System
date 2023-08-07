<?php

if (isset($_POST["submit"]))
{
    // Grabbing the data
    $first_name= $_POST["first_name"];
    $last_name= $_POST["last_name"];
    $email= $_POST["email"];
    $username= $_POST["username"];
    $password= $_POST["password"];

    //Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    
    $signup = new SignupContr ($first_name,$last_name,$email,$username,$password);

    //Running error handlers and user sign up 
    $signup->signupUser();
    // Going to back front page
    header("location: ../login.php?error=none");

}