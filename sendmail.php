<html>
<head>
<title>Thank You</title>
</head>
<body>

<?php
	include_once('contactMailer.php');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$content = $_POST['content'];

	
	$mailer = new mailer($name, $email, $subject, $content);
	if ($mailer->sendOK())
	{
		echo 'It was OK!';
	}
	else
		echo 'It was not OK!';

?>

</body>
</html>