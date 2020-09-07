<?php
include"config.php";

session_start();
if(isset($_POST['forget']))
{
    $user_id = $_POST['Email'];
    $result = mysqli_query($con,"SELECT * FROM login where username=?'" . $_POST['Email'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_user_id=$row['Email'];
	$password=$row['password'];
	if($user_id==$fetch_user_id) {
				$to = $user_id;
                $subject = "Reset Your Password";
                $txt = "Your password is : $password.";
                $headers = "From: shagilhmx@gmail.com" . "\r\n" .
                "CC: info@finthink.in";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid userid';
				}
} ?>
