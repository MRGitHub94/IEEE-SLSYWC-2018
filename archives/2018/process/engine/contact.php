<?php

header('Location: contact-update.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$issue = $_POST['issue'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" NEW MESSAGE FROM IEEE SLSYWC 2018 WEB\n\n *| Name: $name \n *| E-Mail: $email \n *| Phone: $phone \n *| Inquiry Type: $issue \n *| Subject: $subject \n *| Message: $message \n\n\n ***Please be informed this information are automatically sent from 'Contact Us'area of IEEE SLSYWC. For troubleshooting please contact ManoRanjana, the system administrator.***";
$recipient = "hello@sywc.ieee.lk";
$subject = "SLSYWC Message from $name";
$mailheader = "From: NEW FEEDBACK \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You very much! We are redirecting to the successful page...";
?>