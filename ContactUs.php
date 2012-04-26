<?php
	# Configurations
	##############################################################################
	## Script Configuration
	$file = basename($_SERVER["SCRIPT_NAME"], ".php");   # Used for navagtion higlights.
	include_once ("includes/header.php");
?>
<script type="text/javascript" src="js/webdev.js"></script>
<div class = "hero-unit">
<table class = "table">
	<form name="contact" action="sendmail.php" method="post" onsubmit="return validateForm()" >
	<tr><td>Your Name: </td><td><input type="text" name="name" id="name"/><tr/>
	<tr><td>Your E-mail:</td><td><input type="text" name="email" id = "email"/> <tr />
	<tr><td>Subject:</td><td><input type="text" name="subject" id="subject"/> <tr />
	
	<tr><td  VALIGN=TOP>Content:</td>
	<td><textarea name="content" id="content" rows ="5" ></textarea></td>
	</table>
	<button class="btn" value="Submit">submit<!--<input type="submit" value="Submit" />--></button>
	</form>


</div>
