<?php
$name = $_POST["name"];
$email = $_POST["email"];
$category = $_POST["category"];
$message = $_POST["message"];


$EmailTo = "contact.keshavyadav@gmail.com";
$Title = "New Message Received from Website";

// prepare email body text
$Fields .= "Name: ";
$Fields .= $name;
$Fields .= "\n";

$Fields .= "Email: ";
$Fields .= $email;
$Fields .= "\n";

$Fields .= "Category: ";
$Fields .= $category;
$Fields .= "\n";

$Fields .= "Message: ";
$Fields .= $message;
$Fields .= "\n";


// send email
$success = mail($EmailTo,  $Title,  $Fields, "From:".$email);

