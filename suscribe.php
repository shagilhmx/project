<?php
$to = "info@finthink.in"
$from = "shagilhmx@gmail.com"

$headers = "From:".$from."rn";

$subject = "New Subscription";
$body = "New User Subscription:".$_POST['email'];
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
  if (mail($to, $subject, $body, $headers, "-f".$from)) {
    $msg = "you have been suscribed"
  }
  else {
    $msg = "There was a problem with your email('.$_POST['email']')";
  }
}
 ?>
