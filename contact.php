<?php 
$fullname = $_POST['Name'];
$email = $_POST['Email'];
$subject = "[Blackbird] ".$_POST['Subject'];
$details = $_POST['Message'];
$formcontent = "From: $fullname\nMessage: $details";
$recipient = "oni@vtr.net";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://blackbird-software.feriadesoftware.cl/contacto.html');
?>