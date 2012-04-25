<html>
<head>
<script type="text/javascript" src="js/webdev.js"></script>
<title>Contact Us</title>
</head>
<body>
<form name="contact" action="sendmail.php" method="post" onsubmit="return validateForm()" >
Your Name: <input type="text" name="name" id="name"/> <br />
Your E-mail: <input type="text" name="email" id = "email"/> <br />
Subject: <input type="text" name="subject" id="subject"/> <br />
Content: <br />
<textarea name="content" id="subject" rows="20" cols="20" ></textarea><br />

<input type="submit" value="Submit" />
</form>
</body>
</html>