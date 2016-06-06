<?php

// Grab User submitted information
$email = $_POST["users_email"];
$pass = $_POST["users_pass"];
if('propshelf1'==$email && 'prop@123'==$pass)
    echo"You have successfully logged in.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>
