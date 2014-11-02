<?php

	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);
	$data = $_POST['data'];

	$new_data = explode("&",$_POST['data']);
	
    $name_data = explode("=",$new_data[0]); 
	$name = urldecode($name_data[1]);
	
	$email_data = explode("=",$new_data[1]);
    $email = urldecode($email_data[1]);
	
    $subject = $name.' has an enquiry'; 
	$message_data = explode("=",$new_data[2]);
    $message = urldecode($message_data[1]);

    $email_from = $email;
    $email_to = 'email@gmail.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
	include 'insert.php';
    echo json_encode($status);
    die; 