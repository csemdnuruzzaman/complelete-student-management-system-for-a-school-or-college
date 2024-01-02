<?php 
include("connect.php");
$to = "nuruzzamanphone@gmail.com";
$name = $_REQUEST['name'];
$subject = $_REQUEST['subject'];
$txt = "I am ".$name." ".$_REQUEST['message'];
$email = $_REQUEST['email'];
$headers = "From: " .$email. "\r\n" .
"CC: nuruzzamanpolytechnic@gmail.com";

$mail = mail($to,$subject,$txt,$headers);
if($mail){
	header("location: ../contact.php?result=success");
}else{
	header("location: ../contact.php?result=wrong");
}
