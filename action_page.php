<?php


$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$body_message = 'Message: '.$field_message;

$error="";

if (strlen($body_message) > 0) {
	echo "<script language=\"javascript\" type=\"text/javascript\">
		alert('Thank you for the message of " . $field_message . " We will contact you shortly.');  
		window.location = 'U09A-contacts-page.html';
	</script>";

}
else { 
	echo "<script language=\"javascript\" type=\"text/javascript\">
		alert('Message failed');
		window.location = 'U09A-contacts-page.html';
	</script>";
	

}
?>