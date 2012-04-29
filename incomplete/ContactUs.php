<?php
	# Configurations
	##############################################################################
	## Script Configuration
	$file = basename($_SERVER["SCRIPT_NAME"], ".php");   # Used for navagtion higlights.
	include_once ("includes/header.php");
?>
<div class = "container">
	<div class = "hero-unit">
<script type="text/javascript" src="js/webdev.js"></script>

<form class="well" name="contact" action="sendmail.php" method="post" onsubmit="return validateForm();">
  <input type="text" class="span3" placeholder="First and Last Name" name="name" id="name"><br />
  <input type="text" class="span3" placeholder="Email Address" name="email" id="email"><br />
  <input type="text" class="span3" placeholder="Subject" name="subject" id="subject"><br />
  <textarea name="content" id="content" rows ="5" class="span3" placeholder="Message" id="content"></textarea><br /><br />

  <input type="submit" class="btn" valud="Submit" />
</form>

<!--



<table class = "table">
	<form name="contact" action="sendmail.php" method="post" onsubmit="return validateForm()" >
	<tr><td>Your Name: </td><td><input type="text" name="name" id="name"/></td><tr/>
	<tr><td>Your E-mail:</td><td><input type="text" name="email" id = "email"/> </td><tr />
	<tr><td>Subject:</td><td><input type="text" name="subject" id="subject"/> </td><tr />
	<tr><td valgin="top">Content:</td>
	<td><textarea name="content" id="content" rows ="5" ></textarea></td>
	</table>
	<input class="btn" type="submit" value="Submit" />
	</form>
	
	
	<form class="form-horizontal">
	    <div class="control-group">
	      <label class="control-label" for="input01">Text input</label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="input01">
	        <p class="help-block">Supporting help text</p>
	      </div>
	</form>
	<form class="form-horizontal">
	    <div class="control-group">
	      <label class="control-label" for="input01">Text input</label>
	      <div class="controls">
	        <input type="text" class="input-xlarge" id="input01">
	        <p class="help-block">Supporting help text</p>
	      </div>
	-->
	</div>
</div>
</body>
</html>