<?php
//get data from form  

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$number = $_POST['number'];

$to = "mm4266081@gmail.com";
$subject = "Mail From " . $name;
$txt =  " Subject =\t" . $subject . "\r\n Name = \t" . $name . "\r\n Email = \t" . $email . "\r\n Message =\t" . $message .
     "\r\n Number =\t" . $number ;

$headers = "From: mm4266081@gmail.com" . "\r\n" .
    "CC: mm4266080@gmail.com";

if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:index.html");
?>