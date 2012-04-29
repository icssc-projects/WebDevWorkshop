<?php
	# Configurations
	##############################################################################
	## Script Configuration
	$file = basename($_SERVER["SCRIPT_NAME"], ".php");   # Used for navagtion higlights.
	include_once ("includes/header.php");
?>

<div class = "container">
	<div class = "hero-unit">
			<!--<h1> Peter the Anteater</h1>-->
			<div class = "top">
				<div class = "left">
				<table>
					<tr><td><strong>Name:</strong></td><td>Peter the Anteater</td></tr>
					<tr><td><strong>Age:</strong></td><td>42</td></tr>
					<tr><td><strong>Occupation:</strong></td><td>Anteater</td></tr>
					<tr><td><strong>Address:</strong></td><td>260 Aldrich Hall Irvine, CA 92697-1075</td></tr>
					<tr><td><strong>Phone Number: </strong></td><td>(949) 824-6703</td></tr>
					<tr><td><strong>Email:</strong></td><td>admissions@uci.edu</td></tr>
					<tr><td><strong>Website:</strong></td><td>uci.edu/peter</td></tr>
				</table>
				</div>
				<div class = "portrait">
					<ul class = "thumbnails">
						<li class = "span3">
							<a class ="thumbnail">
								<img src = "img/headshot.jpg"/>
							</a>
						</li>
					</ul>
				</div>

			</div>
			<div class = "bottom">
				<hr>
				<p><strong>Qualifications:</strong><br />
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br/>
				</p><hr>
				<p><strong>Experience:</strong><br />
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
				</p>
			</div>
	</div>
</div>