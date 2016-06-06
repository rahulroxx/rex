<?php

// Grab User submitted information
$fname = $_POST["fname"];
$sname = $_POST["sname"];
$cname = $_POST["cname"];

$email = $_POST["email"];
$pass = $_POST["pass"];

$reason = $_POST["reason"];

echo "First Name: ", ' ', $fname."<br>";
echo "Second Name:", ' ', $sname."<br>";
echo "Company Name: ", ' ', $cname."<br>";
echo "Email: ", ' ', $email."<br>";
echo "Reason to apply: ", ' ', $reason."<br>";


echo "<h2>Successfully Registered.</h2>"
?>
