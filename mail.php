<?php
//get data from form  
$name = $_POST['w3lName'];
$email= $_POST['rw3lSende'];
$number= $_POST['w3lSubject'];
$message= $_POST['w3lMessage'];
$to = "Support@abcinfomedia.in";
$subject = "Mail From matrimonywebsitedesigners.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Mobile number =" . $number;
$headers = "From: noreply@matrimonywebsitedesigners.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>