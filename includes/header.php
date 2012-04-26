<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
	<head> 
    <meta http-equiv="content-type" content=?"text/?html;? charset=utf-8">
	<link href="css/bootstrap.css" rel = "stylesheet">
    <title>Workshop</title>
	</head>
	
<body>


    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Personal Website</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="<?php echo ($file == "index" ? "active" : ""); ?>"><a href="index.php">Home</a></li>
			  <li class="<?php echo ($file == "about" ? "active" : ""); ?>"><a href="about.php">About</a></li>
              <li class="<?php echo ($file == "contactus" ? "active" : ""); ?>"><a href="contactus.php">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>