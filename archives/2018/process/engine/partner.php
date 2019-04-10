<?php

header('Location: partner-update.php');
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" NEW PARTNERSHIP REQUEST FOR IEEE SLSYWC '18\n\n *| Name: $name \n *| Company / Organization: $subject \n *| Email: $email \n *| Phone: $phone \n *| Message: $message \n\n\n ***Please be informed this information are automatically sent from 'Contact Us'area of IEEE SLSYWC. For troubleshooting please contact ManoRanjana, the system administrator.***";
$recipient = "hello@sywc.ieee.lk";
$subject = "New Partnering Request from $name";
$mailheader = "From: NEW PARTNERSHIP REQUEST \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You very much! We are redirecting to the successful page...";
?>