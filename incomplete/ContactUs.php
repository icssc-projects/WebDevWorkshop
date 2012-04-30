
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
	</div>
</div>
</body>
</html>