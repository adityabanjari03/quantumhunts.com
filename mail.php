<?php
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];

$to ="adityabanjari03@gmail.com";

$subject ="Mail From website";
$txt ="Name =". $name . "\r\n  Email = " .   $emailaddress  .  "\r\n Message=" . $message ;

$headers= "From: adityabanjari@protonmail.com" . "\r\n" .
"CC: adityabanjari03@gmail.com";
if($email!=NULL){
	mail($to,$subject,$txt,$headers);

}

header("location:thankyou.html")
?>