<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mail Process</title>
<style>
	body{
		background-image:linear-gradient(red,green);
	}
</style>
</head>
<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Collect form data
		$firstname = htmlspecialchars($_POST['firstname']);
		$lastname = htmlspecialchars($_POST['lastname']);
		$username = htmlspecialchars($_POST['username']);
		$email = htmlspecialchars($_POST['email']);
		$address = htmlspecialchars($_POST['address']);
		$services = htmlspecialchars($_POST['services']);
		$country = htmlspecialchars($_POST['country']);
		$state = htmlspecialchars($_POST['state']);
		$zip = htmlspecialchars($_POST['zip']);

		// Combine data into a single styled variable
		$message = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; }
                .details { margin: 10px 0; }
                .details span { font-weight: bold; }
            </style>
        </head>
        <body>
            <h2>Form Submission Details</h2>
            <div class='details'><span>First Name:</span> $firstname</div>
            <div class='details'><span>Last Name:</span> $lastname</div>
            <div class='details'><span>Username:</span> $username</div>
            <div class='details'><span>Email:</span> $email</div>
            <div class='details'><span>Address:</span> $address</div>
            <div class='details'><span>Services:</span> $services</div>
            <div class='details'><span>Country:</span> $country</div>
            <div class='details'><span>State:</span> $state</div>
            <div class='details'><span>ZIP Code:</span> $zip</div>
        </body>
        </html>
    ";
	}
	?>
	
	
	<?php

	include('smtp/PHPMailerAutoload.php');
	echo smtp_mailer("harharom108@gmail.com", "Contact Mail", $message);
	function smtp_mailer($to, $subject, $msg)
	{
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587;
		$mail->IsHTML(true);
		$mail->CharSet = 'UTF-8';
		// $mail->SMTPDebug = 2;
		$mail->Debugoutput = 'html';
		$mail->Username = "harharom108@gmail.com";
		$mail->Password = "umgb rtvx axou jtox";
		$mail->SetFrom("har@108gmail.com");
		$mail->Subject = $subject;
		$mail->Body = $msg;
		$mail->AddAddress($to);
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => false
			)
		);
		if (!$mail->Send()) {
			echo $mail->ErrorInfo;
		} else {
			return 'Sent mail';
		}
		header("Location: index1.html");
	}
	?>
<script>
	alert("Mail Sending...");
</script>
</body>
</html>