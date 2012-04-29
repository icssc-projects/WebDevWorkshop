<?php
	# Configurations
	##############################################################################
	## Script Configuration
	$file = basename($_SERVER["SCRIPT_NAME"], ".php");   # Used for navagtion higlights.
	include_once ("includes/header.php");
?>
<div class = "container">
	<div class = "hero-unit">
		<p>
<?php
	include_once('contactMailer.php');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$content = $_POST['content'];

	
	$mailer = new mailer($name, $email, $subject, $content);
	if ($mailer->sendOK())
	{
	?>
		<?=$name?>, your was has been sent without errors.
	<?php
	}
	else
	{
	?>
		<?=$name?>, your was <strong>NOT</strong> sent. Please go back and fill in all fields.
	<?php
	}	
    ?>
	</p>
	</div>
</div>
</body>
</html>