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
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="first <?php echo ($file == "index" ? "active" : ""); ?>"><a href="index.php">Home</a></li>
				<li class = " <?php echo ($file == "about" ? "active" : ""); ?>"><a href="rooms.php">Rooms/Amenities</a></li>
                <li<?php echo ($file == "location" ? " class=\"active\"" : ""); ?>><a href="location.php">Location</a></li>
    
                <li<?php echo ($file == "reservations" ? " class=\"active\"" : ""); ?>><a href="http://book.bestwestern.com/bestwestern/priceAvail.do?propertyCode=14195&amp;disablenav=true&amp;suppressSSLPopup=true&amp;sob=P3079" target="_blank">Rates &amp; Reservations</a></li>
				<li<?php echo ($file == "area" ? " class=\"active\"" : ""); ?>><a href="area.php">Woodstock Area</a></li>
                <li class="last <?php echo ($file == "contacts" ? "active" : ""); ?>"><a href="contacts.php">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>