<?php 

	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	include_once('dbObject.php');
        $obj = new dbObject();
        $obj->connect();
?>

<html>
<head>
<title>This is a test</title>
</head>
<body>
<?php
$posts = $obj->getAllPosts(5);
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

</body>
</html>