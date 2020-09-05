<?php	
	if(empty($_POST['name_15033']) && strlen($_POST['name_15033']) == 0 || empty($_POST['email_15033']) && strlen($_POST['email_15033']) == 0 || empty($_POST['message_15033']) && strlen($_POST['message_15033']) == 0)
	{
		return false;
	}
	
	$name_15033 = $_POST['name_15033'];
	$email_15033 = $_POST['email_15033'];
	$message_15033 = $_POST['message_15033'];
	$optin_15033 = $_POST['optin_15033'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_15033: $name_15033 \nEmail_15033: $email_15033 \nMessage_15033: $message_15033 \nOptin_15033: $optin_15033 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_15033";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>