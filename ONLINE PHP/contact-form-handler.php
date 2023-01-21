<?php
// Get data from form
$first = $_POST['firstName'];
$last = $_POST['lastInitial'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];

$to = "sleepydogstudiosvr@gmail.com";



$txt = "Name: ". $first . " " . $last . "\r\n Email: "
	. $email . "\r\n Message: " . $message;

$headers = "From: sleepydogstudiosvr@gmail.com";

if($email != NULL) {
	mail($to, $subject, $txt, $headers);
}

// Redirect to
header("Location:https://wwww.sleepydogstudios.net");
?>
