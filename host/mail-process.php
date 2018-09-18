<?php
require 'database.php';
if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['city_name']) && isset($_POST['email'])) {
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$city_name = $_POST['city_name'];
$email = $_POST['email'];
if (mysql_query("INSERT INTO clients VALUES ('$first_name','$last_name','$city_name','$email')")){
	require 'mailer/class.phpmailer.php';
	// creates object
	$mail = new PHPMailer(true);
	$mailid = $email;
	$subject = "Thank u";
	$text_message = "Hello";
	$message = "Thank You for <strong>Contacting us.</strong> What service would you prefer? Web development or data analysis?";
	try
	{
	$mail->IsSMTP();
	$mail->isHTML(true);
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Host = "smtp.gmail.com";
	$mail->Port = '465';
	$mail->AddAddress($mailid);
	$mail->Username ="riatkenya@gmail.com";
	$mail->Password ="LION@JUDAH";
	$mail->SetFrom("riatkenya@gmail.com","RIAT");
	$mail->AddReplyTo("riatkenya@gmail.com","RIAT");
	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->AltBody = $message;
	if($mail->Send())
	{
	echo "We are glad to hear from you. An email has been sent to your email";
	}
}
	catch(phpmailerException $ex)
	{
	$msg = "
	".$ex->errorMessage()."
	";
	}
}
}
?>