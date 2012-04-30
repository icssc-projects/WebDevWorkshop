
<div class = "container">
	<div class = "hero-unit">
		<p>
<?php
	
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