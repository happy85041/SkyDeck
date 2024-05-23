<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_message = "Name: ".$name."\nEmail: ".$email."\nPhone: ".$phone."\nSubject: ".$subject."\nMessage: ".$message."";

mail("support@skydeck36.in" , "skydeck36 Inquiry", $email_message) or die("Error!");
header("location: ../index.html");
?>


