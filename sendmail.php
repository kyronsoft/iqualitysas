<?php
	$to      = 'contacto@i-quality.com.co';
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$headers = array(
	    'From' => $_POST['email'],
	    'Reply-To' => 'ingenieria@i-quality.com.co',
	    'X-Mailer' => 'PHP/' . phpversion()
	);

	mail($to, $subject, $message, $headers);
	header('location: index.html');
?>