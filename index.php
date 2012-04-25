<?php 

	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	# Configurations
	##############################################################################
	## Script Configuration
	$file = basename($_SERVER["SCRIPT_NAME"], ".php");   # Used for navagtion higlights.
	include_once ("includes/header.php");
	
	include_once('dbObject.php');
        $obj = new dbObject();
        $obj->connect();
?>

<?php
$posts = $obj->getAllPosts(5); ?>
<div class = "container">
	<div class="hero-unit">
	<?php
	foreach($posts as $post)
	{
		echo '<h2>' . $post->title . '</h2>';
		echo '<p>';
		echo nl2br($post->content);
		echo '<br />';
		echo $post->date;
		echo '</p><br /> <br />';
	}


	?>
	</div>
</div>
</body>
</html>