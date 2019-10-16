<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$messege = $_POST['messege'];
  $phone = $_POST['phone']

	$email_from = '7mayurpshah@gmail.com';
	$email_subject = "New Form Submission";
	$email_body = "User Name : $name.\n".
								"User Email: $visitor_email.\n".
                "User mobile:$phone.\n".
                "User Messege:$messege.\n";

$to = "yakshpatel.aisec@gmail.com"
$headers = "From: $email_from \r\n";
$headers =  "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>
